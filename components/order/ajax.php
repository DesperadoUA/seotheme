<?php
$_POST = !empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);
include $_SERVER['DOCUMENT_ROOT'].'/wp-config.php';
$EXCHENG = carbon_get_theme_option( 'excheng' );
$postIds = $_POST['id'];
$data = [];
foreach ($postIds as $id) {
	$support['id'] = $id;
	$support['rating'] = carbon_get_post_meta( $id, 'desc_card_rating' );
	$support['description'] = carbon_get_post_meta( $id, 'desc_card_description' );
	$support['price'] = carbon_get_post_meta( $id, 'desc_card_price' );
	$support['vendor'] = carbon_get_post_meta( $id, 'desc_card_firm' );
	$support['alt'] =  carbon_get_post_meta( $id, 'alt_thumbnail' );
	$support['title'] =  carbon_get_post_meta( $id, 'title_thumbnail' );
	$support['src'] =  carbon_get_post_meta( $id, 'src_thumbnail' );
	$support['post_title'] = get_the_title( $id );
	$support['permalink'] = get_permalink( $id );
	$support['rating'] = $support['rating'] * 20;
	$support['exchang'] = $EXCHENG;
	$data[] = $support;
}
echo json_encode($data);