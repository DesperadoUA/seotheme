<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	Container::make( 'theme_options', __( 'Мои настройки' ) )
		->add_fields(array(
			Field::make('checkbox', 'shop', 'Отображать как магазин'),
			Field::make('text', 'text_footer', 'Текст в футере'),
			Field::make('text', 'excheng', 'Валюта')
			));
}