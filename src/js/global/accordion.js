jQuery(document).ready(function ($) {
	function accordion() {
		$('.accordion__header').on('click', function (t) {
			t.preventDefault()
			let e = $(this),
				n = e.closest('.accordion__item'),
				i = e.closest('.accordion'),
				o = i.find('.accordion__item'),
				s = n.find('.accordion__content'),
				r = i.find('.accordion__content')
			n.hasClass('active')
				? (r.stop().slideUp(300), n.removeClass('active'))
				: (o.removeClass('active'),
				  n.addClass('active'),
				  r.stop().slideUp(300),
				  s.stop().slideDown(300))
		})
	}

	accordion()

	const faqSection = $('.camp-faq')
	const items = faqSection.find('.accordion__item')

	if (!items.length) {
		faqSection.remove()
	} else {
		const firstItem = $(items[0])
		firstItem.addClass('active')
		firstItem.find('.accordion__content').removeClass('hidden')
	}
})
