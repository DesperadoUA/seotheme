<?php
/**
 * Created by PhpStorm.
 * User: Костя
 * Date: 18.05.2020
 * Time: 20:59
 */
$data = [];
if(!is_category()) {
	global $post;
	$post_id = $post->ID;

	$data['h1'] =  carbon_get_post_meta( $post_id, 'h1' );
} else {
	$cid = get_query_var('cat');

	$data['h1'] =  carbon_get_term_meta( $cid, 'h1' );
}
include 'view.php';