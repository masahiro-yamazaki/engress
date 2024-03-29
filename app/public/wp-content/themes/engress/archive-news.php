<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <section class='ly_newsListFv'>
    <div class='ly_inner'>
      <h1 class='el_fvTitle'>お知らせ</h1>
    </div>
  </section>
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <section class='ly_newsList'>
    <div class='ly_inner'>
      <h2 class='bl_newsList_title'>お知らせ一覧</h2>
      <div class='bl_newsList_items'>
        <?php
          if ( have_posts() ) :
          while ( have_posts() ) : the_post();
        ?>
          <a href="<?php the_permalink(); ?>" class='bl_newsList_item'>
            <time class='bl_newsList_item_time'><?php the_time('Y-m-d'); ?></time>
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
  <?php get_template_part('template-parts/contact'); ?>
</main>
<?php get_footer(); ?>
