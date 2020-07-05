<section class="category_wrapper">
	<div class="category_row_title">Категории семян</div>
	<div class="container category_row">
		<?php
			foreach ($data as $item) {
				echo "<div class='card'>
						<div class='imgBx' data-text='{$item['post_title']}'>
							<img src='{$PATH_LAZY_LOAD}' data-src='{$item['thumbnail']}'>
						</div>
						<div class='content'>
							<a href='{$item['permalink']}' class='card_permalink'>{$item['post_title']}</a>
							<p class='card_desc'>{$item['description']}</p>
							<a href='{$item['permalink']}' class='read_more'>Подробнее</a>
						</div>
					</div>";
			}
		?>
	</div>
</section>