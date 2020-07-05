<?php
/**
 * Created by PhpStorm.
 * User: Костя
 * Date: 20.05.2020
 * Time: 20:50
 */
$data = [];
if(carbon_get_theme_option( 'skype' ) !== '') $data['skype'] = carbon_get_theme_option( 'skype' );
if(carbon_get_theme_option( 'viber' ) !== '') $data['viber'] = carbon_get_theme_option( 'viber' );
if(carbon_get_theme_option( 'fb' ) !== '') $data['fb'] = carbon_get_theme_option( 'fb' );
if(carbon_get_theme_option( 'telega' ) !== '') $data['telega'] = carbon_get_theme_option( 'telega' );
if(count($data) !==0) include 'view.php';