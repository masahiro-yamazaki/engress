<?php get_header(); ?>
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

  <div class='ly_content'>
    <div class='ly_inner'>
      <main class='ly_main'>
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
      </main>
      <div class='ly_sidebar lg_only'>
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
              <a href='' class='bl_sidebar_blogItem'>
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
                  <h3 class='bl_sidebar_blogItem_title'><?php the_title(); ?></h3>
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
<?php get_footer(); ?>
