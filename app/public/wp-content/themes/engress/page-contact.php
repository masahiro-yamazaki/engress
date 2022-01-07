<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <section class='ly_contactFv'>
    <div class='ly_inner'>
      <h1 class='el_fvTitle'>ブログ</h1>
    </div>
  </section>
  <?php if( !(is_home() || is_front_page() )): ?>
    <section class='ly_breadcrumb'>
      <div class='ly_inner bl_breadcrumb'>
        <?php
        if ( function_exists('bcn_display') ) {
          bcn_display();
        }
        ?>
      </div>
    </section>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
