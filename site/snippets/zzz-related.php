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