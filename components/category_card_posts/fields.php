<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'desc_card' );
function desc_card() {
	$arrPostTypes = ['chemistry', 'products'];
	$ID_CATEGORY_VENDORS = 26;
	$categories = get_term_children( $ID_CATEGORY_VENDORS, 'category');
	$cat = [];
	for($i=0; $i<count($categories); $i++) {
		$name = get_cat_name($categories[$i]);
		$cat[$name] = $name;
	}
	/*--------------------------Add fields on posts----------------------------------------*/
	Container::make( 'post_meta', __( 'Описание товара' ) )
		->show_on_post_type($arrPostTypes)
		->add_fields(array(
			Field::make('text', 'desc_card_rating', 'Рейтинг')
				->set_required(true)
				->set_width(50),
			Field::make('text', 'desc_card_description', 'Описание')
				->set_required(true)
				->set_width(50),
			Field::make('text', 'desc_card_price', 'Стоимость')
				->set_required(true)
				->set_width(50),
			Field::make('select', 'desc_card_firm', 'Производитель')
				->add_options($cat)
				->set_width(50),
			Field::make('text', 'desc_card_rating_count', 'Количество отзывов')
				->set_width(50),
		));
}