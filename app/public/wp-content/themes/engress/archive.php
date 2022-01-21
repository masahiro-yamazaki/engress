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
        $sticky = get_option('sticky_posts');
        $args = array(
          'post_type' => 'post',
          //'post__in' => $sticky, // コメントアウトを外すと先頭固定のみ表示
        );
        $the_query = new WP_Query( $args );
      ?>
        <?php
          if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
          <?php get_template_part('template-parts/blog-list-item'); ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <?php get_template_part('template-parts/pagination'); ?>
    </div>
  </section>
  <?php get_template_part('template-parts/contact'); ?>
</main>
<?php get_footer(); ?>
