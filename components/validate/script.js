import {formValidate} from '../forms/forms_config'
function validateForm(formType){
	const fields = formValidate[formType]
	let error =[]
	if(fields.includes('input_name')) {
		const name = document.querySelector(`.input_name[data-type="${formType}"]`)
		if(name.value.length === 0) error.push('Укажите имя')
	}
	if(fields.includes('input_phone')) {
		const phone = document.querySelector(`.input_phone[data-type="${formType}"]`)
		console.log(phone)
		if(phone.value.length === 0) error.push('Укажите номер телефона')
	}
	if(fields.includes('input_email')){
		const email = document.querySelector(`.input_email[data-type="${formType}"]`)
		if(email.value.length === 0) error.push('Укажите номер телефона')
		if(email.value.length > 0 && !email.value.includes("@")) error.push('Укажите корректный Email')
	}
	if(fields.includes('textarea_comment')){
		const comment = document.querySelector(`.textarea_comment[data-type="${formType}"]`)
		if(comment.value.length < 20) {
			error.push('Минимальная длинна комментария 20 символов')
		}
	}
	if(fields.includes('input_order')){
		const order = document.querySelector(`.input_order[data-type="${formType}"]`)
		if(order.value.length === 0) error.push('Корзина пуста, вернитесь в магазин')
	}
	return error
}
export default validateForm