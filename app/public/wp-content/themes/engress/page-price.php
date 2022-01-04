<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <section class='ly_priceFv'>
    <div class='ly_inner'>
      <h1 class='el_fvTitle'>コース・料金</h1>
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
  <section class='ly_system'>
    <div class='ly_inner'>
      <h2 class='bl_price_title'>料金体系</h2>
      <div class='bl_system_items'>
        <div class='bl_system_item'>入会金 39,800円</div>
        <div class='bl_system_item'>月額費用</div>
      </div>
    </div>
  </section>
  <section class='ly_plan'>
    <div class='ly_inner'>
      <h2>料金表</h2>
    </div>
  </section>
  <div class='price-test'></div>
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
