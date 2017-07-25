<div id="social-platforms">
	<ul>
		<li>
			<a class="btn btn-icon btn-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&amp;t=<?php echo urlencode(the_title("","",0)); ?>"
		target="_blank" title="Facebookで共有"><i class="fa fa-facebook"></i><span>Facebookでシェア</span></a>
		</li>
		<li>
			<a class="btn btn-icon btn-twitter" href="http://twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&amp;<?php echo urlencode(get_permalink()); ?>&amp;url=<?php echo urlencode(get_permalink()); ?>"
	         target="_blank" title="Twitterで共有"><i class="fa fa-twitter"></i><span>ツイートする</span></a>
		</li>
		<li>
			<a class="btn btn-icon btn-line" href="//line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode;?>" target="_blank" title="LINEで共有"><i class="fa fa-comment"></i><span>LINEでシェア</span></a>
		</li> 
		<li>
			<a class="btn btn-icon btn-line" href="//b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="<?php the_title(); ?>"><i class="fa fa-hatena"></i><span>はてブ</span></a>
		</li>
		<li>
			<a class="btn btn-icon btn-pocket" href="http://getpocket.com/edit?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="pocketで共有"><i class="fa fa-get-pocket"></i><span>Pocket</span></a>
		</li>
		<li>
			<a class="btn btn-icon btn-rss" href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Ftsuitore.com%2Ffeed" target="_blank" title="feedlyでフォロー"><i class="fa fa-rss"></i><span>feedlyでフォロー</span></a>
		</li>
	</ul>
</div>
