<?php snippet('header') ?>

<body style="background-color: <?php echo $page->background(); ?>">

<?php $index = 0; ?>
<?php $images = $page->images()->sortBy('sort', 'asc'); ?>

<?php foreach($images as $key => $image): ?>
	<?php $index++; ?>
<?php endforeach ?>

<?php if ($page->zoom() == '1'): ?>
	<div class="group large-slides">
<?php elseif ($page->slideshow() == '1'): ?>
	<div class="group slides">
<?php else: ?>
	<div class="group free">
<?php endif ?>

<?php if ($page->slideshow() == '1'): ?>

	<?php $new_index = 0; ?>
	<?php foreach($images as $key => $image): ?>
		<?php if ($index == 1): ?>
			<span>
		<?php elseif ($index - 1 == $new_index): ?>
			<a href="#1">
		<?php else: ?>
	  	<a href="#<?php echo $new_index + 2; ?>">
	<?php endif ?>
		<div id="<?php echo $new_index + 1; ?>" class="image-row">
	    	<div class="image-container">
	    		<img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
	    	</div>
	    </div>
	<?php if ($index == 1): ?>
			</span>
		<?php else: ?>
	    </a>
	<?php endif ?>
	<?php $new_index++; ?>
	<?php endforeach ?>

<?php else: ?>

	<?php foreach($images as $key => $image): ?>
	<div class="image-container">
		<img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="<?php echo $image->image_size() ?>">
	</div>
    <?php endforeach ?>

<?php endif ?>

</div>

<?php if (!$page->credits()->empty()): ?>
<div class="credits" id="credits">
	<?php echo $page->credits()->kirbytext(); ?>
</div>
<?php endif ?>

<!-- NAVS BEGIN -->
<nav class="content">

	<!-- BACK -->
	<a class="back" href="<?php echo $pages->find('i')->url() ?>" class="index">
	</a>

</nav>
<!-- NAVS END -->


<?php snippet('footer') ?>