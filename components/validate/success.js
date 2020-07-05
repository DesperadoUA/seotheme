import {textSuccess} from '../forms/forms_config'
function writeSuccess(type) {
	const successDiv = document.querySelector(`.error[data-type="${type}"]`)
	successDiv.innerHTML = textSuccess[type]
	successDiv.classList.add('success')
}
export default writeSuccess