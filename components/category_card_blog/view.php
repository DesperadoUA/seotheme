<div class="section_blog <?= $settings['class']; ?>">
	<div class="container container_blog category_card_row">
		<?php
			foreach ($data as $item) {
				echo "<div class='container_blog_item'>
						<div class='blog_item_card'>
							<div class='blog_item_card_thumbnail'>
								<img src='{$PATH_LAZY_LOAD}' data-src='{$item['src']}'>
							</div>
							<div class='blog_item_card_desc'>
								<div class='blog_item_card_title'>
									<a href='{$item['permalink']}'>{$item['post_title']}</a>
								</div>
								<div class='blog_item_card_preview'>
									<p>{$item['description']}</p>
								</div>
								<div class='blog_item_card_read_more'>
									<a href='{$item['permalink']}'>Подробнее</a>
								</div>
							</div>
						</div>
					</div>";
			}
		?>
	</div>
		<?php
		if(is_category()) {
			if($settings['total'] > $settings['offset']) {
				echo "<div class='show_more'>
                     <button class='btn_load_more load_more' 
                        data-total = '{$settings['total']}' 
                        data-offset = '{$settings['offset']}'
                        data-post-type = '{$settings['post_type']}' 
                        data-category = '{$settings['cid']}'
                        data-host = '{$settings['domain']}'
                     >Показать еще</button>
                  </div>";
			}
		}
		?>
</div>