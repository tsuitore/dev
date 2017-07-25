<?php get_header(); ?>
<?php
	$cat_info  = get_category($cat, OBJECT);
	$parent = get_category($cat_info->parent);
?>

<body>

	<?php include(TEMPLATEPATH . '/common_header.php'); ?>

	<div id="wrapper" class="layer">

		<?php breadcrumb();?>

		<div id="cat-title" class="container clearfix">
			<h1><?php echo ucfirst($parent->name);?><span><?php echo $parent->category_description;?></span></h1>
			<?php if ($parent->slug == 'category01' || $parent->slug == 'category03') { ?>
				<div class="sub_list">
					<ul>
						<?php if ($parent->slug == 'category01') { ?>
							<li class="<?php if ($cat_info->slug == '100') { echo 'active'; } ?>"><a href="/category01/100"><span>おかね</span></a>
							<li class="<?php if ($cat_info->slug == '101') { echo 'active'; } ?>"><a href="/category01/101"><span>たたかう</span></a>
							<li class="<?php if ($cat_info->slug == '102') { echo 'active'; } ?>"><a href="/category01/102"><span>さくせん</span></a>
							<li class="<?php if ($cat_info->slug == '103') { echo 'active'; } ?>"><a href="/category01/103"><span>どうぐ</span></a>
							<li class="last <?php if ($cat_info->slug == '104') { echo 'active'; } ?>"><a href="/category01/104"><span>（にげる）</span></a>
						<?php } ?>
						<?php if ($parent->slug == 'category03') { ?>
							<li class="<?php if ($cat_info->slug == '300') { echo 'active'; } ?>"><a href="/category03/300"><span>フリ子でランス</span></a>
							<li class="<?php if ($cat_info->slug == '301') { echo 'active'; } ?>"><a href="/category03/301"><span>無職じゃなくてフリーと呼んで</span></a>
							<li class="last <?php if ($cat_info->slug == '302') { echo 'active'; } ?>"><a href="/category03/302"><span>They</span></a>
						<?php } ?>
					</ul>
				</div>
			<?php } ?>

		</div>

		<div id="category" class="container clearfix">
			<div id="main-contents">

				<ul class="article-ul article clearfix">
					<?php 
					$query_args = array(
						'cat'=>$cat,
						'posts_per_archive_page'=>6,
						'paged' => get_query_var('paged') 
						);
					$the_query = new WP_Query($query_args);
					if ( $the_query->have_posts() ) :	while ( $the_query->have_posts() ) : $the_query->the_post();?>

					<li class="article-list">
						<h2><?php echo ucfirst($parent->name);?>
						<span><?php echo $parent->category_description;?></span>
						</h2>

						<div class="thumb"><a class="trans_op" href="<?php echo get_the_permalink();?>">
							<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' );?>
							<img src="<?php echo $eye_img[0];?>" alt="<?php the_title(); ?>">
						</a></div>

						<p class="date"><?php the_time('Y/m/d');?></p>
						<p class="title"><a href="<?php echo get_the_permalink();?>"><?php the_title(); ?></a></p>
						<p class="descript"><a href="<?php echo get_the_permalink();?>"><?php echo mb_substr(html_entity_decode(strip_tags(get_the_content())), 0, 70, "utf-8"); ?></a></p>

						<ul class="tag">
							<?php
							$posttags = get_the_tags();
							if ($posttags) {
								if (count($posttags) > 4) {
									for ($i=0; $i < 4; $i++) { 
										echo '<li><a href="'. get_tag_link($posttags[$i]->term_id) .'">' . $posttags[$i]->name . '</a></li>';
									}
									echo '<li class="last">...etc</li>';

								} else {
									foreach($posttags as $tag) {
										echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></li>';
									}
								}
							}
							?>
						</ul>

						<!-- <div class="point"><?php if(function_exists('scc_get_share_total')) echo scc_get_share_total(); ?> points</div> -->
					</li>
					<?php endwhile;	endif;?>

				</ul>

				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(array('query'=>$the_query)); } ?>

				<?php wp_reset_postdata();?>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

	<?php include(TEMPLATEPATH . '/common_footer.php'); ?>
	
	<script>
		$('#slider .article').bxSlider({
			auto: true,
			pause: 3000,
			pager: true,
			controls: true,
		  // pagerCustom: '#bx-pager'
		});
	</script>

	<?php get_footer();?>
