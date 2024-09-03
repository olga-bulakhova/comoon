import { readCookie } from '../functions'

jQuery(document).ready(function ($) {
	const openModal = $('.open-modal-form')
	const closeModal = $('.form-modal-close, .form-modal-cancel')
	const modal = $('.form-modal')
	const modalContent = $('.form-modal-content')
	const form = $('.wpcf7-form')

	function addCampInfo(e) {
		const btn = $(e.target)
		const roomItem = btn.closest('.rooms-item')
		form.find(`[name=page_name]`).val(window.location.pathname)

		if (roomItem.length) {
			const price = roomItem.find('.room_price').text().trim()

			form.find(`[name=cost]`).val(price)

			const roomTitle = roomItem.find('.room_title').text().trim()

			form.find(`[name=room_name]`).val(roomTitle)
		}
	}

	function removeCampInfo() {
		form.find(`[name=cost]`).val('')
		form.find(`[name=room_name]`).val('')
		//campInfoField.val('')
	}

	openModal.on('click', function (e) {
		modal.removeClass('hidden')
		$('body').addClass('overflow')
		modalContent.removeClass('hidden')
		addCampInfo(e)
	})

	closeModal.on('click', function () {
		modal.addClass('hidden')
		$('body').removeClass('overflow')
		modalContent.addClass('hidden')
		removeCampInfo()
	})

	const utmz = readCookie('_deco_utmz')
	const utmReferrer = readCookie('_deco_utm_referrer')
	//const utmurl = readCookie('_deco_utmurl')

	if (utmReferrer) {
		$('.wpcf7-form').find(`[name=referrer]`).val(utmReferrer)
	}

	// if (utmurl) {
	// 	$('.wpcf7-form').find(`[name=landing_page_url]`).val(utmurl)
	// }

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
