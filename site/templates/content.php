<?php snippet('header') ?>

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
			<span class="image-row">
		<?php elseif ($index - 1 == $new_index): ?>
			<a href="#1" class="image-row" id="<?php echo $new_index + 1; ?>">
		<?php else: ?>
	  	<a href="#<?php echo $new_index + 2; ?>" class="image-row" id="<?php echo $new_index + 1; ?>">
	<?php endif ?>
    	<div class="image-container" class="<?php echo $image->image_size() ?>">
    		<img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
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

<nav class="show-info">
	
	<!-- INFO -->
	<a class="info" href="#">
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

		<!-- TITLE -->
		<section class="title">
			<h1><?php echo $page->title() ?></h1>
		</section>

	</div>
	<div class="grid-col col-one-third middle">

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

		  <!-- CREDITS SHORT and LONG-->
		  <?php if (!$page->credits_short()->empty()): ?>
		    <section class="credits-short">
		      <?php echo $page->credits_short()->kirbytext() ?>
		      <?php echo $page->credits()->kirbytext() ?>
		    </section>
		  <?php endif ?>

		  <!-- YEAR -->
			<?php if (!$page->year()->empty()): ?>
			<section class="year">
			<?php echo $page->year() ?>
			</section>
			<?php endif ?>
		  
	</div>
	<div class="grid-col col-one-third">
		&nbsp;
	</div>

	<div class="grid-col col-full">
		<!-- RELATED -->
		<?php if(!$page->related()->empty()): ?>
		<section class="related">
		  <?php foreach($page->related()->pages() as $item): ?>
		      <a href="<?php echo $item->url() ?>" class="item">
		      	<?php $image = $item->images()->shuffle()->first(); ?>
		        <?php echo thumb($image, array('width' => 500)); ?>
		      </a>
		  <?php endforeach ?>
		</section>
		<?php endif ?>
	</div>

	<!-- END BLOCK -->
    <div class="end-block"></div>

</div>


<?php snippet('footer') ?>