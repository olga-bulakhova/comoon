jQuery(document).ready(function ($) {
	const options = {
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		lazyLoad: 'progressive',
		mobileFirst: true,
		adaptiveHeight: true,
	}

	$(
		'.you-are-getting-list, .entertainments-list, .review-list, .camp-report .img-list'
	).slick({
		...options,
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
						slidesToScroll: 3,
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
})
