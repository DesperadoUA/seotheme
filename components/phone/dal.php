<?php
/**
 * Created by PhpStorm.
 * User: Костя
 * Date: 19.05.2020
 * Time: 21:02
 */
$data = [];
$data['phone'] = carbon_get_theme_option( 'phone' );

if(count($data['phone']) !== 0)include 'view.php';