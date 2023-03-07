<?php
$directory = 'docs';
$request = $directory . $_SERVER['REQUEST_URI'];

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
  $markdown = file_get_contents($request . '.md');
  $Parsedown = new Parsedown();

  echo $Parsedown->text($markdown);

} else {
  http_response_code(404);
}
?>
