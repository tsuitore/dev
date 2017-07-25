<!-- <ul id="instagram" class="row">
					<?php
						$data = "https://api.instagram.com/v1/users/self/media/recent?access_token=1342292390.550daf5.6f4a72f18bba4b0abe0f1a0f41e275fd";
						$json = file_get_contents($data);
						if ($json == false) {
						    echo "false";
						    return;
						}
						$obj = json_decode($json,true);

						for( $number = 0 ; $number < count($obj['data']) && $number <= 9 ; $number++ ){
						    //画像取得
						    $img = $obj['data'][$number]['images']['standard_resolution']['url'];
						    //画像のリンク取得
						    $linked = $obj['data'][$number]['link'];
						    echo '<li class="insta col-lg-1 col-md-2 col-sm-3"><a href="'.$linked.'"><img src="'.$img.'" target="_blank" /></a></li>'."\n";
						};
					?>
				</ul> -->