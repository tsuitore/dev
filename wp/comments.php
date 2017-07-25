<div itemtype=”http://schema.org/UserComments” itemprop="comment" id="comment_area">
<?php if(have_comments()): ?>
<h3 class="comment_title">ヤジ一覧</h3>
<ol class="commets-list">
<?php wp_list_comments('avatar_size=48'); ?>
</ol>
<?php endif; ?>
<?php $args = array(
    'title_reply' => 'ヤジを投稿',
    'label_submit' => '投稿する',
    'fields' => array(
            'author' => '<p class="comment-form-author">' .
                        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' placeholder="ニックネーム" /></p>',
            ),
    'comment_field' => '<p class="comment-form-comment">' . '<textarea id="comment" name="comment" cols="50" rows="6" aria-required="true"' . $aria_req . ' placeholder="コメント" /></textarea></p>',
    );
comment_form( $args ); ?>
</div>