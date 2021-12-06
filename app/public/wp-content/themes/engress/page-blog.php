<?php get_header(); ?>
<main>
  <section style='height: 50px; background-color: gray;'>
    <h1>ブログ：新着一覧</h1>
  </section>

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <?php
          if (has_post_thumbnail() ) {
            the_post_thumbnail('large');
          } else {
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
          }
        ?>
        <time class="entry-item-published" datetime="<?php the_time('c');?>"><?php the_time('Y/n/j'); ?></time>
        <h2 class="entry-item-title"><?php the_title(); ?></h2>
        <div class="entry-item-excerpt"><?php the_excerpt(); ?></div>
      </a>
    <?php endwhile; ?>
  <?php endif; ?>

  <section style='height: 300px; background-color: blue;'>
  </section>
  <section style='height: 300px; background-color: green;'>
  </section>
  <!-- 資料請求 -->
  <section class='bl_document'>
    <h2 class='bl_document_title'>まずは無料で資料請求から</h2>
    <div class='bl_document_ctaButton_wrapper'>
      <a class='bl_document_ctaButton'>資料請求</a>
    </div>
    <div class='bl_document_contactLink_wrapper'>
      <a href='' class='bl_document_contactLink'>お問い合わせ</a>
    </div>
  </section>
</main>
<?php get_footer(); ?>
