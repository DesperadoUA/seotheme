<?php
$data = [];
global $post;
$post_id = $post->ID;
$data['content'] =  carbon_get_post_meta( $post_id, 'content_1' );
$data['h1'] =  carbon_get_post_meta( $post_id, 'h1' );
$data['alt'] =  carbon_get_post_meta( $post_id, 'alt_thumbnail' );
$data['title'] =  carbon_get_post_meta( $post_id, 'title_thumbnail' );
$data['src'] =  carbon_get_post_meta( $post_id, 'src_thumbnail' );
include 'view.php';