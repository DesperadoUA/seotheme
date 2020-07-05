function burger() {
	const burger = document.querySelector('.mobile_burger')
	if(burger) {
		const menuContainer = document.querySelector('.menu_container')
		const headerRow = document.querySelector('.header_row_3')
		burger.addEventListener('click', function () {
			if(menuContainer.classList.contains('show_menu')) {
				menuContainer.classList.remove('show_menu')
				setTimeout(function () {
					headerRow.classList.remove('overflow_show')
				}, 500)
			}
			else{
				menuContainer.classList.add('show_menu')
				headerRow.classList.add('overflow_show')
			}
		})

		const dropItem = document.querySelectorAll('.drop_item')
		if(dropItem.length !==0 ) {
			dropItem.forEach(item => {
				item.addEventListener('click', function (event) {
					if(event.target.classList.contains('drop_menu_item')) {
						console.log("Good")
					} else {
						if(item.classList.contains('active_menu')) item.classList.remove('active_menu')
						else item.classList.add('active_menu')
					}
				})
			})
		}
	}
}
export default burger