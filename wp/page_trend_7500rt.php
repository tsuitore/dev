<?php
/*
Template Name: トレンド7500リツイート以上
*/
?>

<?php get_header(); ?>

<body itemscope itemtype="http://schema.org/WebPage">

	<?php include(TEMPLATEPATH . '/common_header.php'); ?>

	<div id="wrapper">
		<?php breadcrumb();?>
		<div id="cat-title" class="container clearfix">
			<h1 class="category_title">7500リツイート以上｜<br class="sp"> 国内リアルタイムツイッター検索</h1>
			<p class="trend_description">
				国内ツイートの中で、7500リツイート以上の話題動画、画像、芸能人などの人気ツイートのみをリアルタイム検索できます。
				
			</p>
		</div>
		<div id="trend" class="container clearfix">
			<div id="main-contents">
				<div class="trend_box">
					<h2 class="trend_title">7500リツイート以上のツイート検索</h2>
					<div class="trend_timeline">
						<a class="twitter-timeline"  href="https://twitter.com/search?q=min_retweets%3A7500%20lang%3Aja" data-widget-id="880457703000129540">min_retweets:7500 lang:jaに関するツイート</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


          			</div>
				</div>
				<div class="trend_box">
					<h2 class="trend_title">7500リツイート以上の動画ツイート検索</h2>
					<div class="trend_timeline">
						<a class="twitter-timeline"  href="https://twitter.com/search?q=min_retweets%3A7500%20lang%3Aja%20filter%3Avideos" data-widget-id="880457703000129540">min_retweets:7500 lang:ja filter:videosに関するツイート</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


					</div>
				</div>
				<div class="trend_box">
					<h2 class="trend_title">7500リツイート以上の画像ツイート検索</h2>
					<div class="trend_timeline">
						<a class="twitter-timeline"  href="https://twitter.com/search?q=min_retweets%3A7500%20lang%3Aja%20filter%3Aimages" data-widget-id="880457703000129540">min_retweets:7500 lang:ja filter:imagesに関するツイート</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	        		</div>
				</div>          
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

	<?php include(TEMPLATEPATH . '/common_footer.php'); ?>
<?php get_footer();?>
