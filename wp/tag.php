<?php get_header(); ?>

<body itemscope itemtype="http://schema.org/WebPage">

	<?php include(TEMPLATEPATH . '/common_header.php'); ?>

	<div id="wrapper" class="layer">

		<?php breadcrumb();?>

		<div id="cat-title" class="container clearfix">
			<h1 class="category_title"><?php single_cat_title(); ?></h1>
		</div>

		<div id="category" class="container clearfix">
			<div id="main-contents">

				<ul class="article-ul article clearfix">
					
					<?php if(have_posts()): while(have_posts()):the_post(); ?>

					<li itemtype ="http://schema.org/Article" class="article-list">
						<a itemprop="url" href="<?php echo get_the_permalink();?>">
						<!-- <div class="thumb_box">
							<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject" class="thumb">
								<?php the_post_thumbnail(array(154, 90, true), array( 'class' => 'img100 thumb', 'itemprop' => 'thumbnailUrl')); ?>
								<meta itemprop="url">
								<meta itemprop="width" content="154">
								<meta itemprop="height" content="90">
							</div>
						</div> -->
						<div class="text_box">
							<p itemprop="datePublished" content="<?php the_time('Y/m/d') ?>" class="date">
								<?php the_time('Y/m/d') ?>
							</p>
							<h2 itemprop="name headline" class="title">
								<?php the_title(); ?>
							</h2>
						</div>
						</a>
					</li>
				<?php endwhile; endif; ?>
				<?php pagination($the_query->max_num_pages, get_query_var('paged'));?>

				</ul>
					
			</div>
			<?php get_sidebar(); ?>
		</div>

	</div>


	<?php include(TEMPLATEPATH . '/common_footer.php'); ?>

<?php get_footer();?>