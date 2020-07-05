<?php
/**
 * Created by PhpStorm.
 * User: Костя
 * Date: 20.05.2020
 * Time: 22:06
 */
$data = [];
$data['src'] = carbon_get_theme_option( 'logo' );
if($data['src'] !== '') include 'view.php';
