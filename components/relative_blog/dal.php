<?php
$data = [];
global $post;
$post_id = $post->ID;
$relative_ids = carbon_get_post_meta( $post_id, 'relative_blog' );
$settings['class'] = 'bg_white';

for($i=0; $i<count($relative_ids); $i++) {
	$support['id'] = $relative_ids[$i];
	$support['description'] = get_the_excerpt( $relative_ids[$i] );
	$support['alt'] =  carbon_get_post_meta( $relative_ids[$i], 'alt_thumbnail' );
	$support['title'] =  carbon_get_post_meta( $relative_ids[$i], 'title_thumbnail' );
	$support['src'] =  carbon_get_post_meta( $relative_ids[$i], 'src_thumbnail' );
	$support['post_title'] = get_the_title( $relative_ids[$i] );
	$support['permalink'] = get_permalink( $relative_ids[$i] );
	$data[] = $support;
}
if(count($data) !== 0) include $ROOT_THEME.'components/category_card_blog/view.php';