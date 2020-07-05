<!doctype html>
    <html lang="ru">
    <head>
      <?php include 'components/meta/dal.php'; ?>
	  <?php include 'components/canonical/dal.php'; ?>
      <?php include 'components/style/index.php'; ?>
    </head>
    <body>
<?php wp_admin_bar_render(); ?>
<header class="header">
        <?php
            if(is_amp()){

            } else {
                include 'components/header/header_row_1.php';
				include 'components/header/header_row_2.php';
				include 'components/header/header_row_3.php';
            }
        ?>
</header>
