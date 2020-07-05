<?php
$data = [];
if(is_category()) {
	$obj_data = get_queried_object();
	$cid = $obj_data->term_id;
	$data = carbon_get_term_meta( $cid, 'table_characters' );
}
else {
	global $post;
	$post_id = $post->ID;
	$data = carbon_get_post_meta( $post_id, 'table_characters' );
}

if(count($data) !== 0) include 'view.php';