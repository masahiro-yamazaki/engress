<!-- 固定ページのテキスト欄に貼り付け -->
<div class='bl_contact_items'>
  <div class='bl_contact_item'>
    <p class='el_contact_item_name'>会社名</p>
    [mwform_text name="company" class="el_contact_item_text" size="60" placeholder="Engress"]
  </div>
  <div class='bl_contact_item'>
    <p class='el_contact_item_name'>氏名</p>
    [mwform_text name="name" class="el_contact_item_text" size="60" placeholder="田中　太郎"]
  </div>
  <div class='bl_contact_item'>
    <p class='el_contact_item_name'>メールアドレス</p>
    [mwform_email name="email" class="el_contact_item_text" size="60" placeholder="example@example.com"]
  </div>
  <div class='bl_contact_item'>
    <p class='el_contact_item_name'>電話番号</p>
    [mwform_text name="tel" class="el_contact_item_text" size="60" placeholder="01-2345-6789"]
  </div>
</div>
<p class='bl_contact_purpose'>お問い合わせの種類を選択してください<span class='hp_bold'>（資料請求の方は資料請求を選択ください）</span></p>
<div class='bl_contact_purpose_selects'>
  [mwform_radio name="purpose" class="purpose" children="商談のご相談,サービスに関するお問い合わせ,資料請求,その他"]
</div>
<div class='bl_contact_content'>
  <p class='el_contact_item_name'>お問い合わせ内容</p>
  [mwform_textarea name="content" class="el_contact_item_text el_contact_item_text__content" cols="50" rows="5" placeholder="入力して下さい"]
</div>
<div class='bl_contact_privacyPolicy'>
  <p class='bl_contact_privacyPolicy_text'><a href='' class='bl_contact_privacyPolicy_link'>プライバシーポリシー</a>に同意の上、送信ください。</p>
  [mwform_checkbox name="privacy-check" class="bl_contact_privacyCheck" children="プライバシーポリシーに同意する" separator=","]
</div>
<div class='bl_contact_submit'>
  [mwform_bsubmit name="submit" class='el_button el_button__navy' value="send" display_input="true"]送信する[/mwform_bsubmit]
</div>
