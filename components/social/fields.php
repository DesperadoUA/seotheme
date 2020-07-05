<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'add_social' );
function add_social() {
	Container::make( 'theme_options', __( 'Соцсети' ) )
		->set_page_parent('crb_carbon_fields_container.php')
		->add_fields(array(
			Field::make('text', 'skype', 'Skype')
				->set_width(50),
			Field::make('text', 'viber', 'Viber')
				->set_width(50),
			Field::make('text', 'fb', 'Fb')
				->set_width(50),
			Field::make('text', 'telega', 'Telega')
				->set_width(50)
		));
}