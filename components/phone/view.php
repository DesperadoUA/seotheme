<ul class="header_phone">
	<?php
	  foreach ($data['phone'] as $item)
	  	echo "<li><a herf='tel:{$item['phone']}'>{$item['phone']}</a></li>";
	?>
</ul>