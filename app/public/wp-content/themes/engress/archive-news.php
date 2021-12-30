<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <section class='ly_newsListFv'>
    <div class='ly_inner'>
      <h1 class='el_fvTitle'>お知らせ</h1>
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
  <section class='ly_newsList'>
    <div class='ly_inner'>
      <h2 class='bl_newsList_title'>お知らせ一覧</h2>
      <div class='bl_newsList_items'>
        <?php
          if ( have_posts() ) :
          while ( have_posts() ) : the_post();
        ?>
          <a href="<?php the_permalink(); ?>" class='bl_newsList_item'>
            <time class='bl_newsList_item_time'><?php the_date('Y-m-d'); ?></time>
            <?php
              $blog_title = get_the_title();
              $blog_trim_title = wp_trim_words($blog_title, 30, '...')
            ?>
            <h3 class='bl_newsList_item_title'><?php echo $blog_trim_title; ?></h3>
          </a>
        <?php endwhile; endif; ?>
      </div>
      <?php get_template_part('template-parts/pagination'); ?>
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
</main>
<?php get_footer(); ?>
