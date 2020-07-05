<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'add_gtm' );
function add_gtm() {
	Container::make( 'theme_options', __( 'Код GTM' ) )
		->set_page_parent('crb_carbon_fields_container.php')
		->add_fields(array(
			Field::make('textarea', 'gtm_head', 'GTM head')
				->set_width(50),
			Field::make('textarea', 'gtm_body', 'GTM body')
				->set_width(50),
		));
}