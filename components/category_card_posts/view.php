<section class="category_card">
	<div class="container category_card_row">
			<?php
				foreach ($data as $item) {
					echo "<div class='card'>
							<div class='card_wrapper'>
								<div>
								    <img data-src='{$item['src']}' src='{$PATH_LAZY_LOAD}' class='card_thumbnail'>
								</div>
								<div class='card_desc'>
									<div class='card_title'>
									  <a href='{$item['permalink']}'>{$item['post_title']}</a>
									</div>
									<div class='card_wrapper_rating'>
										<div class='card_rating'>
											<div class='rating'></div>
											<div style='width:{$item['rating']}px' class='rating_hover'></div>
										</div>
										<div class='card_vendor'>{$item['vendor']}</div>
									</div>
									<div class='card_description'>
										{$item['description']}
									</div>
								</div>
								<div class='card_price'>
									<div class='card_price_item'>
									  {$item['price']} {$EXCHENG}
									</div>
									<div class='card_price_item order' data-order-id='{$item['id']}'>
									  В корзину
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
</section>