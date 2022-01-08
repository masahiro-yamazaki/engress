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
      <div class='bl_contact_items'>
        <div class='bl_contact_item'>
          <p class='el_contact_item_name'>会社名</p>
          <input class='el_contact_item_text' placeholder='Engress' />
        </div>
        <div class='bl_contact_item'>
          <p class='el_contact_item_name'>氏名</p>
          <input class='el_contact_item_text' placeholder='田中　太郎' />
        </div>
        <div class='bl_contact_item'>
          <p class='el_contact_item_name'>メールアドレス</p>
          <input class='el_contact_item_text' placeholder='example@example.com' />
        </div>
        <div class='bl_contact_item'>
          <p class='el_contact_item_name'>電話番号</p>
          <input class='el_contact_item_text' placeholder='01-2345-6789' />
        </div>
      </div>
      <p class='bl_contact_purpose'>お問い合わせの種類を選択してください<span class='hp_bold'>（資料請求の方は資料請求を選択ください）</span></p>
      <div class='bl_contact_item'>
          <p class='el_contact_item_name'>お問い合わせ内容</p>
          <textarea class='el_contact_item_text el_contact_item_text__content' placeholder='入力して下さい'></textarea>
        </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
