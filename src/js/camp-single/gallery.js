jQuery(document).ready(function ($) {
	$('.camp-gallery').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		lazyLoad: 'progressive',
		prevArrow: $('.gallery__prev-arr'),
		nextArrow: $('.gallery__next-arr'),
		adaptiveHeight: true,

		responsive: [
			{
				breakpoint: 768,
				settings: {
					dots: true,
					arrows: false,
				},
			},
		],
	})
})
