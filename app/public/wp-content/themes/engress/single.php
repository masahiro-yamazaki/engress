<?php get_header(); ?>
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <div class='ly_content'>
    <div class='ly_inner'>
      <main class='ly_main'>
        <section class='ly_blogDetail'>
          <?php
            $category = get_the_category();
            if ( $category[0] ) : ?>
            <div class='bl_blogDetail_category'>
              <div class='el_category'>
                <?php echo $category[0]->cat_name; ?>
              </div>
            </div>
          <?php endif; ?>
          <h1 class='bl_blogDetail_title'><?php the_title(); ?></h1>
          <div class='bl_blogDetail_snsLink_time'>
            <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
            <time class='bl_blogDetail_time'><?php the_time('Y-m-d'); ?></time>
          </div>
          <div class='bl_blogDetail_content'>
            <?php the_content(); ?>
          </div>
        </section>
        <section class='ly_recommended'>
          <h2 class='bl_recommended_title'>おすすめの記事</h2>
          <div class='bl_recommended_items'>
            <?php
              $pickup_posts = get_posts(array(
                'post_type' => 'post', // 投稿タイプ
                'posts_per_page' => '3', // 3件取得
                'tag' => 'pickup', // pickupタグがついたものを
                'orderby' => 'DESC', // 新しい順に
              ));
            ?>
            <?php foreach ( $pickup_posts as $post ) : setup_postdata( $post ); ?>
              <a href="<?php echo esc_url( get_permalink() ); ?>" class='bl_recommended_item'>
                <div class='el_blogCategory'>
                <?php
                  $category = get_the_category();
                  if ($category[0] ) {
                    echo $category[0] -> cat_name;
                  }
                ?>
                </div>
                <figure class='bl_recommended_item_img'>
                  <?php
                    if (has_post_thumbnail() ) {
                      the_post_thumbnail('thumbnail');
                    } else {
                      echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                    }
                  ?>
                </figure>
                <div class='bl_recommended_item_info'>
                  <time class='bl_recommended_item_time'><?php the_date('Y-m-d'); ?></time>
                  <h3 class='bl_recommended_item_title'><?php echo wp_trim_words(get_the_title(), 30, '...'); ?></h3>
                </div>
              </a>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
        </section>
      </main>
      <!-- TODO: sidebar.phpを作成 -->
      <div class='ly_sidebar'>
        <aside class='ly_sidebar_blog'>
          <div class='bl_sidebar_title'>
            <h2 class='bl_sidebar_title_text'>関連記事</h2>
          </div>
          <div class='bl_sidebar_blogItems'>
            <?php if( has_category() ) {
              $post_cats = get_the_category();
              $cat_ids = array();
              //所属カテゴリーのIDリストを作っておく
              foreach($post_cats as $cat) {
                $cat_ids[] = $cat->term_id;
              }
            }
            $myposts = get_posts( array(
              'post_type' => 'post', // 投稿タイプ
              'posts_per_page' => '3', // ８件を取得
              'post__not_in' => array( $post->ID ), // 表示中の投稿を除外
              'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
              'orderby' => 'rand' // ランダムに
            ) );
            if( $myposts ): ?>
              <?php foreach($myposts as $post): setup_postdata($post);?>
              <a href="<?php the_permalink(); ?>" class='bl_sidebar_blogItem'>
                <figure class='bl_sidebar_blogItem_img'>
                  <?php
                    if (has_post_thumbnail() ) {
                      the_post_thumbnail('thumbnail');
                    } else {
                      echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                    }
                  ?>
                </figure>
                <div class='bl_sidebar_blogItem_info'>
                  <h3 class='bl_sidebar_blogItem_title'><?php echo wp_trim_words(get_the_title(), 30, '...'); ?></h3>
                </div>
              </a>
              <?php endforeach; wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </aside>
        <aside class='ly_sidebar_category'>
          <div class='bl_sidebar_title'>
            <h2 class='bl_sidebar_title_text'>カテゴリー</h2>
          </div>
          <ul class='bl_sidebar_category_listItems'>
          <?php
            $categories = get_categories();
            foreach ($categories as $category) {
              $category_link = get_category_link($category->term_id);
              $category_name = $category->name;
          ?>
            <li class='bl_sidebar_category_listItem'>
              <a href='<?php echo $category_link ?>' class='bl_sidebar_category_link'><?php echo $category_name ?></a>
            </li>
          <?php
            }
          ?>
          </ul>
        </aside>
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/contact'); ?>
<?php get_footer(); ?>
