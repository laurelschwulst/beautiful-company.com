<?php if (!$page->credits()->empty()): ?>
<div class="credits" id="credits">
	<?php echo $page->credits()->kirbytext(); ?>
</div>
<?php endif ?>