<?php
/**
 * Created by PhpStorm.
 * User: Костя
 * Date: 18.05.2020
 * Time: 21:27
 */
$domain = $_SERVER['HTTP_HOST'];
$url = $_SERVER['REQUEST_URI'];
if( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')) $protocol = 'https://';
else $protocol = 'http://';

if(is_amp()) {
	global $AMP_PREFIX;
	$url = array_shift(explode($AMP_PREFIX, $url));
	$link = $protocol.$domain.$url;
	echo "<link rel='canonical' href='{$link}' >";
}
else {
	global $AMP_PREFIX;
	$link = $protocol.$domain.$url.$AMP_PREFIX;
	echo "<link rel='amphtml' href='{$link}' >";
}