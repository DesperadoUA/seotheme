import {formsFields} from "../forms/forms_config";
import writeSuccess from "../validate/success";
import basket from "../basket/script";

function makeOrder() {
	const orderWrapper = document.querySelector('.order_result')
	const API_URL = '/wp-content/themes/myWorld/components/order/ajax.php'
	const DAL = {
		send() {
			const data = {
				'input_name': 'Vadim',
				'input_email': 'gazetax@mail.ru',
				'textarea_comment': 'Text comments'
			}
			return fetch(API_URL, {
					method: 'POST',
					body: JSON.stringify(data)
				}
			)
				.then(response => response.json())
				.then(data => data)
		},
		requestProduct(idProducts) {
			const data = {
				'id': idProducts
			}
			return fetch(API_URL, {
					method: 'POST',
					body: JSON.stringify(data)
				}
			)
				.then(response => response.json())
				.then(data => data)
		}
	}
	if(orderWrapper) {
		if(localStorage.getItem('basket_order') !== null) {
			let order = []
			const totalOrder = JSON.parse(localStorage.getItem('basket_order'))
			const basket = document.querySelector('.basket')
			const updateBasket = {
				delete(id){
					delete totalOrder[id]
					updateStorage()
				},
				plus(id){
					totalOrder[id].count++
					updateStorage()
				},
				minus(id){
					if(totalOrder[id].count !== 0) {
						totalOrder[id].count--
						updateStorage()
					}
				}
			}
			for(let item in totalOrder) order.push(item);
			(async () => {
				const data = await DAL.requestProduct(order)
				createItemProducts(data)
				setCountProducts()
				calculateOrderSum()
				updateOrder()
				const btnDelete = document.querySelectorAll('.order_result_delete')
				btnDelete.forEach(btn => {
					btn.addEventListener('click', function () {
						const productId = this.getAttribute('data-id')
						const product = document.querySelector(`.order_result_item[data-id="${productId}"]`)
						product.remove()
						calculateOrderSum()
						updateOrder()
						updateBasket.delete(productId)
					})
				})
				const btnPlus = document.querySelectorAll('.order_result_count_plus')
				btnPlus.forEach(btn => {
					btn.addEventListener('click', function () {
						const productId = this.getAttribute('data-id')
						const productCount = document.querySelector(`.order_result_count_number[data-id="${productId}"]`)
						let count = Number(productCount.innerHTML)
						count++
						productCount.innerHTML = count
						calculateCardSum(productId)
						calculateOrderSum()
						updateOrder()
						updateBasket.plus(productId)
					})
				})
				const btnMinus = document.querySelectorAll('.order_result_count_minus')
				btnMinus.forEach(btn => {
					btn.addEventListener('click', function () {
						const productId = this.getAttribute('data-id')
						const productCount = document.querySelector(`.order_result_count_number[data-id="${productId}"]`)
						let count = Number(productCount.innerHTML)
						count--
						if(count >= 0) {
							productCount.innerHTML = count
							calculateCardSum(productId)
							calculateOrderSum()
							updateOrder()
							updateBasket.minus(productId)
						}
					})
				})
			})()
			function setCountProducts () {
				for(let item in totalOrder) {
					const productCount = document.querySelector(`.order_result_count_number[data-id="${item}"]`)
					productCount.innerHTML = totalOrder[item].count
					calculateCardSum(item)
				}
			}
			function calculateCardSum(id){
				const productCount = document.querySelector(`.order_result_count_number[data-id="${id}"]`)
				let count = Number(productCount.innerHTML)
				const productPrice = document.querySelector(`.order_result_price_card[data-id="${id}"]`)
				let price = Number(productPrice.innerHTML)
				const productTotalPrice = document.querySelector(`.order_result_total_card_price[data-id="${id}"]`)
				productTotalPrice.innerHTML = count * price
			}
			function calculateOrderSum(){
				const divResultCost = document.querySelector('.order_result_total_order_sum')
				const cardTotalPrice = document.querySelectorAll('.order_result_total_card_price')
				let sum = 0;
				cardTotalPrice.forEach(item => {
					sum += Number(item.innerHTML)
				})
				divResultCost.innerHTML = sum
			}
			function createItemProducts(data) {
				let strHTML = ''
				data.forEach(item => {
					strHTML += `<div class="order_result_item" data-id="${item.id}">
            <div class="order_result_left">
                <div class="order_result_thumbnail">
                    <img src="${item.src}">
                </div>
            </div>
            <div class="order_result_right">
                <div class="order_result_title">
                	${item.post_title}   
               	</div>
                <div class="order_result_calculate">
                    <div class="order_result_price">
                        <span>Цена: </span> <span class="order_result_price_card" 
                        data-id="${item.id}">${item.price}</span> ${item.exchang}
                    </div>
                    <div class="order_result_count">
                        <div class="order_result_calculate">
                            <span class="order_result_count_minus" data-id="${item.id}">-</span>
                            <span class="order_result_count_number" data-id="${item.id}">0</span>
                            <span class="order_result_count_plus" data-id="${item.id}">+</span>
                        </div>
                        <span class="order_result_delete" data-id="${item.id}">Удалить</span>
                    </div>
                    <div class="order_result_total_price">
                        <span class="order_result_total_cost" >Общая цена: </span>
                        <span class="order_result_total_card_price" data-id="${item.id}"></span> ${item.exchang}
                    </div>
                </div>
            </div>
        </div>`
				})
				orderWrapper.innerHTML = strHTML
			}
			function updateOrder(){
				const titleProducts = document.querySelectorAll('.order_result_title')
				const countProducts = document.querySelectorAll('.order_result_count_number')
				const priceProducts = document.querySelectorAll('.order_result_total_card_price')
				const order = document.querySelector(`.input_order[data-type="order"]`)
				let strOrder =''
				for(let i=0; i<titleProducts.length; i++) {
					strOrder += `Название товара: ${titleProducts[i].innerHTML}\n`
					strOrder += `Количество товара: ${countProducts[i].innerHTML}\n`
					strOrder += `Цена товара: ${priceProducts[i].innerHTML}\n`
					strOrder += `-----------------------------------------\n`
				}
				order.value = strOrder

			}
			function updateStorage() {
				let total = 0
				for (let item in totalOrder) total += totalOrder[item].count
				basket.innerHTML = total
				localStorage.setItem('basket_order', JSON.stringify(totalOrder))
			}
		} else {
			orderWrapper.innerHTML = '<p class="order_title">Корзина пуста, вернитесь на <a href="/">главную страницу</a></p>';
		}
	}
}
export default makeOrder