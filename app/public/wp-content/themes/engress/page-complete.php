<?php get_header(); ?>
<main>
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
  <!-- 送信完了 -->
  <div class='ly_complete'>
    <div class='ly_inner'>
      <p class='bl_complete_text'>お問い合わせいただきありがとうございます<br>内容を確認した後、担当者よりご連絡いたします</p>
      <div class='bl_complete_backWrapper'>
        <a class='bl_complete_back' href="<?php echo home_url(); ?>">ホームへ戻る</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
