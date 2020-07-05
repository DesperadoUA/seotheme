<div class="header_mail">
	<?php if($data['src'] !== '') echo "<img src='{$data['src']}' class='header_mail_img'>"; ?>
	<a href="mailto:<?= $data['mail'];?>" class="header_mail_link"><?= $data['mail']; ?></a>
</div>
