<div id="sidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
	
	<div itemtype=”http://schema.org/WPAdBlock” class="sidebar_ads_box">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- ツイトレ｜サイドバー上2 -->
	<ins class="adsbygoogle"
	     style="display:inline-block;width:336px;height:280px"
	     data-ad-client="ca-pub-1593102692040305"
	     data-ad-slot="9470675477"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	</div>

	<?php if(is_page( 'ranking' )): ?>
	<?php else: ?>
	<div class="ranking box">
		<p class="ttl">週間ランキング</p>
		<ul class="article-ul article clearfix">
			<?php wpp_get_mostpopular('limit=10&range="weekly"&post_type="post"&stats_views=0'); ?>
		</ul>
		<div class="btn">
			<a href="<?php echo home_url('/ranking/');?>">もっと見る</a>
		</div>
	</div>
	<?php endif; ?>
	<div class="tag-area box">
		<p class="ttl">タグ一覧</p>
		<ul class="tag">
			<?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
			<li><?php $tags = wp_tag_cloud('number=50&orderby=count&order=DESC&smallest=8&largest=8'); ?></li>
			<?php endif; ?>
		</ul>
	</div>
	
	<div itemtype=”http://schema.org/WPAdBlock” class="sidebar_ads_box">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- ツイトレ｜サイドバー下 -->
	<ins class="adsbygoogle"
	     style="display:inline-block;width:336px;height:280px"
	     data-ad-client="ca-pub-1593102692040305"
	     data-ad-slot="2087009474"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	</div>
	
	<?php if(is_single()): ?>
		<?php include(TEMPLATEPATH . '/common_recommendArticle.php'); ?>
	<?php else: ?>
	<?php endif; ?>

</div>