<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <!-- TODO: 画像を修正 -->
  <section class='ly_fv'>
    <div class='ly_inner'>
      <h1 class='bl_fv_title'>ブログ</h2>
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
      <h1 class='bl_newBlog_title'>新着一覧</h2>
      <div class='bl_newBlog_items'>
        <a href='' class='bl_newBlog_item'>
          <figure class='bl_newBlog_item_img'>
            <img src="http://localhost:10008/wp-content/themes/engress/img/noimg.png"></img>
          </figure>
          <div class='bl_newBlog_item_info'>
            <time class='bl_newBlog_item_info_time'>2021-12-12</time>
            <h3 class='bl_newBlog_item_info_title'>タイトル</h3>
            <p class='bl_newBlog_item_info_text'>テキストテキストテキスト</p>
          </div>
        </a>
      </div>
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
