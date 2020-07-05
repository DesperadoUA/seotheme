<?php
$data = [];
$data['map'] = carbon_get_theme_option( 'map' );
if($data['map'] !== '') include 'view.php';