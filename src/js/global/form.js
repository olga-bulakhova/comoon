jQuery(document).ready(function ($) {
	const openModal = $('.open-modal-form')
	const closeModal = $('.form-modal-close, .form-modal-cancel')
	const modal = $('.form-modal')
	const modalContent = $('.form-modal-content')

	openModal.on('click', function () {
		modal.removeClass('hidden')
		$('body').addClass('overflow')
		modalContent.removeClass('hidden')
	})

	closeModal.on('click', function () {
		modal.addClass('hidden')
		$('body').removeClass('overflow')
		modalContent.addClass('hidden')
	})

	const utmz = readCookie('_deco_utmz')
	const utmReferrer = readCookie('_deco_utm_referrer')
	const utmurl = readCookie('_deco_utmurl')

	if (utmReferrer) {
		$('.wpcf7-form').find(`[name=referrer]`).val(utmReferrer)
	}

	if (utmurl) {
		$('.wpcf7-form').find(`[name=landing_page_url]`).val(utmurl)
	}

	if (utmz) {
		const utmArray = utmz.split('|')

		const utmFields = [
			'utm_source',
			'utm_medium',
			'utm_campaign',
			'utm_keyword',
			'utm_content',
		]

		utmFields.forEach((el, i) => {
			$('.wpcf7-form').find(`[name=${el}]`).val(utmArray[i])
		})
	}
})

function readCookie(name) {
	var nameEQ = name + '='
	var ca = document.cookie.split(';')
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i]
		while (c.charAt(0) == ' ') c = c.substring(1, c.length)
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length)
	}
	return null
}
