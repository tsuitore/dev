<div itemscope itemtype="http://schema.org/WebPage" class="recommend_box">
	<p class="ttl article-border-top">おすすめ記事</p>
	<?php
	    if ( in_category('8') ) {
	      query_posts('posts_per_page=8&cat=8,3,12,10,9,1,2,11&orderby=rand&paged='.$paged);
	    } else if ( in_category('3') ) {
	      query_posts('posts_per_page=8&cat=8,3,12,10,9,1,2,11&orderby=rand&paged='.$paged);
	    } else if ( in_category('12') ) {
	      query_posts('posts_per_page=8&cat=8,3,12,10,9,1,2,11&orderby=rand&paged='.$paged);
	    } else if ( in_category('10') ) {
	      query_posts('posts_per_page=8&cat=8,3,12,10,9,1,2,11&orderby=rand&paged='.$paged);
	    } else if ( in_category('9') ) {
	      query_posts('posts_per_page=8&cat=8,3,12,10,9,1,2,11&orderby=rand&paged='.$paged);
	    } else if ( in_category('1') ) {
	      query_posts('posts_per_page=8&cat=8,3,12,10,9,1,2,11&orderby=rand&paged='.$paged);
	    } else if ( in_category('2') ) {
	      query_posts('posts_per_page=8&cat=8,3,12,10,9,1,2,11&orderby=rand&paged='.$paged);
	    } else if ( in_category('11') ) {
	      query_posts('posts_per_page=8&cat=8,3,12,10,9,1,2,11&orderby=rand&paged='.$paged);
	    } else {
	      query_posts('posts_per_page=8&orderby=rand&cat=8,3,12,10,9,1,2,11&paged='.$paged);
	    }
	?>

<ul class="article-ul article clearfix">
  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	<?php $cat = get_the_category();$cat = $cat[0];?>
  	<li itemprop="mainEntityOfPage publisher" itemtype="http://schema.org/Article" class="article-list">
		<a itemprop="url" href="<?php echo get_the_permalink();?>">

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
</ul>
</div>
<?php wp_reset_query(); ?>