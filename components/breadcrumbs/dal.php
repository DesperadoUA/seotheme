<?php
$data_post = [];
if(!is_category()) {
	global $post;
	$post_id = $post->ID;
	$data_post['breadcrumbs'] = carbon_get_post_meta( $post_id, 'breadcrumbs' );
} else {
	$cid = get_query_var('cat');
	$data_post['breadcrumbs'] = carbon_get_term_meta( $cid, 'breadcrumbs' );
}

if(count($data_post['breadcrumbs']) !== 0) include 'view.php';