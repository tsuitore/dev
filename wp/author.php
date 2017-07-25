<?php get_header(); ?>
<?php
	$author = get_query_var('author');
	$author_info = get_userdata(intval($author));
?>
<!-- $author = get_query_var('author'); $paged = get_query_var('paged'); $posts = query_posts('posts_per_page=20&author=' . $author . '&paged=' . $paged); ?> -->

<body>

	<?php include(TEMPLATEPATH . '/common_header.php'); ?>

	<div id="wrapper" class="layer">

		<?php breadcrumb();?>

		<div id="cat-title" class="container clearfix">
			<h1><?php echo $author_info->display_name;?>さんの書いた記事</h1>
		</div>

		<div id="category" class="container clearfix">
			<div id="main-contents">

				<ul class="article-ul article clearfix">
					<?php 
					$query_args = array(
						'author'=>$author,
						'posts_per_archive_page'=>6,
						'paged' => get_query_var('paged') 
						);
					$the_query = new WP_Query($query_args);
					if ( $the_query->have_posts() ) :	while ( $the_query->have_posts() ) : $the_query->the_post();?>

					<li class="article-list">
						<?php $cat_info = get_the_category(); ?>
						<?php
							if ($cat_info[0]->parent) { 
								$parent = get_category($cat_info[0]->parent);
						?>
							<h2><?php echo ucfirst($parent->name);?><span><?php echo $parent->category_description;?></span></h2>
						<?php } else { ?>
							<h2><?php echo ucfirst($cat_info[0]->name);?><span><?php echo $cat_info[0]->category_description;?></span></h2>
						<?php }?>

						<div class="thumb"><a class="trans_op" href="<?php echo get_the_permalink();?>">
							<?php $eye_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' );?>
							<img src="<?php echo $eye_img[0];?>" alt="<?php the_title(); ?>">
						</a></div>

						<p class="date"><?php the_time('Y/m/d');?></p>
						<p class="title"><a href="<?php echo get_the_permalink();?>"><?php the_title(); ?></a></p>
						<p class="descript"><a href="<?php echo get_the_permalink();?>"><?php echo mb_substr(html_entity_decode(strip_tags(get_the_content())), 0, 180, "utf-8"); ?></a></p>

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
	
	<?php get_footer();?>
