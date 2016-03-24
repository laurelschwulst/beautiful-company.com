<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png">

  <title><?php echo $site->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  
  <?php

    echo css('assets/css/normalize.css');
    echo css('assets/css/main.css');

    $cssURI  = 'assets/css/' . $page->template() . '.css';
    $cssRoot = c::get('root') . '/' . $cssURI;

    echo css($cssURI);

  ?>

</head>
<body>

  <!-- <header>
    <h1><a href="#">Beautiful Company</a></h1>
    <a href="#">Images</a>
    <a href="#">Index</a>
  </header> -->