<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'thumbnail' );
function thumbnail() {

	/*--------------------------Add fields on posts----------------------------------------*/
	Container::make( 'post_meta', __( 'Превью' ) )
		->add_fields(array(
			Field::make('text', 'alt_thumbnail', 'Alt')
				->set_required(true),
			Field::make('text', 'title_thumbnail', 'Title'),
			Field::make('image', 'src_thumbnail', 'Картинка 300х200')
				->set_required(true)
				->set_value_type( 'url' )
		));

	/*--------------------------Add fields on category----------------------------------------*/
	Container::make( 'term_meta', __( 'Превью' ) )
		->where( 'term_taxonomy', '=', 'category' )
		->add_fields(array(
			Field::make('text', 'alt_thumbnail', 'Alt')
				->set_required(true),
			Field::make('text', 'title_thumbnail', 'Title')
				->set_required(true),
			Field::make('image', 'src_thumbnail', 'Картинка 300х200')
				->set_required(true)
				->set_value_type( 'url' )
		));
}