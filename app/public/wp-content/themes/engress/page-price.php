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
        <div class='bl_system_plus'>+</div>
        <div class='bl_system_item'>月額費用</div>
      </div>
      <p class='bl_system_description'>Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
    </div>
  </section>
  <section class='ly_plan'>
    <div class='ly_inner'>
      <h2 class='bl_price_title'>料金表</h2>
      <div class='bl_plans_wrapper'>
        <div class='bl_plans'>
          <div class='bl_plan'>
            <h3 class='bl_plan_title'>基礎プラン</h3>
            <div class='bl_plan_body'>
              <p class='bl_plan_price'>59,000円〜</p>
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
              <p class='bl_plan_price'>75,000円〜</p>
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
              <p class='bl_plan_price bl_plan_price__recommended'>95,000円〜</p>
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
              <p class='bl_plan_price'>60,000円〜</p>
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
