<?php get_header(); ?>

<body>

	<?php include(TEMPLATEPATH . '/common_header.php'); ?>

	<div id="wrapper" class="layer">

		<?php breadcrumb();?>

		<div id="single" class="container clearfix">
			<div itemprop="mainEntityOfPage publisher" itemtype="http://schema.org/Article" id="main-contents">

				<div itemtype=”http://schema.org/WPAdBlock” class="single_top_ad sp">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- ツイトレ｜記事ページ２ -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:336px;height:280px"
					     data-ad-client="ca-pub-1593102692040305"
					     data-ad-slot="2945170271"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>


				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php $cat = get_the_category();$cat = $cat[0];?>
						
						<?php get_template_part( 'common_sns2' ); //ページトップsnsボタン ?>
				<div class="single-area">
							

							
					<h1 itemprop="name headline"><?php the_title(); ?></h1>

					<ul class="single_date">
						<li itemprop="datePublished">［投稿日］<?php the_time('Y/m/d') ?></li>
                      	<?php if (get_the_modified_date('Y.n.j') > get_the_time('Y.n.j')) : ?>
                      	<li itemprop="dateModified">［最終更新日］<?php the_modified_date('Y.m.d') ?></li>
                         <?php endif; ?>
                         <li itemprop="author"><?php the_author(); ?></li>
                    </ul>


					<div itemprop="mainEntityOfPage" class="area">
						<?php add_filter ('the_content', 'wpautop'); ?>
						<!-- 記事内容 the_content -->
						<?php the_content(); ?>
						<?php remove_filter ('the_content', 'wpautop'); ?>

						<?php wp_link_pages('before=<p itemprop=”keywords” id="postpage">&after=</p>&pagelink=<span>%</span>'); ?>
						<?php the_tags( '<ul itemprop=”keywords” class="tag bottom_tag"><li>', '</li><li>', '</li></ul>' ); ?>

					</div>

				<?php get_template_part( 'common_sns2' ); //ページトップsnsボタン ?>


				<!-- <div itemtype=”http://schema.org/WPAdBlock” class="single_bottom_ad">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-1593102692040305"
				     data-ad-slot="7933773070"
				     data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				</div> -->

				<!-- <div class="single_facebook_like_box">
					<p class="like_please">
						このまとめが気に入ったら『いいね！』お願いしやす！
					</p>
					<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Ftsuitore%2F&width=88&layout=button&action=like&size=large&show_faces=false&share=false&height=65&appId=1811254732522138" width="88" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					<p class="like_please">
						Facebookからツイッターの最新まとめをお届けしやす！
					</p>
				</div> -->

				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>



	            </div>

			</div>
			<?php get_sidebar(); ?>
		</div>

	</div>

<?php include(TEMPLATEPATH . '/common_footer.php'); ?>

<?php get_footer();?>
