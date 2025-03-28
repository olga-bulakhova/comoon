jQuery(document).ready(function ($) {
	$('.wp-block-gallery').slick({
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
					dots: false,
				},
			},
		],
	})

	const btn = $('.btn-toggle-content')
	const block = $('.content-hidden-block')

	btn.on('click', function () {
		block.slideToggle()
		btn.toggleClass('opend')
		$('.wp-block-gallery').slick('refresh')
	})
})
