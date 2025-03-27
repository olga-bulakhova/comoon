jQuery(document).ready(function ($) {
	const btn = $('.btn-toggle-content')
	const block = $('.content-hidden-block')

	btn.on('click', function () {
		block.slideToggle()
		btn.toggleClass('opend')
		$('.wp-block-gallery').slick('refresh')
	})
})
