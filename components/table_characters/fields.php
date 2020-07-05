<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'table_characters' );
function table_characters() {
	$arrPostTypes = ['page', 'post', 'chemistry', 'products'];

	/*-------------------------- Settings ----------------------------------*/

	/*--------------------------Add fields on posts----------------------------------------*/
	Container::make( 'post_meta', 'Таблица характеристик' )
		->show_on_post_type($arrPostTypes)
		->add_fields( array(
			Field::make( 'complex', 'table_characters' )
				->add_fields( array(
					Field::make( 'text', 'characters_1', 'Описание характеристики')
						->set_width(50),
					Field::make( 'text', 'characters_2', 'Значение характеристики')
						->set_width(50),
				)),
		));

	Container::make( 'term_meta', __( 'Превью' ) )
		->where( 'term_taxonomy', '=', 'category' )
		->add_fields( array(
			Field::make( 'complex', 'table_characters' )
				->add_fields( array(
					Field::make( 'text', 'characters_1', 'Описание характеристики')
						->set_width(50),
					Field::make( 'text', 'characters_2', 'Значение характеристики')
						->set_width(50),
				)),
		));
}