<?php if ( trim( $GLOBALS["stdata12"] ) == '' ) {
	if ( trim( $GLOBALS["stdata25"] ) !== '' ) {
		$twitter_name = esc_attr( $GLOBALS["stdata25"] );
	} else{
		$twitter_name = 'tsuitore';
	}
?>
<?php
	$url_encode=urlencode(get_permalink());
	$title_encode=urlencode(get_the_title());

	if(function_exists('scc_get_share_twitter')){
		$plug = "smanone";
	} else{
		$plug = "";
	}
?>
<div class="sns2">
	<ul class="clearfix">
	<!--ツイートボタン-->
		<li class="twitter2"> 
		<a onclick="window.open('//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&via=<?php echo $twitter_name ?>&tw_p=tweetbutton', '', 'width=500,height=450'); return false;">ツイートする<span class="snstext2 <?php echo $plug; ?>" ></span><?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()=='0')?'':'<span class="snscount2">'.scc_get_share_twitter().'</span>'; ?></a>
		</li>
		<!--Facebookボタン-->      
		<li class="facebook2">
		<a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" target="_blank">Facebookでシェア<span class="snstext2 <?php echo $plug; ?>" ></span>
		<?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':'<span class="snscount2">'.scc_get_share_facebook().'</span>'; ?></a>
		</li>
		<!--Google+1ボタン-->
		<li class="googleplus2">
		<a href="https://plus.google.com/share?url=<?php echo $url_encode;?>" target="_blank">Google＋で共有<span class="snstext2 <?php echo $plug; ?>" ></span><?php if(function_exists('scc_get_share_gplus')) echo (scc_get_share_gplus()==0)?'':'<span class="snscount2">'.scc_get_share_gplus().'</span>'; ?></a>
		</li>
		<!--ポケットボタン-->      
		<li class="pocket2">
		<a onclick="window.open('//getpocket.com/edit?url=<?php echo $url_encode;?>&title=<?php echo $title_encode;?>', '', 'width=500,height=350'); return false;">Pocket<span class="snstext2 <?php echo $plug; ?>" ></span><?php if(function_exists('scc_get_share_pocket')) echo (scc_get_share_pocket()==0)?'':'<span class="snscount2">'.scc_get_share_pocket().'</span>'; ?></a></li>
		<!--はてブボタン-->  
		<li class="hatebu2">       
		<a href="//b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="<?php the_title(); ?>"><span>！はてブ</span><span class="snstext2 <?php echo $plug; ?>" ></span>
		<?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':'<span class="snscount2"><span class="hatebno">'.scc_get_share_hatebu().'</span></span>';
		?></a><script type="text/javascript" src="//b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
		</li>
		<!--LINEボタン-->   
		<li class="line2">
		<a href="//line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode;?>" target="_blank">LINEでシェア<span class="snstext2" ></span></a>
		</li>
		<li class="feedly2">
			<a href='http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Ftsuitore.com%2Ffeed%2F'  target='blank'>Feedlyをフォロー</a>
		</li>
	</ul>
</div> 
<?php
}