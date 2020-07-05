<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'FAQ' );
function FAQ() {
	$arrPostTypes = ['page', 'post', 'blog', 'chemistry', 'products'];

	/*-------------------------- Settings ----------------------------------*/

	/*--------------------------Add fields on posts----------------------------------------*/
	Container::make( 'post_meta', 'FAQ' )
		->show_on_post_type($arrPostTypes)
		->add_fields( array(
			Field::make('text', 'faq_title', 'Заголовок секции FAQ'),
			Field::make( 'complex', 'faq' )
				->add_fields( array(
					Field::make( 'text', 'question', 'Вопрос'),
					Field::make( 'rich_text', 'answer', 'Ответ'),
				)),
		));

	/*--------------------------Add fields on category----------------------------------------*/
	Container::make( 'term_meta', 'FAQ' )
		->where( 'term_taxonomy', '=', 'category' )
		->add_fields( array(
			Field::make('text', 'faq_title', 'Заголовок секции FAQ'),
			Field::make( 'complex', 'faq' )
				->add_fields( array(
					Field::make( 'text', 'question', 'Вопрос'),
					Field::make( 'rich_text', 'answer', 'Ответ'),
				)),
		));
}