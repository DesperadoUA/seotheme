<?php
$data = [];
if(!is_category()) {
	global $post;
	$post_id = $post->ID;
	$data = carbon_get_post_meta( $post_id, 'vendors' );
} else {
	$cid = get_query_var('cat');
	$data = carbon_get_term_meta( $cid, 'vendors' );
}
if(count($data) !== 0) include 'view.php';