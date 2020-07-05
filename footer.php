<?php include 'components/map/dal.php'; ?>
<footer class="footer">
    <div class="container">
        <?php include 'components/text_footer/dal.php'; ?>
    </div>
    <?php include 'components/forms/call_back.php'?>
	<?php include 'components/basket/view.php'?>
</footer>
<?php wp_footer() ?>
<script type='text/javascript' src="/wp-content/themes/myWorld/dist/bundle.js"></script>
<?php
    if(is_front_page()){
        echo "<script type='text/javascript' src='/wp-content/themes/myWorld/components/slider/js/slick.js'></script>";
        echo "<script type='text/javascript' src='/wp-content/themes/myWorld/components/slider/js/js.js'></script>";
    }
?>
</body>
</html>