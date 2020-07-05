<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'description_category' );
function description_category() {
	/*--------------------------Add fields on category----------------------------------------*/
	Container::make( 'term_meta', __( 'Описание категории' ) )
		->where( 'term_taxonomy', '=', 'category' )
		->add_fields(array(
			Field::make('text', 'desc_title', 'Название')
				->set_required(true),
			Field::make('text', 'desc_description', 'Описание')
				->set_required(true),
			Field::make('text', 'desc_link', 'Ссылка'),
			Field::make('image', 'desc_img', 'Картинка 300х200')
				->set_required(true)
				->set_value_type( 'url' )
		));
}