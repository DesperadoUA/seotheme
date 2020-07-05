<?php

$ID_CATEGORY_FERTILIZERS = 20;

/*--------------------------------------------------------------------------*/
$data = [];
$child_categories = get_term_children( $ID_CATEGORY_FERTILIZERS, 'category');

for($i=0; $i<count($child_categories); $i++) {
	$support['thumbnail'] =  carbon_get_term_meta( $child_categories[$i], 'desc_img' );
	$support['permalink'] =  carbon_get_term_meta( $child_categories[$i], 'desc_link' );
	$support['description'] =  carbon_get_term_meta( $child_categories[$i], 'desc_description' );
	$support['post_title'] =  carbon_get_term_meta( $child_categories[$i], 'desc_title' );
	$data[] = $support;
}
if(count($data) !== 0) include 'view.php';
