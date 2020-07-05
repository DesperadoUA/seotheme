<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'review_1' );
function review_1() {
	Container::make( 'post_meta', __( 'Отзывы на главной странице' ) )
		->show_on_page(13)
		->add_fields(array(
			Field::make( 'complex', 'review_1' )
				->add_fields( array(
					Field::make( 'rich_text', 'review_text', 'Текст отзыва'),
					Field::make( 'text', 'review_name', 'Имя'),
					Field::make( 'image', 'review_img', 'Картинка отзыва')
						->set_required(true)
						->set_value_type( 'url' )
				)),
		));
}