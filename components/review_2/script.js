import validateForm from '../validate/script.js'
import writeError from '../validate/error.js'
import writeSuccess from '../validate/success.js'
function sendComment() {
	let parentIdComment = 0
	const parentLinkComment = document.querySelectorAll('.parent_link_comment')
	if(parentLinkComment) {
		parentLinkComment.forEach(item => {
			item.addEventListener('click', function () {
				parentIdComment = this.getAttribute('data-parentid')
			})
		})
	}
	const submitComment = document.querySelector('.submit_ajax_comment')
	if(submitComment) {
		submitComment.addEventListener('click', function () {
			const commentFormName = document.querySelector('.comment_form_name')
			const commentFormEmail = document.querySelector('.comment_form_email')
			const commentFormText = document.querySelector('.comment_form_text')
			const postId = submitComment.getAttribute('data-postid')
			const typeForm = this.getAttribute('data-type')
			const API_URL = '/wp-content/themes/myWorld/components/review_2/ajax.php'

			let error = validateForm(typeForm)
			const DAL = {
				sendComment(){
					const name = commentFormName.value
					const email = commentFormEmail.value
					const text = commentFormText.value
					return fetch(API_URL, {
							method: 'POST',
							body: JSON.stringify({name,
								email,
								text,
								parentIdComment,
								postId
							})
						}
					)
						.then(response => response.json())
						.then( data => data )
				}
			}
			if(error.length === 0) {
				(async () => {
					const data = await DAL.sendComment()
					if(data.result === true) writeSuccess(typeForm)
				})();
			}
			else writeError(typeForm, error)
		})
	}
}
export  default sendComment