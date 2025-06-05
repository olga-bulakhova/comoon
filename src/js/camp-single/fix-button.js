jQuery(document).ready(function ($) {
	const widthPoint = 1220

	const btn = $('.btn-camp-heading')
	const heading = document.querySelector('.camp-heading')
	const rooms = document.querySelector('.camp-rooms .rooms-list')
	const footer = document.querySelector('.footer')

	if (!rooms) {
		btn.css({ opacity: '0', cursor: 'initial' })
		return
	}

	if ($(window).width() > widthPoint) return

	const options = {
		root: null,
		rootMargin: '0px',
		threshold: 0,
	}

	const observer = new IntersectionObserver((entries, observer) => {
		const vsb = entries.some(x => x.isIntersecting)

		if (vsb) {
			btn.removeClass('btn-camp-heading-fixed')
		} else {
			btn.addClass('btn-camp-heading-fixed')
		}
	}, options)

	observer.observe(heading)
	observer.observe(rooms)
	//observer.observe(footer)
})
