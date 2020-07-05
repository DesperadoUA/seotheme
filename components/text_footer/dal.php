<?php
$data = '';
$data['text'] = carbon_get_theme_option( 'text_footer' );
if($data['text'] !== '')include 'view.php';