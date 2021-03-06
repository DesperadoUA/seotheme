<?php
/**
 * Created by PhpStorm.
 * User: Костя
 * Date: 16.05.2020
 * Time: 23:10
 */

add_action( 'init', 'register_post_types_chemistry' );
function register_post_types_chemistry(){
	register_post_type( 'chemistry', [
		'label'  => null,
		'labels' => [
			'name'               => 'Chemistry', // основное название для типа записи
			'singular_name'      => 'Chemistry', // название для одной записи этого типа
			'add_new'            => 'Добавить статью', // для добавления новой записи
			'add_new_item'       => 'Добавление статьи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование статьи', // для редактирования типа записи
			'new_item'           => 'Новоя статья', // текст новой записи
			'view_item'          => 'Смотреть страницу', // для просмотра записи этого типа.
			'search_items'       => 'Искать запись', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Удобрения', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-sos',
		'hierarchical'        => false,
		'supports'            => [ 'title','thumbnail','excerpt','comments','revisions','page-attributes','post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( 'category' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}