import validateForm from '../validate/script.js'
import writeError from '../validate/error.js'
import writeSuccess from '../validate/success.js'
import {formsFields} from '../forms/forms_config'
function formActivate(){
	const API_URL = '/wp-content/themes/myWorld/components/forms/ajax.php'
	const btnPopUpActivate = document.querySelectorAll('.pop_up_activate')
	if(btnPopUpActivate.length !== 0) {
		btnPopUpActivate.forEach(btn => {
			btn.addEventListener('click', function () {
				const typePopUp = this.getAttribute('data-type')
				const popUp = document.querySelector(`.pop_up[data-type="${typePopUp}"]`)
				popUp.classList.add('show')
			})
		})
	}
	const btnClose = document.querySelectorAll('.close')
	if(btnClose.length !== 0) {
		btnClose.forEach(btn => {
			btn.addEventListener('click', function(){
				const typePopUp = this.getAttribute('data-type')
				const popUp = document.querySelector(`.pop_up[data-type="${typePopUp}"]`)
				popUp.classList.remove('show')
			})
		})
	}
	const btnSubmit = document.querySelectorAll('.btn_submit')
	if(btnSubmit.length !== 0) {
		btnSubmit.forEach(btn => {
			btn.addEventListener('click', function () {
				const formType = this.getAttribute('data-type')
				const DAL = {
					send() {
						const data = {}
						data.type = formType
						formsFields[formType].forEach(item => {
							data[item] = document.querySelector(`.${item}[data-type="${formType}"]`).value
						})
						return fetch(API_URL, {
								method: 'POST',
								body: JSON.stringify(data)
							}
						)
							.then(response => response.json())
							.then(data => data)
					}
				}
				let error = validateForm(formType)
				if (error.length !== 0) writeError(formType, error)
				else {
					(async () => {
						const data = await DAL.send()
						if(data.result === true) writeSuccess(formType)
						if(formType === 'order') {
							const basket = document.querySelector('.basket')
							basket.innerHTML = 0
							localStorage.clear()
						}
					})();
				}
			})
		})
	}
}
export default formActivate