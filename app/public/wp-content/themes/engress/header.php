<!DOCTYPE html>
<html lang='ja' prefix='og: http://ogp.me/ns#'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta name='format-detection' content='telephone=no'>

  <title>Engress</title>
  <meta name='description' content=''>

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
        <a class='bl_headerLogo' href='#'>
          <img src='<?php echo get_template_directory_uri() ?>/img/header-logo.png' alt='Engress'>
        </a>
        <!-- TODO: nav要素を使う -->
        <ul class='bl_headerMenu_wrapper'>
          <li class='bl_headerMenu' href=''>ホーム</a>
          <li class='bl_headerMenu' href=''>お知らせ</a>
          <li class='bl_headerMenu' href=''>ブログ</a>
          <li class='bl_headerMenu' href=''>コース・料金</a>
        </ul>
      </div>
      <div class='ly_header_right'>
        <div class='bl_headerInfo'>
          <div class='bl_businessHours'>平日08:00〜20:00</div>
          <!-- <img src='<?php echo get_template_directory_uri() ?>/img/header-tel-icon.svg' alt='tel'> -->
          <div class='bl_tel'>0123-456-7890</div>
        </div>
        <div class='bl_menuBtn_wrapper'>
          <a class='el_menuBtn el_menuBtn__orange'>資料請求</a>
        </div>
        <div class='bl_menuBtn_wrapper'>
          <a class='el_menuBtn el_menuBtn__navy'>お問い合わせ</a>
        </div>
      </div>
    </div><!-- /.ly_header_inner -->
  </header><!-- /.ly_header -->
