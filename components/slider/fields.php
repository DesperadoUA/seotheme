<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'add_slides' );
function add_slides() {
	Container::make( 'theme_options', __( 'Slides' ) )
		->set_page_parent('crb_carbon_fields_container.php')
		->add_fields(array(
			Field::make( 'complex', 'slider_home' )
				->add_fields( array(
					Field::make('text', 'text_slide', 'Текст на слайдере')
						->set_width(50),
					Field::make('text', 'link_slide', 'Ссылка на слайдере')
						->set_width(50),
					Field::make('text', 'alt_slide', 'Alt картинки')
						->set_width(50),
					Field::make('text', 'title_slide', 'Title картинки')
						->set_width(50),
					Field::make('image', 'img_slide', 'Картинка на десктопе')
						->set_width(50)
				        ->set_value_type( 'url' ),
					Field::make('image', 'img_slide_amp', 'Картинка на мобильном')
						->set_width(50)
						->set_value_type( 'url' )
				))
		));
}