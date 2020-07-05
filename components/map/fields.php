<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'map' );
function map() {
	Container::make( 'theme_options', __( 'Карта' ) )
		->set_page_parent('crb_carbon_fields_container.php')
		->add_fields(array(
			Field::make('textarea', 'map', 'Карта')
		));
}