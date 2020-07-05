<section class="review_1">
	<div class="review_1_title">Отзывы покупателей</div>
	<div class="container review_1_row">
		<?php
			foreach ($data['review'] as $item) {
				echo "<div class='review_1_item'>
						<div class='review_card'>
							<div class='review_1_content'>
								<img src='{$PATH_LAZY_LOAD}' data-src='{$item['review_img']}' class='review_1_img'>
								<div class='review_1_name'>{$item['review_name']}</div>
								<div class='review_1_desc'>{$item['review_text']}</div>
							</div>
						</div>
					</div>";
			}
		?>
	</div>
</section>