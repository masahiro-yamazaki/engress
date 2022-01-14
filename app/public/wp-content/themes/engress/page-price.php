<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <section class='ly_priceFv'>
    <div class='ly_inner'>
      <h1 class='el_fvTitle'>コース・料金</h1>
    </div>
  </section>
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <section class='ly_system'>
    <div class='ly_inner'>
      <h2 class='bl_price_title'>料金体系</h2>
      <div class='bl_system_items'>
        <div class='bl_system_item'>入会金 <?php echo number_format(get_field('admission_fee')); ?>円</div>
        <div class='bl_system_plus'>+</div>
        <div class='bl_system_item'>月額費用</div>
      </div>
      <p class='bl_system_description'>Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
    </div>
  </section>
  <section class='ly_plan'>
    <div class='ly_inner'>
      <h2 class='bl_price_title'>料金表</h2>
      <div class='bl_plans_wrapper js-scrollable'>
        <div class='bl_plans'>
          <div class='bl_plan'>
            <h3 class='bl_plan_title'>基礎プラン</h3>
            <div class='bl_plan_body'>
              <p class='bl_plan_price'><?php echo number_format(get_field('basic')); ?>円〜</p>
              <p class='bl_plan_remark'>*月額（税抜価格）</p>
              <ul class='bl_plan_contents'>
                <li class='bl_plan_content bl_plan_content__checked'>カリキュラム作成</li>
                <li class='bl_plan_content bl_plan_content__checked'>TOEFL学習サポート</li>
                <li class='bl_plan_content bl_plan_content__checked'>週一回のビデオMTG</li>
              </ul>
            </div>
          </div>
          <div class='bl_plan'>
            <h3 class='bl_plan_title'>演習プラン</h3>
            <div class='bl_plan_body'>
              <p class='bl_plan_price'><?php echo number_format(get_field('exercise')); ?>円〜</p>
              <p class='bl_plan_remark'>*月額（税抜価格）</p>
              <ul class='bl_plan_contents'>
                <li class='bl_plan_content bl_plan_content__checked'>カリキュラム作成</li>
                <li class='bl_plan_content bl_plan_content__checked'>TOEFL学習サポート</li>
                <li class='bl_plan_content bl_plan_content__checked'>週一回のビデオMTG</li>
                <li class='bl_plan_content bl_plan_content__checked'>月二回の模試（解説付き）</li>
              </ul>
            </div>
          </div>
          <div class='bl_plan'>
            <h3 class='bl_plan_title bl_plan_title__recommended'>おすすめ<br>志望校対策プラン</h3>
            <div class='bl_plan_body'>
              <p class='bl_plan_price bl_plan_price__recommended'><?php echo number_format(get_field('preferred_school')); ?>円〜</p>
              <p class='bl_plan_remark'>*月額（税抜価格）</p>
              <ul class='bl_plan_contents'>
                <li class='bl_plan_content bl_plan_content__checked'>カリキュラム作成</li>
                <li class='bl_plan_content bl_plan_content__checked'>TOEFL学習サポート</li>
                <li class='bl_plan_content bl_plan_content__checked'>週一回のビデオMTG</li>
                <li class='bl_plan_content bl_plan_content__checked'>月二回の模試（解説付き）</li>
                <li class='bl_plan_content bl_plan_content__checked'>週一の英語面接対策</li>
              </ul>
            </div>
          </div>
          <div class='bl_plan'>
            <h3 class='bl_plan_title'>フレックスプラン</h3>
            <div class='bl_plan_body'>
              <p class='bl_plan_price'><?php echo number_format(get_field('flex')); ?>円〜</p>
              <p class='bl_plan_remark'>*月額（税抜価格）</p>
              <ul class='bl_plan_contents'>
                <li class='bl_plan_content'>＊別途ご相談ください</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class='price-test'></div>
  <?php get_template_part('template-parts/contact'); ?>
</main>
<?php get_footer(); ?>
