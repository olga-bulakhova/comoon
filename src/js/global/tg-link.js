import { readCookie, rusToLat } from '../functions'

jQuery(document).ready(function ($) {
	const tgLinkButton = $('.tg-link')

	if (!tgLinkButton.length) return

	const lang = readCookie('pll_language')

	const separator = lang === 'pl' ? '__' : '|'

	tgLinkButton.each(function (i, e) {
		const link = $(e)
		let tgLinkUrl = link.attr('href')
		const slug = link.data('slug')
		if (slug) {
			tgLinkUrl += `${separator}camp_name=${slug}`
		}

		const roomItem = link.closest('.rooms-item')

		if (roomItem.length) {
			const price = roomItem.find('.room_price').text().trim()
			tgLinkUrl += `${separator}cost=${parseInt(price)}`

			const roomTitle = roomItem.find('.room_title').text().trim()
			const latRoomText =
				lang === 'ru' || lang === 'pl'
					? rusToLat(roomTitle).split(' ').join('-').toLowerCase()
					: roomTitle.split(' ').join('-').toLowerCase()
			tgLinkUrl += `${separator}room_name=${latRoomText}`
		}

		const cookie = readCookie('_deco_utmz')

		if (cookie) {
			const arr = cookie.split('|')
			tgLinkUrl = `${tgLinkUrl}${separator}utm_source=${arr[0]}${separator}utm_medium=${arr[1]}${separator}utm_campaign=${arr[3]}`
		}

		link.attr('href', tgLinkUrl)
	})
})
