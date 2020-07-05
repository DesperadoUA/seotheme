<section class="category_wrapper_2">
    <div class="category_row_title_2">Удобрения и средства защиты</div>
    <div class="container category_row_2">
		<?php
		foreach ($data as $item) {
			echo "<div class='card_2'>
                    <div class='face face_1'>
                        <div class='content'>
                            <img src='{$PATH_LAZY_LOAD}' data-src='{$item['thumbnail']}'>
                            <p class='card_2_title'>{$item['post_title']}</p>
                        </div>
                    </div>
                    <div class='face face_2'>
                        <div class='content'>
                            <p class='card_2_desc'>
                                {$item['description']}
                            </p>
                            <a href='{$item['permalink']}' class='card_2_read_more'>Подробнее</a>
                        </div>
                    </div>
                </div>";
		}
		?>
    </div>
</section>