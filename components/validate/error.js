function writeError(type, arrayErrors) {
	let strHTML = ''
	const errorDiv = document.querySelector(`.error[data-type="${type}"]`)
	arrayErrors.forEach(item => {
		strHTML += `<p>${item}</p>`
	})
	errorDiv.innerHTML = strHTML
}
export default writeError