<?php get_header(); ?>
<main>
    <article>
        <div class="container">
            <?php include 'components/top_page_category/view.php'; ?>
            <?php include 'components/content_1/dal.php'; ?>
			<?php include 'components/video/dal.php'; ?>
        </div>
		<?php include 'components/category_card_posts/dal.php'; ?>
        <div class="container">
			<?php include 'components/content_2/dal.php'; ?>
			<?php include 'components/faq/dal.php'; ?>
        </div>
        <?php include 'components/review_2/dal.php'; ?>
    </article>
</main>
<?php get_footer(); ?>
