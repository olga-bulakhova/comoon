jQuery(document).ready(function ($) {
	$('.comoonity-insta-list').slick({
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		lazyLoad: 'progressive',
		mobileFirst: false,
		adaptiveHeight: false,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [
			{
				breakpoint: 1100,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 576,
				settings: {
					autoplay: false,
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
		],
	})
})
