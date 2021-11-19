// ドロワーメニュー
jQuery('.js_drawerBtn').click(function () {
  jQuery('body').toggleClass('hp_noScroll');
  jQuery('.js_drawerBg').toggleClass('is_active');
  jQuery('.js_drawer').toggleClass('is_active');
  jQuery('.js_drawerIcon').toggleClass('is_active');

  //attr()でaria-expandedがfalseの場合、thisはクリックした要素そのもの
  if (jQuery(this).attr('aria-expanded') == 'false') {
    jQuery(this).attr('aria-expanded', 'true');
    jQuery('.js_drawer').attr('aria-hidden', 'false');
    jQuery('.js_drawerBg').attr('aria-hidden', 'false');
  } else {
    jQuery(this).attr('aria-expanded', 'false');
    jQuery('.js_drawer').attr('aria-hidden', 'true');
    jQuery('.js_drawerBg').attr('aria-hidden', 'true');
  }
});

jQuery('.js_drawerBg').click(function () {
  jQuery('.js_drawerBg').toggleClass('is_active');
  jQuery('.js_drawer').toggleClass('is_active');
  jQuery('.js_drawerIcon').toggleClass('is_active');

  jQuery('.js_drawerBtn').attr('aria-expanded', 'false');
  jQuery('.js_drawer').attr('aria-hidden', 'true');
  jQuery('.js_drawerBg').attr('aria-hidden', 'true');
});
