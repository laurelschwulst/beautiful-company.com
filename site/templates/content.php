<?php snippet('header') ?>

<body style="background-color: <?php echo $page->background(); ?>; color: <?php echo $page->text_color(); ?>;">

<?php $index = 0; ?>
<?php $images = $page->images()->sortBy('sort', 'asc'); ?>

<?php foreach($images as $key => $image): ?>
	<?php $index++; ?>
<?php endforeach ?>

<?php if (!$page->writing()->empty()): ?>
	&nbsp;
<?php else: ?>

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
	    	<div class="image-container" class="<?php echo $image->image_size() ?>">
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
	<div class="image-container <?php echo $image->image_size() ?>">
		<img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
	</div>
    <?php endforeach ?>

<?php endif ?>

</div>

<?php endif ?>

<!-- NAVS BEGIN -->
<nav class="content">

	<!-- BACK -->
	<a class="back" href="<?php echo $pages->find('home')->url() ?>" class="index">
	</a>

</nav>
<!-- NAVS END -->


<!-- WRITING -->
<?php if (!$page->writing()->empty()): ?>
<section class="writing">
	<?php echo $page->writing()->kirbytext(); ?>
</section>
<?php endif ?>


<!-- INFO BEGIN -->
<div class="content-info grid-wrap">

	<div class="grid-col col-one-third">
		&nbsp;
	</div>
	<div class="grid-col col-one-third">

		<div class="center">

	      <!-- TITLE -->
		  <section class="title">
		    <h1><?php echo $page->title() ?></h1>
		  </section>

		  <!-- LINK -->
		  <?php if (!$page->link()->empty()): ?>
		    <section class="link">
		      <a href="<?php echo $page->link() ?>" target="_blank"><?php echo $page->link() ?></a>
		    </section>
		  <?php endif ?>

		  <!-- TYPE -->
		  <?php if (!$page->type()->empty()): ?>
		    <section class="type">
		      <?php echo $page->type() ?>
		    </section>
		  <?php endif ?>

		  <!-- DESCRIPTION -->
		  <?php if (!$page->description()->empty()): ?>
		    <section class="description">
		      <?php echo $page->description()->kirbytext() ?>
		    </section>
		  <?php endif ?>

		  <!-- CREDITS -->
		  <?php if (!$page->credits()->empty()): ?>
		    <section class="credits">
		      <?php echo $page->credits()->kirbytext() ?>
		    </section>
		  <?php endif ?>

		</div>

	</div>
	<div class="grid-col col-one-third">
		&nbsp;
	</div>
</div>


<?php snippet('footer') ?>