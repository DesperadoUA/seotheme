<?php
if(array_key_exists('searchWord', $_GET)) {
	$key_word =$_GET['searchWord'];
	$EXCHENG = carbon_get_theme_option( 'excheng' );
	$data = [];
	$post_args = array(
		'numberposts'=>'-1',
		'post_type'=>array('products','chemistry'),
		's'=>$key_word
	);
	$posts=get_posts($post_args);
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
 	if(count($data) !== 0) include $ROOT_THEME.'components/category_card_posts/view.php';
	else include 'not_found.php';
}
else {
	echo "Запрос не указан";
}