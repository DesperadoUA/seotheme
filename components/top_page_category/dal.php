<?php
$data = [];
$obj_data = get_queried_object();
$cid = $obj_data->term_id;
$data['src'] = carbon_get_term_meta( $cid, 'desc_img' );
include 'view.php';