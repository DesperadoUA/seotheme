<?php get_header(); ?>
<main>
	<?php
		include 'components/slider/dal.php';
	?>
    <article>
        <div class="container">
        <?php
         include 'components/h1/dal.php';
         include 'components/content_1/dal.php';
         ?>
        </div>
        <?php include 'components/category_card/dal.php'; ?>
        <div class="container">
        <?php include 'components/content_2/dal.php'; ?>
        </div>
        <?php include 'components/category_card_2/dal.php'; ?>
		<?php include 'components/faq/dal.php'; ?>
		<?php include 'components/review_1/dal.php'; ?>
		<?php include 'components/vendors/dal.php'; ?>
    </article>
</main>
<?php get_footer(); ?>
