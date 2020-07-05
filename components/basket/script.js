function basket(){
	const main= document.querySelector('main')
	const basket = document.querySelector('.basket')
	if(main) {
		let mapIdProducts = new Map()
		if (localStorage.getItem('basket_order') !== null) {
			const totalOrder = JSON.parse(localStorage.getItem('basket_order'))
			for(let item in totalOrder) {
				mapIdProducts.set(totalOrder[item].id, totalOrder[item])
			}
		}
		totalNumberProducts()
		main.addEventListener('click', function (event) {
			if(event.target.classList.contains('order')) {
				const id = event.target.getAttribute('data-order-id')
				if(mapIdProducts.has(id)) {
					const value = mapIdProducts.get(id)
					value.count += 1;
					mapIdProducts.set(id, value)
				} else {
					const value = {}
					value.id = id
					value.count = 1
					mapIdProducts.set(id, value)
				}
				totalNumberProducts()
				const order = Object.fromEntries(mapIdProducts.entries())
				localStorage.setItem('basket_order', JSON.stringify(order))
			}
		})
		function totalNumberProducts() {
			let total = 0
			for (let item of mapIdProducts) total += item[1].count
			basket.innerHTML = total
		}

	}
}
export default basket