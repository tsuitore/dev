<?php 

add_theme_support('post-thumbnails');

// function my_delete_local_jquery() {
//     wp_deregister_script('jquery');
// }
// add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );

add_action( 'parse_query', 'my_parse_query' );
function my_parse_query( $query ) {
	if ( ! isset( $query->query_vars['paged'] ) && isset( $query->query_vars['page'] ) )
		$query->query_vars['paged'] = $query->query_vars['page'];
}


function custom_excerpt_length( $length ) {
	return 100;	
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function del_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'del_excerpt_more');

// パンくずリスト
function breadcrumb(){
	global $post;
	$str ='';
	if(!is_home()&&!is_admin()){
		$str.= '<ul itemscope itemtype="http://schema.org/BreadcrumbList" id="breadcrumb" class="container clearfix">';
		$str.= '<li><a itemprop="url" href="'. home_url() .'">TOP</a></li>';

		//category
		if(is_category()) {
			$cat = get_queried_object();
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat->cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li><a itemprop="url name" href="'. get_category_link($ancestor) .'">'. get_cat_name($ancestor) .'</a></li>';
				}
			}
			$str.='<li><a itemprop="url name" href="'. get_category_link($cat->term_id). '" >'. $cat->cat_name . '</a></li>';

		//固定
		} elseif(is_page()){
			if($post->post_parent != 0 ){
				$ancestors = array_reverse(get_post_ancestors( $post->ID ));
				foreach($ancestors as $ancestor){
					$str.='<li><a itemprop="url name" href="'. get_page_link($ancestor).'">'. get_the_title($ancestor) .'</a></li>';
				}
			}
			$str.='<li><a itemprop="url name" href="'. get_page_link() .'">'. wp_title('', false) .'</a></li>';

		//投稿
		} elseif(is_single()){
			$categories = get_the_category($post->ID);
			$cat = $categories[0];
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat->cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li><a itemprop="url name" href="'. get_category_link($ancestor) .'">'. get_cat_name($ancestor) .'</a></li>';
				}
			}
			$str.='<li><a itemprop="url name" href="'. get_category_link($cat->term_id). '" >'. $cat->cat_name . '</a></li>';
			$str.='<li><a itemprop="url name" href="'. get_the_permalink() .'">'. wp_title('', false) .'</a></li>';
		} else{
			$str.='<li itemprop="name">'. wp_title('', false) .'</li>';
		}
		$str.='</ul>';
	}
	echo $str;
}


//ページャ
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は、１とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが１でない場合はページネーションを表示する
     {
     echo "<ul id=\"pager\">\n";

        for ($i=1; $i <= $pages; $i++)
         {
          //三項演算子での条件分岐
          echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
         }
    echo "</ul>\n";
    }
}

//リダイレクトを拒否
add_filter('redirect_canonical','my_disable_redirect_canonical');
function my_disable_redirect_canonical( $redirect_url ) {

	if ( is_single() || is_category() ){
		$subject = $redirect_url;
		$pattern = '/\/page\//'; // URLに「/page/」があるかチェック
		preg_match($pattern, $subject, $matches);

		if ($matches){
		//リクエストURLに「/page/」があれば、リダイレクトしない。
			$redirect_url = false;
			return $redirect_url;
		}
	}

}

//指定されたカテゴリの子カテゴリを全取得
function my_get_category_children($slug_num){
	$slug = 'category' . $slug_num;
	$cat = get_category_by_slug($slug);
	$cat_id = intval($cat->cat_ID);
	$childs = get_term_children($cat_id, 'category');
	$children = array(); 

	foreach ($childs as $key => $value) {
		$child = get_category($value);
		$children[] = array('cat_ID' => $child->cat_ID, 'name' => $child->name, 'slug' => $child->slug);
	}

	return $children;
}



function ilc_mce_buttons($buttons){
  // wp_page ページ分割ボタン
  array_push($buttons, "wp_page");
  return $buttons;
}
add_filter("mce_buttons", "ilc_mce_buttons");




// コメントフォームで使用できるタグを無効化する
remove_filter('comment_text', 'make_clickable', 9);
add_filter('comments_open', 'custom_comment_tags');
add_filter('pre_comment_approved', 'custom_comment_tags');
function custom_comment_tags($data) {
    global $allowedtags;
    unset($allowedtags['a']);
    unset($allowedtags['abbr']);
    unset($allowedtags['acronym']);
    unset($allowedtags['b']);
    unset($allowedtags['div']);
    unset($allowedtags['cite']);
    unset($allowedtags['code']);
    unset($allowedtags['del']);
    unset($allowedtags['em']);
    unset($allowedtags['i']);
    unset($allowedtags['q']);
    unset($allowedtags['strike']);
    unset($allowedtags['strong']);
    return $data;
}

// メールアドレスが公開されることはありません。を消す
add_filter( "comment_form_defaults", "my_comment_notes_before");
	function my_comment_notes_before( $defaults){
	$defaults['comment_notes_before'] = '';
	return $defaults;
}  


