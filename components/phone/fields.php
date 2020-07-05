<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'add_phone' );
function add_phone() {
	Container::make( 'theme_options', __( 'Номера телефонов' ) )
		->set_page_parent('crb_carbon_fields_container.php')
		->add_fields(array(
			Field::make( 'complex', 'phone' )
				->add_fields( array(
					Field::make( 'text', 'phone', 'Телефоны'),
				)),
		));
}