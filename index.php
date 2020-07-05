<?php get_header(); ?>
<div class="container">
    <h1>Webpack WP</h1>
    <?php
        if(is_single()) echo "Single";
        elseif(is_category()) echo "Category";
        elseif(is_page()) echo "Page";
        elseif(is_front_page()) echo "Front";
	global $wp_query;
	var_dump($wp_query);
	echo $wp_query->post->ID;
        echo get_post_type();
    ?>
</div>
<div class="faq_close"></div>
<div class="card"></div>
<?php get_footer(); ?>
