<?php
/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');

/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blogs'; //任意のスラッグ名
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/**
* CSSとJavaScriptの読み込み
*/
function my_script_init()
{
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css', array(), '1.0.0', 'all');
  wp_enqueue_style('single', get_template_directory_uri() . '/css/single.css', array(), '1.0.0', 'all');
  wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', array(), '1.0.0', 'all');
  wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
  // トップページ
  if (is_front_page()) {
    wp_enqueue_style('front-page', get_template_directory_uri() . '/css/front-page.css', array(), '1.0.0', 'all');
  }
  // コース・料金ページ
  if (is_page('price')) {
    wp_enqueue_style('price', get_template_directory_uri() . '/css/price.css', array(), '1.0.0', 'all');
  }
  // ブログ一覧ページ
  if (is_page('blogs')) {
    wp_enqueue_style('blogs', get_template_directory_uri() . '/css/blogs.css', array(), '1.0.0', 'all');
  }
  // お知らせ一覧ページ
  if (is_post_type_archive('news')) {
    wp_enqueue_style('archive-news', get_template_directory_uri() . '/css/archive-news.css', array(), '1.0.0', 'all');
  }
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );

?>
