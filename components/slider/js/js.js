	function initialSlider(){
        $('.main_slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,
          })

	if($('.slider_item').length !== 1) {
		jQuery('.arrow_left').click(() => jQuery('.slick-prev').click());
		jQuery('.arrow_right').click(() => jQuery('.slick-next').click());
	}
	else {
		jQuery('.arrow_left').fadeOut();
		jQuery('.arrow_right').fadeOut();
	}
    }

    initialSlider()


