<?php if( !(is_home() || is_front_page() )): ?>
  <section class='ly_breadcrumb'>
    <div class='ly_inner'>
      <div class='el_breadcrumb'>
        <?php
        if ( function_exists('bcn_display') ) {
          bcn_display();
        }
        ?>
      </div>
    </div>
  </section>
<?php endif; ?>
