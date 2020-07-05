<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'add_content_2' );
function add_content_2() {

	$arrPostTypes = ['page', 'post', 'blog', 'chemistry', 'products'];

	/*--------------------------Settings----------------------------------------*/

	/*--------------------------Add fields on posts----------------------------------------*/

	Container::make( 'post_meta', __( 'Контент 2' ) )
		->show_on_post_type($arrPostTypes)
		->add_tab( __('Контент 2'), array(
			Field::make( 'rich_text', 'content_2', 'Контент 2' ),
		) )
		->add_tab( __('Контент AMP'), array(
			Field::make( 'rich_text', 'content_2_amp', 'Контент 2 AMP' ),
		) );

	/*--------------------------Add fields on category----------------------------------------*/

	Container::make( 'term_meta', __( 'Контент 2' ) )
		->where( 'term_taxonomy', '=', 'category' )
		->add_tab( __('Контент 2'), array(
			Field::make( 'rich_text', 'content_2', 'Контент 2' ),
		) )
		->add_tab( __('Контент AMP'), array(
			Field::make( 'rich_text', 'content_2_amp', 'Контент 2 AMP' ),
		) );
}