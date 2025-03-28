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

	$('.admins-gallery').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		lazyLoad: 'progressive',
		prevArrow: $('.gallery__prev-arr-admin'),
		nextArrow: $('.gallery__next-arr-admin'),
		adaptiveHeight: true,

		responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: false,
				},
			},
		],
	})

	$('.rooms-gallery').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		lazyLoad: 'progressive',
		adaptiveHeight: true,

		responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: false,
				},
			},
		],
	})

	// $('.camp-magnet-slider').slick({
	// 	infinite: true,
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	dots: true,
	// 	arrows: true,
	// 	lazyLoad: 'progressive',
	// 	adaptiveHeight: true,

	// 	responsive: [
	// 		{
	// 			breakpoint: 768,
	// 			settings: {
	// 				arrows: false,
	// 				dots: false,
	// 			},
	// 		},
	// 	],
	// })

	$('.camp-info .advantages-list').slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 2,
		dots: false,
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

jQuery(document).ready(function ($) {
	if ($(window).width() > 768) {
		setTimeout(() => {
			var container = $('.grid')
			container.imagesLoaded(function () {
				container.masonry({
					itemSelector: '.grid-item',
					columnWidth: '.grid-item',
					percentPosition: true,
				})
				container.addClass('loaded')
			})
		}, 1000)
	}
})
