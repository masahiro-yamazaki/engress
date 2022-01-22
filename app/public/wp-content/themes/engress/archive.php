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
            'posts_per_page' => $posts_per_page,
            'post__in' => $sticky
          );
          $sticky_query = new WP_Query($sticky_query_args);

          // 固定ページ総数を $sticky_number に代入
          if ($sticky[0] == true) {
            $sticky_number = $sticky_query->found_posts;
          } else {
            $sticky_number = 0;
          }

          // 固定ページを表示するページを求める
          $sticky_page = ceil($sticky_number / $posts_per_page);
        ?>

        <?php
          if ($pager_query->have_posts() == true) : ?>
            <?php while ($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
              <?php get_template_part('template-parts/blog-list-item'); ?>
            <?php endwhile; ?>
            <?php
            $normal_query_args = array(
            'post_type' => 'post',
            'posts_per_page' => $posts_per_page,
            'post__not_in' => $sticky,
            'offset' => (get_query_var('paged') - 1) * $posts_per_page + $sticky_number
          );
          $normal_query = new WP_Query($normal_query_args);
        ?>
          <?php while ($normal_query->have_posts()) : $normal_query->the_post(); ?>
            <?php get_template_part('template-parts/blog-list-item'); ?>
          <?php endwhile; ?>
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
