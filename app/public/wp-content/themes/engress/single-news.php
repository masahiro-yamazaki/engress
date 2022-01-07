<?php get_header(); ?>
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

  <section class='ly_newsDetail'>
    <div class='ly_inner'>
      <h1 class='bl_newsDetail_title'><?php the_title(); ?></h1>
      <time class='bl_newsDetail_time'><?php the_time('Y-m-d'); ?></time>
      <div class='bl_newsDetail_content'>
        <?php the_content(); ?>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/contact'); ?>
<?php get_footer(); ?>
