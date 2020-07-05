<div class="social">
	<?php
	global $PATH_THEME;
	if(array_key_exists('telega', $data)) {
		echo "<div class='social_item'>
				<a href='tg://resolve?domain={$data['telega']}'>
				  <img src='{$PATH_THEME}components/social/img/telega.png' alt='Телеграм'>
				</a>
			  </div>";
	}
	if(array_key_exists('viber', $data)) {
		if(wp_is_mobile()) $url = 'viber://add?number='.$data['viber'];
		else $url = 'viber://chat?number=+'.$data['viber'];
			echo "<div class='social_item'>
				<a href='{$url}'>
                 <img src='{$PATH_THEME}components/social/img/viber.png' alt='Vider'>
             </div>";
	}
	if(array_key_exists('fb', $data)) {
		echo "<div class='social_item'>
				<a href='{$data['fb']}'>
					<img src='{$PATH_THEME}components/social/img/fb.png' alt='Facebook'>
				</a>
			</div>";
	}
	if(array_key_exists('skype', $data)) {
		echo "<div class='social_item'>
				<a href='skype:{$data['skype']}'>
					<img src='{$PATH_THEME}components/social/img/skype.png' alt='skype'>
				</a>	
			</div>";
	}
	?>
</div>