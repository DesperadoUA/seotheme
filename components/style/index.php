<style>
<?php
global $ROOT_THEME;
include 'fonts.css';
include 'variables.css';
include 'common.css';
if(wp_is_mobile()){
    include $ROOT_THEME.'/components/header/style.php';
    include $ROOT_THEME.'/components/phone/style.css';
    include $ROOT_THEME.'/components/mail/style.css';
    include $ROOT_THEME.'/components/social/style.css';
    include $ROOT_THEME.'/components/logo/style.css';
    include $ROOT_THEME.'/components/button_order_header/style.css';
    include $ROOT_THEME.'/components/mobile_burger/style.css';
    include $ROOT_THEME.'/components/search/style.css';
    include $ROOT_THEME.'/components/menu/mobile.css';
    include $ROOT_THEME.'/components/content_1/style.css';
    include $ROOT_THEME.'/components/faq/style.css';
    include $ROOT_THEME.'/components/map/style.css';
    include $ROOT_THEME.'/components/footer/style.css';
    include $ROOT_THEME.'/components/text_footer/style.css';
    include $ROOT_THEME.'/components/forms/style.css';
    include $ROOT_THEME.'/components/basket/style.css';
    include $ROOT_THEME.'/components/order/style.css';
    include $ROOT_THEME.'/components/category_card_posts/style.css';
    if(is_front_page()) {
        include $ROOT_THEME.'/components/slider/css/slick.css';
        include $ROOT_THEME.'/components/slider/css/slick-theme.css';
        include $ROOT_THEME.'/components/slider/css/style.css';
        include $ROOT_THEME.'/components/category_card/style.css';
        include $ROOT_THEME.'/components/category_card_2/style.css';
        include $ROOT_THEME.'/components/review_1/style.css';
        include $ROOT_THEME.'/components/vendors/style.css';
    }
    if(is_category()){
        include $ROOT_THEME.'/components/top_page_category/style.css';
        include $ROOT_THEME.'/components/table_characters/style.css';
        include $ROOT_THEME.'/components/category_card_posts/style.css';
        include $ROOT_THEME.'/components/review_2/style.css';
        include $ROOT_THEME.'/components/category_card_blog/style.css';
        include $ROOT_THEME.'/components/video/style.css';
        include $ROOT_THEME.'/components/breadcrumbs/style.css';
    }
    if(is_single()) {
        include $ROOT_THEME.'/components/video/style.css';
        include $ROOT_THEME.'/components/table_characters/style.css';
        include $ROOT_THEME.'/components/category_card_blog/style.css';
        include $ROOT_THEME.'/components/category_card_posts/style.css';
        include $ROOT_THEME.'/components/review_2/style.css';
        include $ROOT_THEME.'/components/top_blog/style.css';
        include $ROOT_THEME.'/components/top_post/style.css';
        include $ROOT_THEME.'/components/post_sell_block/style.css';
        include $ROOT_THEME.'/components/order/style.css';
        include $ROOT_THEME.'/components/breadcrumbs/style.css';
    }
    if(is_page()) {
        include $ROOT_THEME.'/components/order/style.css';
        include $ROOT_THEME.'/components/review_2/style.css';
        include $ROOT_THEME.'/components/top_blog/style.css';
        include $ROOT_THEME.'/components/breadcrumbs/style.css';
    }
    if(is_404()) {
        include $ROOT_THEME.'/components/404/style.css';
    }
}
else {
        include $ROOT_THEME.'/components/header/style.php';
        include $ROOT_THEME.'/components/phone/style.css';
        include $ROOT_THEME.'/components/button_order_header/style.css';
        include $ROOT_THEME.'/components/mail/style.css';
        include $ROOT_THEME.'/components/social/style.css';
        include $ROOT_THEME.'/components/search/style.css';
        include $ROOT_THEME.'/components/menu/style.css';
        include $ROOT_THEME.'/components/content_1/style.css';
        include $ROOT_THEME.'/components/faq/style.css';
        include $ROOT_THEME.'/components/footer/style.css';
        include $ROOT_THEME.'/components/text_footer/style.css';
        include $ROOT_THEME.'/components/map/style.css';
        include $ROOT_THEME.'/components/video/style.css';
        include $ROOT_THEME.'/components/forms/style.css';
        include $ROOT_THEME.'/components/basket/style.css';
        include $ROOT_THEME.'/components/category_card_posts/style.css';
    if(is_front_page()) {
        include $ROOT_THEME.'/components/slider/css/slick.css';
        include $ROOT_THEME.'/components/slider/css/slick-theme.css';
        include $ROOT_THEME.'/components/slider/css/style.css';
        include $ROOT_THEME.'/components/category_card/style.css';
        include $ROOT_THEME.'/components/category_card_2/style.css';
        include $ROOT_THEME.'/components/review_1/style.css';
        include $ROOT_THEME.'/components/vendors/style.css';
    }
    if(is_category()) {
        include $ROOT_THEME.'/components/top_page_category/style.css';
        include $ROOT_THEME.'/components/table_characters/style.css';
        include $ROOT_THEME.'/components/review_2/style.css';
        include $ROOT_THEME.'/components/category_card_blog/style.css';
        include $ROOT_THEME.'/components/breadcrumbs/style.css';
    }
    if(is_single()) {
        include $ROOT_THEME.'/components/review_2/style.css';
        include $ROOT_THEME.'/components/top_post/style.css';
        include $ROOT_THEME.'/components/post_sell_block/style.css';
        include $ROOT_THEME.'/components/table_characters/style.css';
        include $ROOT_THEME.'/components/top_blog/style.css';
        include $ROOT_THEME.'/components/category_card_blog/style.css';
        include $ROOT_THEME.'/components/breadcrumbs/style.css';
    }
    if(is_page()) {
        include $ROOT_THEME.'/components/order/style.css';
        include $ROOT_THEME.'/components/review_2/style.css';
        include $ROOT_THEME.'/components/top_blog/style.css';
        include $ROOT_THEME.'/components/breadcrumbs/style.css';
    }
    if(is_404()) {
     include $ROOT_THEME.'/components/404/style.css';
    }
}
?>
</style>

