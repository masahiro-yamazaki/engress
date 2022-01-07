<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <section class='ly_fv'>
    <div class='ly_inner'>
      <h1 class='bl_fv_title'>TOEFL対策はEngress</h2>
      <p class='bl_fv_subTitle'>日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
      <div class='bl_fv_document'>
        <a class='el_button el_button__orange'>資料請求</a>
      </div>
      <div class='bl_fv_contact'>
        <a href='' class='el_contactLink'>お問い合わせ</a>
      </div>
    </div>
  </section>
  <!-- こんなお悩みありませんか？ -->
  <section class='ly_about'>
    <div class='ly_inner'>
      <div class='bl_about_title'>
        <h2 class='el_title el_title__white'>TOEFL学習で<br class='md_only'>こんな悩みありませんか？</h2>
      </div>
      <div class='bl_about_problems'>
        <p class='bl_about_problem'>勉強の習慣が<br class='lg_only'>身についていない</p>
        <p class='bl_about_problem'>勉強しているはず<br class='lg_only'>なのに点数が伸びない</p>
        <p class='bl_about_problem'>正しい勉強方法が<br class='lg_only'>分からない</p>
      </div>
      <div class='bl_about_message'>
        <div class='bl_about_message_innerFrame'>
          <p class='bl_about_message_title'>Engressは<br><span class='hp_underline'>TOEFL対策に特化したスクール</span>です</p>
          <p class='bl_about_message_explanation'>完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class='lg_only'>TOEFLの苦手分野を克服します。</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Engress3つの強み -->
  <section class='ly_feature'>
    <div class='ly_inner'>
      <div class='bl_feature_title'>
        <h2 class='el_title el_title__navy'>TOEFL対策に特化した<br class='md_only'>Engress3つの強み</h2>
      </div>
      <div class='bl_feature_items'>
        <div class='bl_feature_media bl_feature_media__reverse'>
          <figure class='bl_feature_media_imgWrapper'>
            <img src='<?php echo get_template_directory_uri() ?>/img/feature01.png'>
          </figure>
          <div class='bl_feature_media_body'>
            <div class='bl_feature_media_body_label'>特長 １</div>
            <h3 class='bl_feature_media_body_title'>TOEFLに最適化された<br>無駄のないカリキュラム</h3>
            <p class='bl_feature_media_body_text'>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
          </div>
        </div>
        <div class='bl_feature_media'>
          <figure class='bl_feature_media_imgWrapper'>
            <img src='<?php echo get_template_directory_uri() ?>/img/feature02.png'>
          </figure>
          <div class='bl_feature_media_body'>
            <div class='bl_feature_media_body_label'>特長 ２</div>
            <h3 class='bl_feature_media_body_title'>日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
            <p class='bl_feature_media_body_text'>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
          </div>
        </div>
        <div class='bl_feature_media bl_feature_media__reverse'>
          <figure class='bl_feature_media_imgWrapper'>
            <img src='<?php echo get_template_directory_uri() ?>/img/feature03.png'>
          </figure>
          <div class='bl_feature_media_body'>
            <div class='bl_feature_media_body_label'>特長 ３</div>
            <h3 class='bl_feature_media_body_title'>平均3ヶ月でTOEFL <br class='md_only'>iBT20点アップ</h3>
            <p class='bl_feature_media_body_text'>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 料金プラン -->
  <section class='ly_price'>
    <div class='ly_inner'>
      <h2 class='bl_price_title'>Engressの料金プランはこちら</h2>
      <div class='bl_price_button'>
        <a href='' class='el_button'>料金を見てみる</a>
      </div>
    </div>
  </section>
  <!-- 成功事例 -->
  <section class='ly_success'>
    <div class='ly_success_inner'>
      <h2 class='bl_success_title'>TOEFL成功事例</h2>
      <div class='bl_success_examples'>
        <!-- タイトルは最大30文字(?) / 身分は最大5文字 / 名前は最大10文字 / 結果は最大18文字 -->
        <!-- TODO: タイトルが全て入力されている場合のみ表示対象にする -->
        <!-- TODO: 画像が未入力の場合、デフォルト画像を表示 -->
        <!-- TODO: 名前が未入力の場合、「匿名希望」を表示 -->
        <!-- TODO: 身分、結果が未入力の場合、白色の背景色の欄を表示しない -->
        <div class='bl_success_example'>
          <h3 class='bl_success_summary'><?php the_field('title1'); ?></h3>
          <figure class='bl_success_picture'><img src="<?php the_field('image1'); ?>"></figure>
          <div class='bl_success_profile'>
            <div class='bl_success_status'><?php the_field('status1'); ?></div>
            <div class='bl_success_name'><?php the_field('name1'); ?></div>
          </div>
          <div class='bl_success_result'><?php the_field('result1'); ?></div>
        </div>
        <div class='bl_success_example'>
          <h3 class='bl_success_summary'><?php the_field('title2'); ?></h3>
          <figure class='bl_success_picture'><img src="<?php the_field('image2'); ?>"></figure>
          <div class='bl_success_profile'>
            <div class='bl_success_status'><?php the_field('status2'); ?></div>
            <div class='bl_success_name'><?php the_field('name2'); ?></div>
          </div>
          <div class='bl_success_result'><?php the_field('result2'); ?></div>
        </div>
        <div class='bl_success_example'>
          <h3 class='bl_success_summary'><?php the_field('title3'); ?></h3>
          <figure class='bl_success_picture'><img src="<?php the_field('image3'); ?>"></figure>
          <div class='bl_success_profile'>
            <div class='bl_success_status'><?php the_field('status3'); ?></div>
            <div class='bl_success_name'><?php the_field('name3'); ?></div>
          </div>
          <div class='bl_success_result'><?php the_field('result3'); ?></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ご利用の流れ -->
  <section class='ly_flow'>
    <div class='ly_inner'>
      <div class='bl_flow_title'>
        <h2 class='el_title el_title__navy'>ご利用の流れ</h2>
      </div>
      <div class='bl_flow_parts'>
        <div class='bl_flow_part'>
          <div class='bl_flow_part_number'>01</div>
          <div class='bl_flow_part_infos'>
            <div class='bl_flow_part_info'>
              <h3 class='bl_flow_part_info_summary'>お問い合わせ</h3>
            </div>
            <div class='bl_flow_part_info'>
              <p class='bl_flow_part_info_content'>まずはフォームまたはお電話からお申し込みください。</p>
            </div>
          </div>
        </div>
        <div class='bl_flow_part'>
          <div class='bl_flow_part_number'>02</div>
          <div class='bl_flow_part_infos'>
            <div class='bl_flow_part_info'>
              <h3 class='bl_flow_part_info_summary'>ヒアリング</h3>
            </div>
            <div class='bl_flow_part_info'>
              <p class='bl_flow_part_info_content'>現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
            </div>
          </div>
        </div>
        <div class='bl_flow_part'>
          <div class='bl_flow_part_number'>03</div>
          <div class='bl_flow_part_infos'>
            <div class='bl_flow_part_info'>
              <h3 class='bl_flow_part_info_summary'>学習プランのご提供</h3>
            </div>
            <div class='bl_flow_part_info'>
              <p class='bl_flow_part_info_content'>目標達成のために最適な学習プランをご提案致します。</p>
            </div>
          </div>
        </div>
        <div class='bl_flow_part'>
          <div class='bl_flow_part_number'>04</div>
          <div class='bl_flow_part_infos'>
            <div class='bl_flow_part_info'>
              <h3 class='bl_flow_part_info_summary'>ご入会</h3>
            </div>
            <div class='bl_flow_part_info'>
              <p class='bl_flow_part_info_content'>お申込み完了後、レッスンがスタートします。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- よくある質問 -->
  <section class='ly_faq'>
    <div class='ly_inner'>
      <div class='bl_faq_title'>
        <h2 class='el_title el_title__navy'>よくある質問</h2>
      </div>
      <div class='bl_faq_items'>
        <div class='bl_faq_item'>
          <h3 class='bl_faq_question js_faq_question'>Engressはサラリーマンでも学習を続けられるでしょうか？</h3>
          <p class='bl_faq_answer'>Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
        </div>
        <div class='bl_faq_item'>
          <h3 class='bl_faq_question js_faq_question'>教材はオリジナルのものを使用しているのでしょうか？</h3>
          <p class='bl_faq_answer'>Engressの教材は完全オリジナルです。専門家が1から作成しています。</p>
        </div>
        <div class='bl_faq_item'>
          <h3 class='bl_faq_question js_faq_question'>講師に日本人はいますか？</h3>
          <p class='bl_faq_answer'>Engressには日本人の講師が100名在籍しています。</p>
        </div>
        <div class='bl_faq_item'>
          <h3 class='bl_faq_question js_faq_question'>TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h3>
          <p class='bl_faq_answer'>各個人ごとにプランを考えておりまして、TOEFL以外の海外大学合格のサポートももちろんしております。</p>
        </div>
      </div>
  </section>
  <!-- ブログ＆お知らせ -->
  <div class='ly_blog_news'>
    <div class='ly_inner'>
      <section class='ly_blog'>
        <div class='bl_blog_title'>
          <h2 class='el_title el_title__navy'>ブログ</h2>
        </div>
        <div class='bl_blog_items'>
          <?php
            global $post;
            $args = array(
              'posts_per_page' => 3,
              'post_type'=> 'post', // default
              'orderby' => 'date', // default
              'order' => 'DESC' // default
            );
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post);
          ?>
              <a class='bl_blog_item' href="<?php the_permalink(); ?>">
                <div class='el_blogCategory'>
                <?php
                  $category = get_the_category();
                  if ($category[0] ) {
                    echo $category[0] -> cat_name;
                  }
                ?>
                </div>
                <figure class='bl_blog_img'>
                  <?php
                    if (has_post_thumbnail() ) {
                      the_post_thumbnail('thumbnail');
                    } else {
                      echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                    }
                  ?>
                </figure>
                <div class='bl_blog_info'>
                  <?php $blog_title = get_the_title(); ?>
                  <?php $blog_trim_title = wp_trim_words($blog_title, 30, '...') ?>
                  <h3 class='bl_blog_info_title'><?php echo $blog_trim_title; ?></h3>
                  <time class='bl_blog_info_time'><?php the_date('Y-m-d'); ?></time>
                </div>
              </a>
          <?php
            endforeach;
            wp_reset_postdata();
          ?>
        </div>
      </section>
      <section class='ly_news'>
        <div class='bl_news_title'>
          <h2 class='el_title el_title__navy'>お知らせ</h2>
        </div>
        <div class='bl_news_items'>
          <?php
            global $post;
            $args = array(
              'posts_per_page' => 3,
              'post_type'=> 'news',
              'orderby' => 'date', // default
              'order' => 'DESC' // default
            );
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post);
          ?>
          <a class='bl_news_item' href="<?php the_permalink(); ?>">
            <time class='bl_news_item_time'><?php the_date('Y-m-d'); ?></time>
            <h3 class='bl_news_item_title'><?php echo wp_trim_words(get_the_title(), 30, '...'); ?></h3>
          </a>
          <?php
            endforeach;
            wp_reset_postdata();
          ?>
        </div>
      </section>
    </div>
  </div>
  <?php get_template_part('template-parts/contact'); ?>
</main>
<?php get_footer(); ?>
