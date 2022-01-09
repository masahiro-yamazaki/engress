<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <section class='ly_contactFv'>
    <div class='ly_inner'>
      <h1 class='el_fvTitle'>ブログ</h1>
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
  <!-- お問い合わせ -->
  <div class='ly_contact'>
    <div class='ly_inner'>
      <p class='bl_contact_description'>弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
      <div class='bl_contact_form'>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
