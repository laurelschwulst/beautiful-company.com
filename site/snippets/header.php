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

  <script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//beautiful-company.com/analytics/";
      _paq.push(['setTrackerUrl', u+'piwik.php']);
      _paq.push(['setSiteId', 1]);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <noscript><p><img src="//beautiful-company.com/analytics/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>

  <script src="https://dl.dropboxusercontent.com/u/9299006/Script/global.js"></script>
  
  </head>

<body>