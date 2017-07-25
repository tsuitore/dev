<p class="red_exp wpcf7c-elm-step1">※全て必須項目です</p>
<p class="red_exp wpcf7c-elm-step2">以下の内容でよろしいですか？</p>

<div class="table wpcf7c-elm-step1 wpcf7c-elm-step2">

	<dl>
		<dt>お名前</dt>
		<dd class="first name">
			<p><span class="sub">姓</span>[text* family-name]</p>
			<p class="sec"><span class="sub">名</span>[text* first-name]</p>
			<span class="sub_exp">（全角）</span>
		</dd>
	</dl>
	<dl>
		<dt>お名前（フリガナ）</dt>
		<dd class="name">
			<p><span class="sub">セイ</span>[text* family-name-kana]</p>
			<p class="sec"><span class="sub">メイ</span>[text* first-name-kana]</p>
			<span class="sub_exp">（全角）</span>
		</dd>
	</dl>
	<dl>
		<dt>電話番号</dt>
		<dd class="tel">
			<div class="input">
				[tel user-tel]
				<span class="sub_exp">（半角）</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>メールアドレス</dt>
		<dd>
			[email* user-email]
		</dd>
	</dl>
	<dl>
		<dt>メールアドレス（確認用）</dt>
		<dd>
			[email* user-email_confirm]
		</dd>
	</dl>
	<dl>
		<dt>お問い合わせ内容</dt>
		<dd>
			[textarea* your-textarea]
		</dd>
	</dl>

</div>

<div class="button-area wpcf7c-elm-step1">
	[confirm class:confirm class:button "入力内容の確認"]
</div>

<div class="button-area wpcf7c-elm-step2">
	[back class:modify class:button "入力内容の修正"][submit class:submit class:button "送信する"]
</div>

<p class="finish_txt wpcf7c-elm-step3">お問い合わせの送信が完了しました。</p>

<a class="go_top wpcf7c-elm-step3" href="./">TOP</a>
