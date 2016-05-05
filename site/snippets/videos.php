<!-- VIDEOS -->

<?php

	$videos = array(
	  $page->videos()->find('movie.mp4'),
	  $page->videos()->find('movie.mobile.mp4'),
	  $page->videos()->find('movie.webm'),
	  $page->videos()->find('movie.ogv'),
	);

	snippet('video', array(
	  'videos' => $videos,
	  'thumb'  => $page->images()->find('movie.jpg')
	)); 

?>

<?php snippet('video') ?>