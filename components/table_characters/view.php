<table class="table_characters">
	<caption class="table_header">Таблица характеристик товаров</caption>
	<tr class="table_row">
		<th class="table_item">Характеристика</th>
		<th class="table_item">Описание</th>
	</tr>
	<?php
		foreach ($data as $item) {
			echo "<tr class='table_row'>
					<td class='table_item'>{$item['characters_1']}</td>
					<td class='table_item'>{$item['characters_2']}</td>
				 </tr>";
		}
	?>
</table>