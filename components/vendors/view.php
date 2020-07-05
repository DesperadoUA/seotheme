<section class="vendors">
	<div class="vendors_title">Компании производители</div>
	<div class="container vendors_row">
		<?php
			foreach ($data as $item) {
				echo "<div class='vendors_item'>
						<img src='{$PATH_LAZY_LOAD}' data-src='{$item['src']}' alt='{$item['alt']}' title='{$item['title']}'>
					  </div>";
			}
		?>
	</div>
</section>