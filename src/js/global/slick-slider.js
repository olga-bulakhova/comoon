jQuery(document).ready(function ($) {
	const options = {
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		lazyLoad: 'progressive',
		mobileFirst: true,
	}

	$(
		'.you-are-getting-list, .entertainments-list, .camp-report .img-list , .comoonity-events .events-list'
	).slick({
		...options,
		adaptiveHeight: true,
		responsive: [
			{
				breakpoint: 768,
				settings: 'unslick',
			},
		],
	})

	const length = $('.founders-list .founders-item').length

	if (length <= 4) {
		$('.founders-list').slick({
			...options,
			responsive: [
				{
					breakpoint: 768,
					settings: 'unslick',
				},
				{
					breakpoint: 576,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
					},
				},
			],
		})
	} else {
		$('.founders-list').addClass('desktop-slider')

		$('.founders-list').slick({
			...options,
			responsive: [
				{
					breakpoint: 1100,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 4,
					},
				},
				{
					breakpoint: 576,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
					},
				},
			],
		})
	}

	$('.comoonity-camps-list, .event-gallery').slick({
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

	$('.comoonity-people-list.desktop-slider').slick({
		...options,
		arrows: false,
		responsive: [
			{
				breakpoint: 1100,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
					arrows: true,
				},
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					//arrows: true,
				},
			},
		],
	})

	$('.comoonity-people-list.mobile-slider').slick({
		...options,
		responsive: [
			{
				breakpoint: 768,
				settings: 'unslick',
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
		],
	})
})
