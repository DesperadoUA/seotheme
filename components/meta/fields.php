<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'meta' );
function meta() {

	/*--------------------------Add fields on posts----------------------------------------*/
	Container::make( 'post_meta', __( 'Метаданные' ) )
		->add_fields(array(
			Field::make('text', 'title', 'Title')
				->set_required(true),
			Field::make('text', 'description', 'Description')
				->set_required(true),
			Field::make('text', 'keywords', 'Keywords'),
			Field::make('text', 'h1', 'H1')
				->set_required(true),
		));

	/*--------------------------Add fields on category----------------------------------------*/
	Container::make( 'term_meta', __( 'Метаданные' ) )
		->where( 'term_taxonomy', '=', 'category' )
		->add_fields(array(
			Field::make('text', 'title', 'Title')
				->set_required(true),
			Field::make('text', 'description', 'Description')
				->set_required(true),
			Field::make('text', 'keywords', 'Keywords'),
			Field::make('text', 'h1', 'H1')
				->set_required(true),
		));
}