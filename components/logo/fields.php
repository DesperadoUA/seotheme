<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'add_logo' );
function add_logo() {
	Container::make( 'theme_options', __( 'Настройки логотипа' ) )
		->set_page_parent('crb_carbon_fields_container.php')
		->add_fields(array(
			Field::make('image', 'logo', 'Logo')
				->set_value_type( 'url' ),
		));
}