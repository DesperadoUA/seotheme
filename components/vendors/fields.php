<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'vendors' );
function vendors() {
	Container::make( 'post_meta', __( 'Компании производители' ) )
		->show_on_page(13)
		->add_fields(array(
			Field::make( 'complex', 'vendors' )
				->add_fields( array(
					Field::make( 'text', 'alt', 'Альт картинки')
						->set_required(true)
						->set_width(50),
					Field::make( 'text', 'title', 'Тайтл картинки')
						->set_required(true)
						->set_width(50),
					Field::make( 'image', 'src', 'Картинка производителя')
						->set_required(true)
						->set_value_type( 'url' )
				)),
		));
}