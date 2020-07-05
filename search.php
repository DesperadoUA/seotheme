<?php include $_SERVER['DOCUMENT_ROOT'].'/wp-config.php'; ?>
<?php  get_header(); ?>
	<main>
		<article>
			<div class="container padding_top_category">
				<h1>Результаты поиска</h1>
			</div>
			<?php include 'components/search/dal.php'; ?>
		</article>
	</main>
<?php  get_footer(); ?>