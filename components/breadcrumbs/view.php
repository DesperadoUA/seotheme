<div class="breadcrumbs">
	<ul itemscope itemtype="http://schema.org/BreadcrumbList">
		<?php
		$strHtml = '';
		$counter = 0;
		foreach ($data_post['breadcrumbs'] as $item) {
			$strHtml .= '<li  itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem" class="breadcrumbs_item">';
			if($item['breadcrumbs_link'] !== '') {
				$strHtml .= "<a 
                   itemprop='item' 
                   href='{$item['breadcrumbs_link']}'>";
			}
			$strHtml .= "<span itemprop='name'>{$item['breadcrumbs_title']}</span>
			<meta itemprop='position' content='{$counter}' />";
			if($item['breadcrumbs_link'] !== '') $strHtml .= '</a>';
			$strHtml .= '</li>';
			$counter++;
		}
		echo $strHtml;
		?>
	</ul>
</div>