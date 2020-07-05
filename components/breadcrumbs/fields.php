<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'Breadcrumbs' );
function Breadcrumbs() {
	$arrPostTypes = ['page', 'post', 'blog', 'chemistry', 'products'];

	/*-------------------------- Settings ----------------------------------*/

	/*--------------------------Add fields on posts----------------------------------------*/
	Container::make( 'post_meta', 'Breadcrumbs' )
		->show_on_post_type($arrPostTypes)
		->add_fields( array(
			Field::make( 'complex', 'breadcrumbs' )
				->add_fields( array(
					Field::make( 'text', 'breadcrumbs_link', 'Ссылка')
						->set_width(50),
					Field::make( 'text', 'breadcrumbs_title', 'Текст')
						->set_width(50),
				)),
		));

	/*--------------------------Add fields on category----------------------------------------*/
	Container::make( 'term_meta', 'Breadcrumbs' )
		->where( 'term_taxonomy', '=', 'category' )
		->add_fields( array(
			Field::make( 'complex', 'breadcrumbs' )
				->add_fields( array(
					Field::make( 'text', 'breadcrumbs_link', 'Ссылка')
						->set_width(50),
					Field::make( 'text', 'breadcrumbs_title', 'Текст')
						->set_width(50),
				)),
		));
}