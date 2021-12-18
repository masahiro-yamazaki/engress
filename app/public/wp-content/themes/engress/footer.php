  <footer>
    <section class='bl_telItem'>
      <div class='bl_telItem_title'>お電話でのお問い合わせはこちら</div>
      <a href='' class='bl_telItem_number'>0123-456-7890</a>
      <div class='bl_telItem_time'>平日 08:00~20:00</div>
    </section>
    <section class='bl_footerMenu'>
      <div class='bl_footerMenu_inner'>
        <div class='bl_footerNav_items'>
          <nav>
            <ul class='bl_footerNav'>
                <li class='bl_footerNav_item'>
                  <a class='bl_footerNav_link' href="<?php echo home_url(); ?>">ホーム</a>
                </li>
                <li class='bl_footerNav_item'>
                  <a class='bl_footerNav_link' href=''>お知らせ</a>
                </li>
                <li class='bl_footerNav_item'>
                  <a class='bl_footerNav_link' href="<?php echo home_url('/blogs/'); ?>">ブログ</a>
                </li>
                <li class='bl_footerNav_item'>
                  <a class='bl_footerNav_link' href=''>コース・料金</a>
                </li>
              </ul>
          </nav>
        </div>
        <div class='bl_footerMenu_info'>
          <a class='bl_footerMenu_logo' href="<?php echo home_url(); ?>">
            <img src='<?php echo get_template_directory_uri() ?>/img/header-logo.png' alt='Engress'>
          </a>
          <a class='bl_footer_tel'>
            <img src='<?php echo get_template_directory_uri() ?>/img/footer-tel-icon.png' alt='tel'>
            <span>0123-456-7890</span>
          </a>
          <div class='bl_footer_time'>
            平日08:00~20:00
          </div>
        </div>
      </div>
    </section>
    <section class='ly_copyright'>
      <div class='ly_copyright_inner'>
        <p class='bl_copyright_text'>© 2020 Engress.</p>
      </div>
    </section>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
