<!-- PREV -->
<?php if($prev = $page->prevVisible()): ?>
	<a class="prev" href="<?php echo $prev->url() ?>">
		&larr;
	</a>
<?php else: ?>
	<div class="filler"></div>
<?php endif ?>

<!-- NEXT -->
<?php if($next = $page->nextVisible()): ?>
	<a class="next" href="<?php echo $next->url() ?>">
		&rarr;
	</a>
<?php else: ?>
	<div class="filler"></div>
<?php endif ?>