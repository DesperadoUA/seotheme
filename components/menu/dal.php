<?php
$data = [];
$children_menu = [];
$menu = wp_get_nav_menu_items('nav_menu');
if(count($menu) !== 0) {
	foreach ($menu as $item) {
		if($item->menu_item_parent === '0') {
			$support['id'] = $item->ID;
			$support['menu_title'] = $item->post_title;
			$support['url'] = $item->url;
			$support['children'] = [];
			$data[] = $support;
		}
	}
	foreach ($data as $item_parent) {
		foreach ($menu as $item) {
			if($item_parent['id'] == $item->menu_item_parent) {
				$support['id'] = $item->menu_item_parent;
				$support['menu_title'] = $item->post_title;
				$support['url'] = $item->url;
				$children_menu[] = $support;
			}
		}
	}
	$support = '';
	if(count($children_menu) !== 0){
		for($i=0; $i<count($data); $i++){
			for($j=0; $j<count($children_menu); $j++){
				if($children_menu[$j]['id'] == $data[$i]['id']){
					$support['menu_title'] = $children_menu[$j]['menu_title'];
					$support['url'] = $children_menu[$j]['url'];
					$data[$i]['children'][] = $support;
				}
			}
		}
	}
}
if(count($menu) !== 0)include 'view.php';

