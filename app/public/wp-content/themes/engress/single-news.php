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
      <?php the_content(); ?>
    </div>
  </section>

  <!-- 資料請求 -->
  <section class='ly_document'>
    <div class='ly_inner'>
      <h2 class='bl_document_title'>まずは無料で資料請求から</h2>
      <div class='bl_document_button'>
        <a class='el_button el_button__orange'>資料請求</a>
      </div>
      <div class='bl_document_contact'>
        <a href='' class='el_contactLink'>お問い合わせ</a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
