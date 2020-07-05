<ul class="menu">
<?php
$strHtml = '';
for($i=0; $i<count($data); $i++){
	$strHtml .= "<li class='menu_item";
	if(count($data[$i]['children']) !== 0) $strHtml .= ' drop_item';
	$strHtml .= "'>
                    <a href='{$data[$i]['url']}' 
                    class='menu_link'>{$data[$i]['menu_title']}</a>";
		if(count($data[$i]['children']) !== 0) {
			$strHtml .= "<div class='drop_menu'><ul>";
			foreach ($data[$i]['children'] as $item) {
				$strHtml .= "<li class='drop_menu_item'>
                                <a href='{$item['url']}' class='drop_menu_link'>{$item['menu_title']}</a>
                             </li>";
			}
			$strHtml .= "</ul></div>";
		}
	$srtHtml .= "</li>";
}
echo $strHtml;
?>
</ul>