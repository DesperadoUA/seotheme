<?php
$data = [];
if(!is_category()) {
	global $post;
	$post_id = $post->ID;
	$data['title'] =  carbon_get_post_meta( $post_id, 'video_title' );
	$data['iframe'] = carbon_get_post_meta( $post_id, 'video_cod' );
} else {
	$cid = get_query_var('cat');
	$data['title'] =  carbon_get_term_meta( $cid, 'video_title' );
	$data['iframe'] = carbon_get_term_meta( $cid, 'video_cod' );
}
if($data['title'] !== '') include 'view.php';