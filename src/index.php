<?php
$docs_folder = 'docs';
$request = $docs_folder . $_SERVER['REQUEST_URI'];
$library_name = 'MDLibrary';

if (is_dir($request)) {

  outputHeader('Folder');
  
  $folders = array();
  // Loop through all folders in target dir
  foreach (glob($request . '*', GLOB_ONLYDIR) as $folder) {
    if (substr($folder, 0, strlen($docs_folder)) == $docs_folder) {
      // Get path minus the docs directory name
      $folder = substr($folder, strlen($docs_folder)) . '/';
      // Convert folder name to lower-case
      $folders[] = strtolower($folder);
    }
  }
  
  $documents = array();
  foreach (glob($request . '*.md') as $document) {
    if (substr($document, 0, strlen($docs_folder)) == $docs_folder) {
      $document = substr($document, strlen($docs_folder));
      $document = strtolower($document);
      // Get only the file name from path
      $documents[] = pathinfo($document, PATHINFO_FILENAME);
    }
  }
  
  include 'assets/includes/directory-template.php';
  include 'assets/includes/footer.php';

} elseif (is_file($request . '.md')) {
  
  outputHeader('Document');

  // Import Parsedown library and parse .md file to variable
  include('assets/includes/Parsedown.php');
  $file = file_get_contents($request . '.md');
  $Parsedown = new Parsedown();
  $markdown = $Parsedown->text($file);

  include 'assets/includes/document-template.php';
  include 'assets/includes/footer.php';

} else {
  http_response_code(404);
}

function outputHeader($type) {
  global $docs_folder;
  global $request;
  global $library_name;

  // Compile required information for head and header
  $page_name = formatDisplayText($request);
  $name_prefix = $type . ': ';
  $page_title = $page_name . ' | ' . $type . ' | ' . $library_name;

  // Check if request is for home page
  if ($request == $docs_folder . '/') {
    $name_prefix = 'Welcome to';
    $page_name = $library_name;
    $page_title = $name_prefix . ' ' . $page_name;
  }

  include 'assets/includes/header.php';
}

function formatDisplayText($text) {
  // Get last section of request, remove hyphens, capitalise words
  $text = ucwords(preg_replace("/[^a-zA-Z]+/", ' ', basename($text)));
  return $text;
}
?>
