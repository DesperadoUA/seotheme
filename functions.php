<?php
/* Add Carbon fields */
include 'inc/carbon_fields/options.php';
include 'components/slider/fields.php';
include 'components/meta/fields.php';
include 'components/thumbnail/fields.php';
include 'components/breadcrumbs/fields.php';
include 'components/table_characters/fields.php';
include 'components/content_1/fields.php';
include 'components/video/fields.php';
include 'components/content_2/fields.php';
include 'components/logo/fields.php';
include 'components/phone/fields.php';
include 'components/gtm/fields.php';
include 'components/faq/fields.php';
include 'components/mail/fields.php';
include 'components/social/fields.php';
include 'components/category_card/fields.php';
include 'components/review_1/fields.php';
include 'components/review_2/fields.php';
include 'components/vendors/fields.php';
include 'components/map/fields.php';
include 'components/category_card_posts/fields.php';
include 'components/relative_products/fields.php';
include 'components/relative_blog/fields.php';
include 'components/forms/fields.php';


/* Add post types */
include 'inc/post_types/blog.php';
include 'inc/post_types/chemistry.php';
include 'inc/post_types/products.php';

/* Add post thumbnail */
add_theme_support( 'post-thumbnails' );
add_theme_support('menus');

$AMP_PREFIX = '?amp';
$ROOT_THEME = $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/myWorld/';
$PATH_THEME = '/wp-content/themes/myWorld/';
$PATH_LAZY_LOAD = '/wp-content/themes/myWorld/components/lazy_load/img/lazy-load.jpg';

function is_amp(){
	global $AMP_PREFIX;
	$url = $_SERVER['REQUEST_URI'];
	$result = strpos($url, $AMP_PREFIX);
	if($result !== false) $result = true;
	return $result;
}
