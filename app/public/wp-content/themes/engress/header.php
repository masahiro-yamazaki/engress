<!DOCTYPE html>
<html lang='ja' prefix='og: http://ogp.me/ns#'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta name='format-detection' content='telephone=no'>

  <title>Engress</title>
  <meta name='description' content='日本人へのTOEFL指導歴豊かな講師陣の コーチング型TOEFLスクール'>

  <meta property='og:title' content='Engress'>
  <meta property='og:type' content='website'>
  <meta property='og:url' content='https://example.com/'>
  <meta property='og:image' content='https://example.com/img/ogp.png'>
  <meta property='og:site_name' content='Engress'>
  <meta property='og:description' content=''>
  <meta name='twitter:card' content='summary_large_image'>

  <?php wp_head(); ?>
  <link rel='icon' href='./img/icon-home.png'>
</head>

<body>
  <!-- ヘッダー -->
  <header class='ly_header'>
    <div class='ly_header_inner'>
      <div class='ly_header_left'>
        <a class='el_companyLogo' href='#'>
          <img src='<?php echo get_template_directory_uri() ?>/img/header-logo.png' alt='Engress'>
        </a>
        <nav class='bl_headerNav'>
          <ul class='bl_headerNav_items'>
            <li class='bl_headerNav_item'>
              <a class='bl_headerNav_link' href=''>ホーム</a>
            </li>
            <li class='bl_headerNav_item'>
              <a class='bl_headerNav_link' href=''>お知らせ</a>
            </li>
            <li class='bl_headerNav_item'>
              <a class='bl_headerNav_link' href=''>ブログ</a>
            </li>
            <li class='bl_headerNav_item'>
              <a class='bl_headerNav_link' href=''>コース・料金</a>
            </li>
          </ul>
        </nav>
      </div><!-- /.ly_header_left -->
      <div class='ly_header_right'>
        <div class='bl_headerInfo'>
          <div class='bl_businessHours'>平日08:00〜20:00</div>
          <a class='bl_tel'>
            <img src='<?php echo get_template_directory_uri() ?>/img/header-tel-icon.svg' alt='tel'>
            <span>0123-456-7890</span>
          </a>
        </div>
        <div class='bl_headerCtaBtn_wrapper'>
          <a class='el_ctaBtn el_ctaBtn__orange'>資料請求</a>
        </div>
        <div class='bl_headerCtaBtn_wrapper'>
          <a class='el_ctaBtn el_ctaBtn__navy'>お問い合わせ</a>
        </div>
        <button class='bl_drawerBtn js_drawerBtn'
                aria-controls='js_glabalMenu' aria-expanded='false' area-label='メニューを開閉する'>
          <i class='fa fa-2x fa-bars js_drawerIcon is_drawerActive'></i>
          <i class='fa fa-2x fa-times js_drawerIcon'></i>
        </button>
        <div class='bl_drawerBg js_drawerBg' aria-hidden='true'></div>
        <div class='bl_drawer js_drawer' aria-hidden='true'>
          <div class='bl_drawerLogo'>
            <a class='el_companyLogo' href='#'>
              <img src='<?php echo get_template_directory_uri() ?>/img/header-logo.png' alt='Engress'>
            </a>
          </div>
          <nav>
            <ul class='bl_drawerNav'>
              <li class='bl_drawerNav_item'>
                <a class='bl_drawerNav_link' href=''>ホーム</a>
              </li>
              <li class='bl_drawerNav_item'>
                <a class='bl_drawerNav_link' href=''>お知らせ</a>
              </li>
              <li class='bl_drawerNav_item'>
                <a class='bl_drawerNav_link' href=''>ブログ</a>
              </li>
              <li class='bl_drawerNav_item'>
                <a class='bl_drawerNav_link' href=''>コース・料金</a>
              </li>
            </ul>
          </nav>
          <div class='bl_drawerCtaBtnGroup'>
            <div class='bl_drawerCtaBtn_wrapper'>
              <a class='el_ctaBtn el_ctaBtn__orange'>資料請求</a>
            </div>
            <div class='bl_drawerCtaBtn_wrapper'>
              <a class='el_ctaBtn el_ctaBtn__navy'>お問い合わせ</a>
            </div>
          </div>
        </div>
      </div><!-- /.ly_header_right -->
    </div><!-- /.ly_header_inner -->
  </header><!-- /.ly_header -->
  <div class='ly-paddingTop'></div><!-- /.ly-paddingTop -->
