<?php
$data = [];
if(!is_category()) {
	global $post;
	$post_id = $post->ID;
	$data['title'] =  carbon_get_post_meta( $post_id, 'faq_title' );
	$data['asq_question'] = carbon_get_post_meta( $post_id, 'faq' );
} else {
	$cid = get_query_var('cat');
	$data['title'] =  carbon_get_term_meta( $cid, 'faq_title' );
	$data['asq_question'] = carbon_get_term_meta( $cid, 'faq' );
}
if($data['title'] !== '') include 'view.php';