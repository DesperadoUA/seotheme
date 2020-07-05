<section class="faq" itemscope itemtype="https://schema.org/FAQPage">
		<div class="faq_title"><?= $data['title']; ?></div>
    <div class="container faq_wrapper">
		<?php
			foreach ($data['asq_question'] as $item) {
				echo "<div class='faq_row' 
                          itemscope 
                          itemprop='mainEntity' 
                          itemtype='https://schema.org/Question' >
						<div class='faq_question'>
						<span itemprop='name'>{$item['question']}</span>
						  <span class='faq_close'></span>
						</div>
						<div class='faq_answer' 
						 itemscope 
						 itemprop='acceptedAnswer' 
						 itemtype='https://schema.org/Answer' >
						    <span  itemprop='text'>
						    {$item['answer']}
						    </span>
						</div> 
					 </div>";
			}
		?>
	</div>
</section>