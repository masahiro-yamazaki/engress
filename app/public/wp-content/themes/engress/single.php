<?php get_header(); ?>
<main>
  <section style='height: 80px; background-color: green;'>
    <h1>single.php</h1>
  </section>
  <section style='height: 80px; background-color: red;'>
    <span>TODO: パンくずリスト</span>
  </section>

  <!-- ブログ記事 -->
  <section>
    <div class="entry-header">
      <?php
        $category = get_the_category();
        if ( $category[0] ) : ?>
        <div class="entry-label">
          <a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>"><?php echo $category[0]->cat_name; ?></a>
        </div>
      <?php endif; ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>

      <div class="entry-meta">
        <time class="entry-published" datetime="<?php the_time( 'c' ); ?>">公開日 <?php the_time( 'Y/n/j' ); ?></time>
        <?php if ( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?>
          <time class="entry-updated" datetime="<?php the_modified_time( 'c' ); ?>">最終更新日 <?php the_modified_time( 'Y/n/j' ); ?></time>
        <?php endif; ?>
      </div>

      <div class="entry-img">
        <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'large' );
          }
        ?>
      </div>
    </div>

    <?php the_content(); ?>
  </section>

  <section style='height: 80px; background-color: green;'>
    <span>TODO: おすすめ記事</span>
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
