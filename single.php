<?php get_header(); ?>
<main>
	<article>
		<div class="container">
            <?php include 'components/top_post/view.php'; ?>
			<?php include  'components/content_1/dal.php'; ?>
        </div>
		<?php include  'components/relative_products/dal.php'; ?>
        <div class="container">
			<?php include  'components/video/dal.php'; ?>
			<?php include  'components/content_2/dal.php'; ?>
        </div>
		<?php include  'components/faq/dal.php'; ?>
		<?php include 'components/review_2/dal.php'; ?>
	</article>
</main>
<?php get_footer(); ?>
