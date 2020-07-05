<?php
$data = [];
if(!is_category()) {
	global $post;
	$post_id = $post->ID;
	$data['alt'] =  carbon_get_post_meta( $post_id, 'alt_thumbnail' );
	$data['title'] =  carbon_get_post_meta( $post_id, 'title_thumbnail' );
	$data['src'] =  carbon_get_post_meta( $post_id, 'src_thumbnail' );
} else {
	$cid = get_query_var('cat');

	$data['alt'] =  carbon_get_term_meta( $cid, 'alt_thumbnail' );
	$data['title'] =  carbon_get_term_meta( $cid, 'title_thumbnail' );
	$data['src'] =  carbon_get_term_meta( $cid, 'src_thumbnail' );
}
include 'view.php';