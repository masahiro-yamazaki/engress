<!-- ページネーション -->
<?php if (paginate_links()) : ?>
  <div class='bl_pagination'>
    <?php
      $args = array(
        'end_size' => 1,
        'mid_size' => 2,
        'prev_next' => false
      );
      echo paginate_links($args);
    ?>
  </div>
<?php endif; ?>
