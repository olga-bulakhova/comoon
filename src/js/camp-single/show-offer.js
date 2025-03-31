jQuery(document).ready(function ($) {
	const offer = $('.offer-js')
	const close = $('.offer-close-js')

	let idleTimer
	const resetIdleTimer = () => {
		clearTimeout(idleTimer)
		idleTimer = setTimeout(() => offer.removeClass('hidden'), 300 * 1000)
	}
	;['mousemove', 'keypress', 'touchmove'].forEach(event =>
		document.addEventListener(event, resetIdleTimer)
	)
	resetIdleTimer()

	close.on('click', function () {
		offer.addClass('hidden')
	})
})
