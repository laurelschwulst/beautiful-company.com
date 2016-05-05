<?php

// stop without videos
if(empty($videos)) return;

// set some defaults
if(!isset($width))    $width    = 900;
if(!isset($height))   $height   = 900;
if(!isset($preload))  $preload  = true;
if(!isset($controls)) $controls = true;

// build the html tags for the video element
$preload  = ($preload)  ? ' preload="preload"'   : '';
$controls = ($controls) ? ' controls="controls"' : '';

?>
<video width="<?php echo $width ?>" height="<?php echo $height ?>"<?php echo $preload . $controls ?>>
  <?php foreach($videos as $video): ?>
  <source src="<?php echo $video->url() ?>" type="<?php echo $video->mime() ?>" />
  <?php endforeach ?>
  <?php if(isset($thumb)): ?>
  <img src="<?php echo $thumb->url() ?>" alt="<?php echo $thumb->title() ?>" />
  <?php endif ?>
</video>