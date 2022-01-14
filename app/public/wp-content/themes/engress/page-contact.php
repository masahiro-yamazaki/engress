<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <section class='ly_contactFv'>
    <div class='ly_inner'>
      <h1 class='el_fvTitle'>お問い合わせ・資料請求</h1>
    </div>
  </section>
  <?php get_template_part('template-parts/breadcrumb'); ?>
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
