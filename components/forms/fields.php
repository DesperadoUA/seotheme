<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'site_forms' );
function site_forms() {
	Container::make( 'theme_options', __( 'Формы сайта' ) )
		->set_page_parent('crb_carbon_fields_container.php')
		->add_fields(array(
			Field::make('text', 'call_back', 'Заказать звонок'),
			Field::make('text', 'order', 'Форма заказа')
		));
}