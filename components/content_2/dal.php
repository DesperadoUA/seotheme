<?php
$data = [];
if(!is_category()) {
	global $post;
	$post_id = $post->ID;
	$data['content'] =  carbon_get_post_meta( $post_id, 'content_2' );
} else {
	$cid = get_query_var('cat');
	$data['content'] =  carbon_get_term_meta( $cid, 'content_2' );
}
include 'view.php';