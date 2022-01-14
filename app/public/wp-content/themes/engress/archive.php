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
          if ( have_posts() ) :
          while ( have_posts() ) : the_post();
        ?>
          <a href="<?php the_permalink(); ?>" class='bl_newBlog_item'>
            <div class='el_blogCategory'>
              <?php
                $category = get_the_category();
                if ($category[0] ) {
                  echo $category[0] -> cat_name;
                }
              ?>
            </div>
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
              <time class='bl_newBlog_item_info_time'><?php the_time('Y-m-d'); ?></time>
              <?php
                $blog_title = get_the_title();
                $blog_trim_title = wp_trim_words($blog_title, 30, '...')
              ?>
              <h3 class='bl_newBlog_item_info_title'><?php echo $blog_trim_title; ?></h3>
              <?php
                $content = get_the_content();
                // h3などのタグが含まれる
                $content = wp_strip_all_tags($content);
                $content = strip_shortcodes($content);
                $content = wp_trim_words($content, 50, '...')
              ?>
              <p class='bl_newBlog_item_info_text'><?php echo $content; ?></p>
            </div>
          </a>
        <?php endwhile; endif; ?>
      </div>
      <?php get_template_part('template-parts/pagination'); ?>
    </div>
  </section>
  <?php get_template_part('template-parts/contact'); ?>
</main>
<?php get_footer(); ?>
