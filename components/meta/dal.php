<?php
$data = [];
if(!is_category()) {
	global $post;
	$post_id = $post->ID;

	$data['title'] =  carbon_get_post_meta( $post_id, 'title' );
	$data['description'] =  carbon_get_post_meta( $post_id, 'description' );
	$data['keywords'] =  carbon_get_post_meta( $post_id, 'keywords' );
} else {
	$cid = get_query_var('cat');

	$data['title'] =  carbon_get_term_meta( $cid, 'title' );
	$data['description'] =  carbon_get_term_meta( $cid, 'description' );
	$data['keywords'] =  carbon_get_term_meta( $cid, 'keywords' );
}
include 'view.php';