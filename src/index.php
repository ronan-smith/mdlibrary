<?php
$directory = 'docs';
$request = $directory . $_SERVER['REQUEST_URI'];

include 'includes/head.php';

if (is_dir($request)) {

  $folders = array();
  foreach (glob($request . '*', GLOB_ONLYDIR) as $folder) {
    if (substr($folder, 0, strlen($directory)) == $directory) {
      $folders[] = substr($folder, strlen($directory)) . '/';
    }
  }

  $documents = array();
  foreach (glob($request . '*.md') as $document) {
    if (substr($document, 0, strlen($directory)) == $directory) {
      $document = substr($document, strlen($directory));
      $documents[] = pathinfo($document, PATHINFO_FILENAME);
    }
  }

  include 'includes/directory-template.php';

} elseif (is_file($request . '.md')) {
  
  include('includes/Parsedown.php');
  $file = file_get_contents($request . '.md');
  $Parsedown = new Parsedown();
  $markdown = $Parsedown->text($file);

  include 'includes/document-template.php';

} else {
  http_response_code(404);
}

include 'includes/footer.php';
?>
