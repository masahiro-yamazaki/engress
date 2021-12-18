<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <!-- TODO: 画像を修正 -->
  <section class='ly_fv'>
    <div class='ly_inner'>
      <h1 class='bl_fv_title'>ブログ</h1>
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
  <section class='ly_newBlog'>
    <div class='ly_inner'>
      <h2 class='bl_newBlog_title'>新着一覧</h2>
      <div class='bl_newBlog_items'>
        <!-- https://since-inc.jp/blog/3460 -->
        <?php
          // 一覧ページでは get_query_var('paged') でページ番号を取得
          $paged = (int) get_query_var('paged');
          $args = array(
            // TODO: 1ページ10投稿に設定
            'posts_per_page' => 2,
            'paged' => $paged,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish'
          );
          $the_query = new WP_Query($args);
          if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
          <a href="<?php the_permalink(); ?>" class='bl_newBlog_item'>
            <figure class='bl_newBlog_item_img'>
              <?php
                if (has_post_thumbnail() ) {
                  the_post_thumbnail('thumbnail');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                }
              ?>
            </figure>
            <div class='bl_newBlog_item_info'>
              <time class='bl_newBlog_item_info_time'><?php the_date('Y-m-d'); ?></time>
              <?php
                $blog_title = get_the_title();
                $blog_trim_title = wp_trim_words($blog_title, 30, '...')
              ?>
              <h3 class='bl_newBlog_item_info_title'><?php echo $blog_trim_title; ?></h3>
              <?php
                $content = get_the_content();
                // FIXME: h3タグが含まれる
                $content = wp_strip_all_tags($content);
                $content = strip_shortcodes($content);
                $content = wp_trim_words($content, 50, '...')
              ?>
              <p class='bl_newBlog_item_info_text'><?php echo $content; ?></p>
            </div>
          </a>
        <?php endwhile; endif; ?>
      </div>
      <!-- ページネーション -->
      <!-- ページネーション -->
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
