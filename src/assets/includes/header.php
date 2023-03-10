<?php
// Detect preferred theme
$theme = '';
if (!empty($_COOKIE['light-mode']) && $_COOKIE['light-mode'] == 'true') {
  $theme = 'class="light-mode"';
}
?>
<!DOCTYPE html>
<html lang="en-GB" dir="ltr">
<head>
  <meta name="charset" content="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <title><?=$page_title?></title>

  <!-- Fontawesome -->
  <link rel="stylesheet" href="/assets/fonts/fontawesome/css/fontawesome.min.css"/>
  <link rel="stylesheet" href="/assets/fonts/fontawesome/css/solid.min.css"/>

  <!-- Resources -->
  <link rel="stylesheet" href="/assets/styles.css"/>
  <script defer src="/assets/functions.js" charset="utf-8"></script>
</head>
<body <?=$theme?>>

<!-- Navigation Controls -->
<nav id="nav" class="container">
  <div>
    <?php if ($request != $docs_folder . '/'): ?>
    <a href="<?=substr(rtrim($_SERVER['REQUEST_URI'], '/'), 0, strrpos(rtrim($_SERVER['REQUEST_URI'], '/'), '/')+1)?>">
      <i class="fa-solid fa-angle-left"></i>
    </a>
    <?php endif; ?>
    <span><?=$name_prefix?> <span><?=$page_name?></span></span>
  </div>
  <div>
    <?php if ($request != $docs_folder . '/'): ?>
    <a href="/">
      <i class="fa-solid fa-house"></i>
    </a>
    <?php endif; ?>
    <button id="toggle" type="button">
      <i class="fa-solid fa-circle-half-stroke"></i>
    </button>
  </div>
</nav>

<main>
