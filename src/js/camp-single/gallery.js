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
