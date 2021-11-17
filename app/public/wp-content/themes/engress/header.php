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
    <div class='ly_header_inner hp_col'>
      <a class='bl_headerLogo' href='#'>
        <img src='<?php echo get_template_directory_uri() ?>/img/header-logo.png' alt='Engress'>
      </a>
      <div class='bl_headerMenu_wrapper'>
        <a class='el_headerMenu' href=''>ホーム</a>
        <a class='el_headerMenu' href=''>お知らせ</a>
        <a class='el_headerMenu' href=''>ブログ</a>
        <a class='el_headerMenu' href=''>コース・料金</a>
      </div>
      <!-- 
      <a class='header-contact' href='#contact'>
        <span>お問い合わせ</span>
      </a>
      -->
    </div><!-- /.ly_header_inner -->
  </header><!-- /.ly_header -->
