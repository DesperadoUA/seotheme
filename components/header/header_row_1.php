<div class="header_row_1">
    <div class="container header_row_1_wrapper">
    <?php
        global $ROOT_THEME;
        include $ROOT_THEME.'components/phone/dal.php';
        include $ROOT_THEME.'components/mail/dal.php';
	    include $ROOT_THEME.'components/social/dal.php';
	    if(wp_is_mobile()) include $ROOT_THEME.'components/logo/dal.php';
	    include $ROOT_THEME.'components/button_order_header/view.php';
	    if(wp_is_mobile()) include $ROOT_THEME.'components/mobile_burger/view.php';
    ?>
    </div>
</div>