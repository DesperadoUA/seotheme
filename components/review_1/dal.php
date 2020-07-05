<?php
$data = [];
if(!is_category()) {
	global $post;
	$post_id = $post->ID;
	$data['review'] =  carbon_get_post_meta( $post_id, 'review_1' );
	$data['title'] = get_the_title( $post_id );
}
else {
	$cid = get_query_var('cat');
	$data['review'] =  carbon_get_term_meta( $cid, 'review_1' );
	$data['title'] = get_cat_name( $cid );
}
if(count($data['review']) !== 0) include 'view.php';