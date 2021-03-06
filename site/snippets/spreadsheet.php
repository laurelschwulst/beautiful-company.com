<div class="index-container">

  <nav class="work">
    <ul class="grid-wrap">
      <?php foreach($pages->find('i')->children()->visible()->sortBy('year')->flip() as $work): ?>
        <?php if($work->hide_from_index() == '1'): ?>
        <?php elseif($work->dormant() == '1'): ?>
          <li class="grid-col col-full dormant">
        <?php else: ?>
          <li class="grid-col col-full">
          <a href="<?php echo $work->url() ?>" class="grid-col col-full">
        <?php endif ?>

        <?php if($work->hide_from_index() == '1'): ?>
        <?php else: ?>

          <!-- TITLE -->
          <div class="title grid-value large">
            <?php echo $work->title() ?>
          </div>

          <!-- YEAR -->
          <div class="year grid-value small">
            <?php if (!$work->year()->empty()): ?>
              <?php echo $work->year() ?>
            <?php else: ?>
              &nbsp;
            <?php endif ?>
          </div>

          <!-- TYPE -->
          <div class="type grid-value small">
            <?php if (!$work->type()->empty()): ?>
              <?php echo $work->type() ?>
            <?php else: ?>
              &nbsp;
            <?php endif ?>
          </div>

          <!-- LINK (PLACEHOLDER) -->
          <div class="grid-value link">
            &nbsp;
          </div>

          <!-- CREDITS SHORT-->
          <div class="credits-short grid-value">
            <?php if (!$work->credits_short()->empty()): ?>
              <?php echo $work->credits_short() ?>
            <?php else: ?>
              &nbsp;
            <?php endif ?>
          </div>

        <?php endif ?>

        <?php if($work->hide_from_index() == '1'): ?>
        <?php elseif($work->dormant() == '1'): ?>
        <?php else: ?>

          </a>

        <?php endif ?>

        <!-- LINK (ACTUAL) -->
        <?php if (!$work->link()->empty()): ?>
          <a href="<?php echo $work->link() ?>" target="_blank" class="actual-link">
            <?php echo $work->link() ?>
          </a>
        <?php endif ?>
        
        </li>

      <?php endforeach ?>
    </ul>
  </nav>
  
  <div class="clearer"></div>

</div>