<?php
if(is_front_page()) echo "<img src='{$data['src']}' alt='logo' class='logo'>";
else echo "<a href='/'><img src='{$data['src']}' alt='logo' class='logo'></a>";
?>
