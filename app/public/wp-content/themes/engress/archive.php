<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <section class='ly_newBlogFv'>
    <div class='ly_inner'>
      <h1 class='el_fvTitle'>ブログ</h1>
    </div>
  </section>
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <section class='ly_newBlog'>
    <div class='ly_inner'>
      <h2 class='bl_newBlog_title'>新着一覧</h2>
      <div class='bl_newBlog_items'>
        <?php
          // 以下の方法ではどのページでも先頭固定表示されてしまう
          // https://twotone.me/web/2178/
          $list_cnt = 10;
          $sticky = get_option('sticky_posts');
          if ($list_cnt <= count($sticky)) {
            // 「先頭固定」が「$list_cnt」に設定した数値と同じ又は超えた時の記述
            $args = array(
              'posts_per_page' => '10',
              'post_type' => 'post',
              // 「この投稿を先頭に固定表示」の無効化
              'ignore_sticky_posts' => true,
            );
          } else {
            // 「先頭固定」が「$list_cnt」を超えてない時
            // 「$list_cnt」から「先頭固定」の数を引いた数最新記事出力
            if ( !empty($sticky) ) $list_cnt -= count($sticky);
            $args = array(
              'posts_per_page' => $list_cnt,
              'post_type' => 'post',
            );
          }
          $the_query = new WP_Query($args);
          if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
        <?php get_template_part('template-parts/blog-list-item'); ?>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
      </div>
      <?php get_template_part('template-parts/pagination'); ?>
    </div>
  </section>
  <?php get_template_part('template-parts/contact'); ?>
</main>
<?php get_footer(); ?>
