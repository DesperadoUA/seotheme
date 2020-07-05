<?php
$data = [];
$data = carbon_get_theme_option( 'slider_home' );
if(count($data) !== 0 and !wp_is_mobile()) include 'view.php';