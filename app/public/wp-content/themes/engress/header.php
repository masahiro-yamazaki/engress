<!DOCTYPE html>
<html lang='ja' prefix='og: http://ogp.me/ns#'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <script src='https://cdn.jsdelivr.net/npm/viewport-extra@1.0.3/dist/viewport-extra.min.js'></script>
  <script>new ViewportExtra(320)</script>

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
        <a class='el_companyLogo' href="<?php echo home_url(); ?>">
          <img src='<?php echo get_template_directory_uri() ?>/img/header-logo.png' alt='Engress'>
        </a>
        <nav class='lg_only'>
          <ul class='bl_headerNav'>
            <li class='bl_headerNav_item'>
              <a class='bl_headerNav_link' href="<?php echo home_url(); ?>">ホーム</a>
            </li>
            <li class='bl_headerNav_item'>
              <a class='bl_headerNav_link' href="<?php echo home_url('/news/'); ?>">お知らせ</a>
            </li>
            <li class='bl_headerNav_item'>
              <a class='bl_headerNav_link' href="<?php echo home_url('/blogs/'); ?>">ブログ</a>
            </li>
            <li class='bl_headerNav_item'>
              <a class='bl_headerNav_link' href="<?php echo home_url('/price/'); ?>">コース・料金</a>
            </li>
          </ul>
        </nav>
      </div><!-- /.ly_header_left -->
      <div class='ly_header_right'>
        <div class='bl_headerInfo lg_only'>
          <div class='bl_businessHours'>平日08:00〜20:00</div>
          <a href='#' class='bl_tel'>
            <img src='<?php echo get_template_directory_uri() ?>/img/header-tel-icon.svg' alt='tel'>
            <span>0123-456-7890</span>
          </a>
        </div>
        <div class='bl_headerCtaBtn_wrapper lg_only'>
          <a class='el_button el_button__orange' href="<?php echo home_url('/contact/'); ?>">資料請求</a>
        </div>
        <div class='bl_headerCtaBtn_wrapper lg_only'>
          <a class='el_button el_button__navy' href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
        </div>
        <button class='bl_drawerBtn md_only js_drawerBtn'
                aria-controls='js_glabalMenu' aria-expanded='false' area-label='メニューを開閉する'>
          <i class='fa fa-2x fa-bars js_drawerIcon is_drawerActive'></i>
          <i class='fa fa-2x fa-times js_drawerIcon'></i>
        </button>
        <div class='bl_drawerBg md_only js_drawerBg' aria-hidden='true'></div>
        <div class='bl_drawer md_only js_drawer' aria-hidden='true'>
          <div class='bl_drawerLogo'>
            <a class='el_companyLogo' href='#'>
              <img src='<?php echo get_template_directory_uri() ?>/img/header-logo.png' alt='Engress'>
            </a>
          </div>
          <nav>
            <ul class='bl_drawerNav'>
              <li class='bl_drawerNav_item'>
                <a class='bl_drawerNav_link' href="<?php echo home_url(); ?>">ホーム</a>
              </li>
              <li class='bl_drawerNav_item'>
                <a class='bl_drawerNav_link' href="<?php echo home_url('/news/'); ?>">お知らせ</a>
              </li>
              <li class='bl_drawerNav_item'>
                <a class='bl_drawerNav_link' href="<?php echo home_url('/blogs/'); ?>">ブログ</a>
              </li>
              <li class='bl_drawerNav_item'>
                <a class='bl_drawerNav_link' href="<?php echo home_url('/price/'); ?>">コース・料金</a>
              </li>
            </ul>
          </nav>
          <div class='bl_drawerCtaBtnGroup'>
            <div class='bl_drawerCtaBtn_wrapper'>
              <a class='el_button el_button__orange' href="<?php echo home_url('/contact/'); ?>">資料請求</a>
            </div>
            <div class='bl_drawerCtaBtn_wrapper'>
              <a class='el_button el_button__navy' href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
            </div>
          </div>
        </div>
      </div><!-- /.ly_header_right -->
    </div><!-- /.ly_header_inner -->
  </header><!-- /.ly_header -->
  <div class='ly_paddingTop'></div><!-- /.ly-paddingTop -->
