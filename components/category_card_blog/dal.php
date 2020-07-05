<?php
$LIMIT = 8;
$EXCHENG = carbon_get_theme_option( 'excheng' );
$data = [];
$obj_data = get_queried_object();
$cid = $obj_data->term_id;
$settings = [];
$settings['total'] = $obj_data->count;
$settings['offset'] = $LIMIT;
$settings['cid'] = $cid;
$settings['domain'] = $_SERVER['HTTP_HOST'];
$settings['post_type'] = 'blog';
$settings['class'] = '';

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
	$support['description'] = get_the_excerpt( $item->ID );
	$support['alt'] =  carbon_get_post_meta( $item->ID, 'alt_thumbnail' );
	$support['title'] =  carbon_get_post_meta( $item->ID, 'title_thumbnail' );
	$support['src'] =  carbon_get_post_meta( $item->ID, 'src_thumbnail' );
	$support['post_title'] = get_the_title( $item->ID );
	$support['permalink'] = get_permalink( $item->ID );
	$data[] = $support;
}
if(count($data) !== 0) include 'view.php';
