<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'Video' );
function Video() {
	$arrPostTypes = ['page', 'post', 'blog', 'chemistry', 'products'];

	/*-------------------------- Settings ----------------------------------*/

	/*--------------------------Add fields on posts----------------------------------------*/
	Container::make( 'post_meta', 'Video' )
		->show_on_post_type($arrPostTypes)
		->add_fields( array(
			Field::make('text', 'video_title', 'Заголовок к видео'),
			Field::make('text', 'video_cod', 'Ссылка iframe с YouTube'),
		));

	/*--------------------------Add fields on category----------------------------------------*/
	Container::make( 'term_meta', 'Video' )
		->where( 'term_taxonomy', '=', 'category' )
		->add_fields( array(
			Field::make('text', 'video_title', 'Заголовок к видео'),
			Field::make('text', 'video_cod', 'Ссылка iframe с YouTube'),
		));
}