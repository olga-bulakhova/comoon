jQuery(document).ready(function ($) {
	$('.you-are-getting-list').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		lazyLoad: 'progressive',
		mobileFirst: true,
		adaptiveHeight: true,
		responsive: [
			{
				breakpoint: 768,
				settings: 'unslick',
			},
		],
	})
})
