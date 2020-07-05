<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'relative_products' );
function relative_products() {
	$arrPostTypes = ['chemistry', 'products'];
	$ID_CATEGORY_SEEDS = 4;
	$posts = get_posts( array(
		'numberposts' => -1,
		'category'    => $ID_CATEGORY_SEEDS,
		'orderby'     => 'date',
		'order'       => 'DESC',
		'include'     => array(),
		'exclude'     => array(),
		'meta_key'    => '',
		'meta_value'  =>'',
		'post_type'   => 'products',
		'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
	) );

	$data = [];
	foreach ($posts as $item) $data[$item->ID] = $item->post_title;
	/*--------------------------Add fields on posts----------------------------------------*/
	Container::make( 'post_meta', __( 'Схожие товары' ) )
		->show_on_post_type($arrPostTypes)
		->add_fields(array(
			Field::make('multiselect', 'relative_products', 'Список постов')
				->add_options($data)
		));
}