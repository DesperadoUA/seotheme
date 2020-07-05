<section class="order_section">
	<div class="container order_result">
	</div>
    <div class="container order_result_total_order_cost">Общая стоимость:
        <span class="order_result_total_order_sum">0</span> грн.
    </div>
</section>
<section class="section_order">
    <div class="container form_container">
        <div class="form_title">Сделать заказ</div>
        <div class="comment_form_ajax" id="comment_form_ajax">
            <div class="comment_form_info">
                <div class="comment_form_input_wrapper">
                    <input id="author"
                           name="author"
                           type="text"
                           value=""
                           class="comment_form_name input_name"
                           required="required"
                           autocomplete="off"
                           placeholder="Имя"
                           data-type="order">
                </div>
                <div class="comment_form_input_wrapper">
                    <input id="email"
                           name="phone"
                           type="text"
                           value=""
                           class="comment_form_email input_phone"
                           required="required"
                           autocomplete="off"
                           placeholder="Телефон"
                           data-type="order"
                    >
                    <input id="order"
                           name="phone"
                           type="hidden"
                           value=""
                           class="input_order"
                           data-type="order"
                    >
                </div>
            </div>
            <div class="comment_form_comment">
                <textarea
                        id="comment"
                        name="comment"
                        placeholder="Комментарий"
                        class="comment_form_text textarea_comment"
                        required="required"
                        data-type="order"></textarea>
            </div>
            <div class="form_submit">
                <button class="btn_submit" data-type="order">Отправить</button>
            </div>
            <div class="error" data-type="order"></div>
        </div>
    </div>
</section>