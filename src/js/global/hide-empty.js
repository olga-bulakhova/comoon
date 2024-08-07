jQuery(document).ready(function ($) {
	const container = $('.camps-list-container')

	container.each(function (i, v) {
		const item = $(v).find('.camps-item')

		if (!item.length) {
			if ($(v).hasClass('camps-list-container-filtered')) {
				$(v).find('.no-result').removeClass('hidden')
			} else {
				$(v).remove()
			}
		}
	})
})
