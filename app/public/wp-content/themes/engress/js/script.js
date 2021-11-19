// ハンバーガーメニュー
jQuery('.js_hamburgerMenuBtn').click(function () {
  jQuery('body').toggleClass('hp_noScroll');
  jQuery('.bl_hamburgerMenu').toggleClass('is_active');
  jQuery('.js_hamburgerMenuIcon').toggleClass('is_active');

  //attr()でaria-expandedがfalseの場合、thisはクリックした要素そのもの
  if (jQuery(this).attr('aria-expanded') == 'false') {
    jQuery(this).attr('aria-expanded', true);
    jQuery('.bl_hamburgerMenu').attr('aria-hidden', 'false');
    //jQuery('.hmenu-link').attr('tabindex', '0');
  } else {
    jQuery(this).attr('aria-expanded', false);
    jQuery('.bl_hamburgerMenu').attr('aria-hidden', 'true');
    //jQuery('.hmenu-link').attr('tabindex', '-1');
  }
});
