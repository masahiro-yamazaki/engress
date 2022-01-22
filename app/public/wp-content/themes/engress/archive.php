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
          $posts_per_page = 10;

          // (Q1) ページャー用クエリ
          $pager_query_args = array(
            'post_type' => 'post',
            'posts_per_page' => $posts_per_page,
            'paged' => get_query_var('paged')
          );
          $pager_query = new WP_Query($pager_query_args);

          // (Q2) 固定ページ抽出クエリ
          $sticky = get_option('sticky_posts');
          $sticky_query_args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,  // 固定ページはすべて表示
            'post__in' => $sticky
          );
          $sticky_query = new WP_Query($sticky_query_args);
          // 固定ページ総数を $sticky_number に代入
          if ($sticky[0] == true) {
            $sticky_number = $sticky_query->found_posts;
          } else {
            $sticky_number = 0;
          }

          // 1ページ目に表示する、通常ページの本数を求める。
          // (※変数 $normal_number は、2ページ目以降の offset にも利用する。)
          $normal_number = 0;
          if ($posts_per_page - $sticky_number > 0) {
            $normal_number = $posts_per_page - $sticky_number;
          }
        ?>

        <?php
          if ($pager_query->have_posts() == true) : ?>
          <?php
            // 【A. 1ページ目の場合】
            if (get_query_var('paged') == 0 || get_query_var('paged') == 1) :
            $normal_query_paged1_args = array(
              'post_type' => 'post',
              'posts_per_page' => $normal_number,
              'post__not_in' => $sticky,
              'paged' => 1
            );
            $normal_query_paged1 = new WP_Query($normal_query_paged1_args);
          ?>
          <?php if ($sticky[0] == true) : ?>
            <?php while ($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
              <?php get_template_part('template-parts/blog-list-item'); ?>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php while ($normal_query_paged1->have_posts()) : $normal_query_paged1->the_post(); ?>
            <?php get_template_part('template-parts/blog-list-item'); ?>
          <?php endwhile; ?>
        <?php
          //【i-B. 2ページ目以降の場合】
          else :
          $normal_query_paged2after_args = array(
            'post_type' => 'post',
            'posts_per_page' => $posts_per_page,
            'post__not_in' => $sticky,
            'offset' => (get_query_var('paged') - 2) * $posts_per_page + $normal_number
          );
          $normal_query_paged2after = new WP_Query($normal_query_paged2after_args);
        ?>
          <?php while ($normal_query_paged2after->have_posts()) : $normal_query_paged2after->the_post(); ?>
            <?php get_template_part('template-parts/blog-list-item'); ?>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php endif; ?>
      </div>
      <!-- ページネーション -->
      <?php if (paginate_links()) : ?>
        <div class='bl_pagination'>
          <?php
            $args = array(
              'end_size' => 1,
              'mid_size' => 1, // default: 2
              'prev_next' => false,
              'total' => $pager_query->max_num_pages
            );
            echo paginate_links($args);
          ?>
        </div>
      <?php endif; ?>
  </section>
  <?php get_template_part('template-parts/contact'); ?>
</main>
<?php get_footer(); ?>
