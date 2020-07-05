<?php
$_POST = !empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);
include $_SERVER['DOCUMENT_ROOT'].'/wp-config.php';
$EXCHENG = carbon_get_theme_option( 'excheng' );
$data = [];
$cid = $_POST['cid'];
$LIMIT = $_POST['limit'];
$offset = $_POST['offset'];
$post_type = $_POST['postType'];

$posts = get_posts( array(
	'numberposts' => $LIMIT,
	'category'    => $cid,
	'offset'      => $offset,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  => '',
	'post_type'   => $post_type,
	'suppress_filters' => true,
) );
if($post_type === 'blog') {
	foreach ($posts as $item) {
		$support['id'] = $item->ID;
		$support['description'] = get_the_excerpt($item->ID);
		$support['alt'] = carbon_get_post_meta($item->ID, 'alt_thumbnail');
		$support['title'] = carbon_get_post_meta($item->ID, 'title_thumbnail');
		$support['src'] = carbon_get_post_meta($item->ID, 'src_thumbnail');
		$support['post_title'] = get_the_title($item->ID);
		$support['permalink'] = get_permalink($item->ID);
		$data[] = $support;
	}
}
else {
	foreach ($posts as $item) {
		$support['id'] = $item->ID;
		$support['rating'] = carbon_get_post_meta( $item->ID, 'desc_card_rating' );
		$support['description'] = carbon_get_post_meta( $item->ID, 'desc_card_description' );
		$support['price'] = carbon_get_post_meta( $item->ID, 'desc_card_price' );
		$support['vendor'] = carbon_get_post_meta( $item->ID, 'desc_card_firm' );
		$support['alt'] =  carbon_get_post_meta( $item->ID, 'alt_thumbnail' );
		$support['title'] =  carbon_get_post_meta( $item->ID, 'title_thumbnail' );
		$support['src'] =  carbon_get_post_meta( $item->ID, 'src_thumbnail' );
		$support['post_title'] = get_the_title( $item->ID );
		$support['permalink'] = get_permalink( $item->ID );
		$support['rating'] = $support['rating'] * 20;
		$support['exchang'] = $EXCHENG;
		$data[] = $support;
	}
}

echo json_encode($data);
?>