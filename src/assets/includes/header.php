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
<body>

<!-- Navigation Controls -->
<nav id="nav" class="container">
  <div>
    <a href="<?=substr(rtrim($_SERVER['REQUEST_URI'], '/'), 0, strrpos(rtrim($_SERVER['REQUEST_URI'], '/'), '/')+1)?>">
      <i class="fa-solid fa-angle-left"></i>
    </a>
    <span><?=$name_prefix?> <span><?=$page_name?></span></span>
  </div>
  <div>
    <a href="/">
      <i class="fa-solid fa-house"></i>
    </a>
    <button id="toggle" type="button">
      <i class="fa-solid fa-circle-half-stroke"></i>
    </button>
  </div>
</nav>

<main>
