<div class="post_sell_block">
	<div class="post_sell_block_rating"
         itemprop="aggregateRating"
         itemscope
         itemtype="http://schema.org/AggregateRating">
		<div class="post_sell_block_rating_title">Рейтинг:</div>
		<div class='card_rating'>
			<div class='rating'></div>
			<div style='width:<?= $data['rating']; ?>px' class='rating_hover'></div>
		</div>
        <div class="post_sell_block_rating_count">
            <span itemprop="ratingValue">4</span>/5
            основан на <span itemprop="reviewCount"><?= $data['rating_count']; ?></span> оценках
        </div>
	</div>
	<div class="post_sell_block_vendor"><?= $data['vendor']; ?></div>
    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <div class="post_sell_block_price">Цена:
            <span itemprop="price" content="<?= $data['price']; ?>"><?= $data['price']; ?></span>
            <span itemprop="priceCurrency" content="UAH"><?= $EXCHENG; ?></span></div>
    </div>
	<div class="post_sell_block_button">
		<button class="btn_basket order" data-order-id="<?= $data['id']; ?>">В корзину</button>
		<button class="btn_callback pop_up_activate" data-type="call_back">Заказать звонок</button>
	</div>

</div>