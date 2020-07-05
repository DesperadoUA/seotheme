<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'add_content_1' );
function add_content_1() {
	$arrPostTypes = ['page', 'post', 'blog', 'chemistry', 'products'];

	/*--------------------------Settings----------------------------------------*/

	/*--------------------------Add fields on posts----------------------------------------*/
	Container::make( 'post_meta', __( 'Контент 1' ) )
		->show_on_post_type($arrPostTypes)
		->add_tab( __('Контент 1'), array(
			Field::make( 'rich_text', 'content_1', 'Контент 1' ),
		) )
		->add_tab( __('Контент AMP'), array(
			Field::make( 'rich_text', 'content_1_amp', 'Контент 1 AMP' ),
		) );

	/*--------------------------Add fields on category----------------------------------------*/
	Container::make( 'term_meta', __( 'Контент 1' ) )
		->where( 'term_taxonomy', '=', 'category' )
		->add_tab( __('Контент 1'), array(
			Field::make( 'rich_text', 'content_1', 'Контент 1' ),
		) )
		->add_tab( __('Контент AMP'), array(
			Field::make( 'rich_text', 'content_1_amp', 'Контент 1 AMP' ),
		) );
}