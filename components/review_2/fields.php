<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'review_2' );
function review_2() {
	Container::make( 'term_meta', __( 'Отзывы' ) )
		->where( 'term_taxonomy', '=', 'category' )
		->add_fields(array(
			Field::make( 'complex', 'review_2' )
				->add_fields( array(
					Field::make( 'text', 'review_2_name', 'Имя')
						->set_required(true)
						->set_width(50),
					Field::make( 'text', 'review_2_data', 'Дата')
						->set_required(true)
						->set_width(50),
					Field::make( 'rich_text', 'review_2_text', 'Текст отзыва')
						->set_required(true),
				)),
		));
}