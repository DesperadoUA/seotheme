<?php
$LIMIT = 8;
$ID_CATEGORY_SEEDS = 4;
$EXCHENG = carbon_get_theme_option( 'excheng' );
$data = [];
$obj_data = get_queried_object();
$cid = $obj_data->term_id;
$settings = [];
$settings['total'] = $obj_data->count;
$settings['offset'] = $LIMIT;
$settings['cid'] = $cid;
$settings['domain'] = $_SERVER['HTTP_HOST'];
if($obj_data->category_parent === $ID_CATEGORY_SEEDS) $settings['post_type'] = 'products';

$posts = get_posts( array(
	'numberposts' => $LIMIT,
	'category'    => $cid,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => $settings['post_type'],
	'suppress_filters' => true,
) );
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
	$data[] = $support;
}
if(count($data) !== 0) include 'view.php';
