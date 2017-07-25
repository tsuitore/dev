<?php
/*
Template Name: ホーム
*/
?>

<?php get_header(); ?>

<body>

	<?php include(TEMPLATEPATH . '/common_header.php'); ?>

	<div id="wrapper">

		<div id="ranking" class="container clearfix">
			<div id="main-contents">
				<h1>404 指定されたページは存在しませんm(_ _)m</h1>
				
				<p class="article-ttl article-border-top">ランキング</p>

				<ul id="tab-menu">
					<li class="active">今日のランキング</li>
					<li>週間ランキング</li>
					<li>月間ランキング</li>
					<li>歴代ランキング</li>
				</ul>

				<div id="tab-box">
					<div class="active">
						<?php wpp_get_mostpopular('limit=20&range="daily"&post_type="post"&stats_views=0'); ?>
					</div>
					<div>
						<?php wpp_get_mostpopular('limit=20&range="weekly"&post_type="post"&stats_views=0'); ?>
					</div>

					<div>
						<?php wpp_get_mostpopular('limit=20&range="monthly"&post_type="post"&stats_views=0'); ?>
					</div>

					<div>
						<?php wpp_get_mostpopular('limit=20&range="all"&post_type="post"&stats_views=0'); ?>
					</div>
				</div>
				

			</div>

		<?php get_sidebar(); ?>
		</div>

	</div>

	<?php include(TEMPLATEPATH . '/common_footer.php'); ?>
<?php get_footer();?>
