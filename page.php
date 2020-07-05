<?php get_header(); ?>
<main>
    <article>
        <div class="container text_section top_blog">
			<?php include 'components/top_blog/dal.php'; ?>
			<?php include  'components/video/dal.php'; ?>
			<?php include  'components/content_2/dal.php'; ?>
        </div>
		<?php include 'components/faq/dal.php'; ?>
    </article>
</main>
<?php get_footer(); ?>
