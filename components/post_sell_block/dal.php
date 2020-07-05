<?php
$data = [];
global $post;
$post_id = $post->ID;
$data['id'] = $post_id;
$data['rating'] = carbon_get_post_meta( $post_id, 'desc_card_rating' );
$data['rating'] *= 20;
$data['vendor'] = carbon_get_post_meta( $post_id, 'desc_card_firm' );
$data['price'] = carbon_get_post_meta( $post_id, 'desc_card_price' );
$data['rating_count'] =  carbon_get_post_meta( $post_id, 'desc_card_rating_count' );
$EXCHENG = carbon_get_theme_option( 'excheng' );
include 'view.php';