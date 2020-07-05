function categoryLoadMore() {
	const btnLoadMore = document.querySelector('.load_more')
	if(btnLoadMore) {
		let offset = Number(btnLoadMore.getAttribute('data-offset'))
		const limit = Number(offset)
		const total = btnLoadMore.getAttribute('data-total')
		const postType = btnLoadMore.getAttribute('data-post-type')
		const cid = btnLoadMore.getAttribute('data-category')
		const API_URL = '/wp-content/themes/myWorld/components/category_card_posts/ajax.php'
		const categoryCardRow = document.querySelector('.category_card_row')
		const DAL = {
			loadMore(){
				return fetch(API_URL, {
						method: 'POST',
						body: JSON.stringify({offset, total, cid, limit, postType})
					}
				)
					.then(response => response.json())
					.then( data => data )
			}
		}
		btnLoadMore.addEventListener('click', function () {
			(async () => {
				const data = await DAL.loadMore()

				if(postType === 'blog') cardCreateBlog(data)
				else cardCreate(data)

				offset += offset
				if(offset >= total) btnLoadMore.remove()
			})();
		})
		function cardCreateBlog(data) {
			data.forEach( item =>{
				const strHTML = `<div class='container_blog_item'>
									<div class='blog_item_card'>
										<div class='blog_item_card_thumbnail'>
											<img src='${item['src']}'>
										</div>
										<div class='blog_item_card_desc'>
											<div class='blog_item_card_title'>
												<a href='${item['permalink']}'>${item['post_title']}</a>
											</div>
											<div class='blog_item_card_preview'>
												<p>${item['description']}</p>
											</div>
											<div class='blog_item_card_read_more'>
												<a href='${item['permalink']}'>Подробнее</a>
											</div>
										</div>
									</div>
								</div>`
				categoryCardRow.innerHTML += strHTML
			})
		}
		function cardCreate(data) {
			data.forEach( item =>{
				const strHTML = `<div class='card'>
											<div class='card_wrapper'>
												<div>
													<img src='${item['src']}' class='card_thumbnail'>
												</div>
												<div class='card_desc'>
													<div class='card_title'>
														<a href='${item['permalink']}'>${item['post_title']}</a>
													</div>
													<div class='card_wrapper_rating'>
														<div class='card_rating'>
														<div class='rating'></div>
														<div style='width:${item['rating']}px' class='rating_hover'></div>
													</div>
													<div class='card_vendor'>
														${item['vendor']}
													</div>
												</div>
												<div class='card_description'>
													${item['description']}
												</div>
												</div>
												<div class='card_price'>
													<div class='card_price_item'>${item['price']} ${item['exchang']}
												</div>
											<div class='card_price_item order' 
											data-order-id='${item['id']}'>
											В корзину
											</div>
												</div>
											</div>
										</div>`
				categoryCardRow.innerHTML += strHTML
			})
		}
	}
}
export default categoryLoadMore