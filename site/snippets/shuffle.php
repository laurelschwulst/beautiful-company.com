<div class="images">

  <?php $all = []; ?>

  <?php foreach(page('i')->children()->visible() as $thing): ?>

    <?php foreach($thing->images() as $image): ?>
      <?php
        array_push($all, array(
         'work' => $thing,
         'image' => $image)
        );
      ?>
    <?php endforeach ?>

  <?php endforeach ?>

  <?php shuffle($all); ?>

  <?php 
  for($i = 0; $i < count($all); $i++) {
    $thing = $all[$i]['work'];
    $image = $all[$i]['image'];
    echo "<a href='" . $thing . "'>";
  ?>
    <div class="thumb">
      <?php echo thumb($image, array('width' => 500)); ?>
    </div>
  <?php 
    echo "</a>";
  }
  ?> 

</div>