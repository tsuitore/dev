
<?php
    $prevpost = get_adjacent_post(false, '', true); //前の記事
    $nextpost = get_adjacent_post(false, '', false); //次の記事
    if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
?>
<div  itemscope itemtype="http://schema.org/WebPage" class="pagenation_box clearfix">
    <?php
    if ( $prevpost ) { 
    echo '<div class="prevpost_box clearfix"><a itemprop=”url” href="' . get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '" id="prev" class="clearfix">
    <div id="prev_article"><前の記事</div>
    <p class="prev_img">' . get_the_post_thumbnail($prevpost->ID, array(100,100)) . '</p>
    <p itemprop=”headline” class="prev_title">' . get_the_title($prevpost->ID) . '</p></a></div>';
    } else { 
    echo  '';
    }
    if ( $nextpost ) { 
    echo '<div class="nextpost_box clearfix"><a itemprop=”url” href="' . get_permalink($nextpost->ID) . '" title="'. get_the_title($nextpost->ID) . '" id="next" class="clearfix">  
    <div id="next_article">次の記事></div>
    <p class="next_img">' . get_the_post_thumbnail($nextpost->ID, array(100,100)) . '</p>
    <p itemprop=”headline” class="next_title">'. get_the_title($nextpost->ID) . '</p></a></div>';
    } else { 
    echo '';
    }
    ?>
    <?php } ?>
</div>