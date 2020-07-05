<?php
$data = [];
$data['src'] = carbon_get_theme_option( 'mail_image' );
$data['mail'] = carbon_get_theme_option( 'mail' );

if($data['mail'] !== '') include 'view.php';