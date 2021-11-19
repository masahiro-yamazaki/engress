// ドロワーメニュー
jQuery('.js_drawerMenuBtn').click(function () {
  jQuery('body').toggleClass('hp_noScroll');
  jQuery('.js_drawerBg').toggleClass('is_active');
  jQuery('.js_drawerMenu').toggleClass('is_active');
  jQuery('.js_drawerMenuIcon').toggleClass('is_active');

  //attr()でaria-expandedがfalseの場合、thisはクリックした要素そのもの
  if (jQuery(this).attr('aria-expanded') == 'false') {
    jQuery(this).attr('aria-expanded', true);
    jQuery('.js_drawerMenu').attr('aria-hidden', 'false');
    //jQuery('.hmenu-link').attr('tabindex', '0');
  } else {
    jQuery(this).attr('aria-expanded', false);
    jQuery('.js_drawerMenu').attr('aria-hidden', 'true');
    //jQuery('.hmenu-link').attr('tabindex', '-1');
  }
});

jQuery('.js_drawerBg').click(function () {
  jQuery('.js_drawerBg').toggleClass('is_active');
  jQuery('.js_drawerMenu').toggleClass('is_active');
  jQuery('.js_drawerMenuIcon').toggleClass('is_active');

  jQuery('.js_drawerMenuBtn').attr('aria-expanded', false);
  jQuery('.js_drawerMenu').attr('aria-hidden', true);
});
