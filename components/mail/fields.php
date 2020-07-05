<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'add_mail' );
function add_mail() {
	Container::make( 'theme_options', __( 'Почта' ) )
		->set_page_parent('crb_carbon_fields_container.php')
		->add_fields(array(
			Field::make('text', 'mail', 'E-mail')
				->set_width(50),
			Field::make('image', 'mail_image', '20x20')
				->set_width(50)
				->set_value_type( 'url' )
		));
}