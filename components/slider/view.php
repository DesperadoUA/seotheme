<?php
/**
 * Created by PhpStorm.
 * User: Костя
 * Date: 23.05.2020
 * Time: 20:13
 */
echo "<div class='slider_wrapper'>
          <div class='arrow_left'>&#8249;</div>
          <div class='arrow_right'>&#8250;</div>
          <div class='main_slider'>";
foreach ($data as $slide) {
	$strHTML = '';
	$strHTML .= "<div class='slider_item'>";
	$strHTML .= "<div class='container slider_text'>{$slide['text_slide']}</div>";
	if($slide['link_slide'] !== '') $strHTML .= "<a href='{$slide['link_slide']}' target='_blank'>";
    $strHTML .= "<img src='{$slide['img_slide']}'";
	if($slide['alt_slide'] !== '') $strHTML .= " alt='{$slide['alt_slide']}'";
	if($slide['title_slide'] !== '') $strHTML .= " title='{$slide['title_slide']}'";
	$strHTML .= ">";
	if($slide['link_slide'] !== '') $strHTML .= "</a>";
    $strHTML .= "</div>";
	echo $strHTML;
}
echo "</div></div>";