<?php
$data = [];
global $post;
$post_id = $post->ID;
$relative_ids = carbon_get_post_meta( $post_id, 'relative_products' );

for($i=0; $i<count($relative_ids); $i++) {
	$support['id'] = $relative_ids[$i];
	$support['rating'] = carbon_get_post_meta( $relative_ids[$i], 'desc_card_rating' );
	$support['description'] = carbon_get_post_meta( $relative_ids[$i], 'desc_card_description' );
	$support['price'] = carbon_get_post_meta( $relative_ids[$i], 'desc_card_price' );
	$support['vendor'] = carbon_get_post_meta( $relative_ids[$i], 'desc_card_firm' );
	$support['alt'] =  carbon_get_post_meta( $relative_ids[$i], 'alt_thumbnail' );
	$support['title'] =  carbon_get_post_meta( $relative_ids[$i], 'title_thumbnail' );
	$support['src'] =  carbon_get_post_meta( $relative_ids[$i], 'src_thumbnail' );
	$support['post_title'] = get_the_title( $relative_ids[$i] );
	$support['permalink'] = get_permalink( $relative_ids[$i] );
	$support['rating'] = $support['rating'] * 20;
	$data[] = $support;
}
if(count($data) !== 0) include $ROOT_THEME.'components/category_card_posts/view.php';