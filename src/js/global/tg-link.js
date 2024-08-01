jQuery(document).ready(function ($) {
	const tgLinkButton = $('.tg-link')

	if (!tgLinkButton.length) return

	const lang = readCookie('pll_language')

	const separator = lang === 'pl' ? '_' : '|'

	

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
			const latRoomText = rusToLat(roomTitle).split(' ').join('-').toLowerCase()
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

function rusToLat(str) {
	let ru = {
		а: 'a',
		б: 'b',
		в: 'v',
		г: 'g',
		д: 'd',
		е: 'e',
		ё: 'e',
		ж: 'j',
		з: 'z',
		и: 'i',
		к: 'k',
		л: 'l',
		м: 'm',
		н: 'n',
		о: 'o',
		п: 'p',
		р: 'r',
		с: 's',
		т: 't',
		у: 'u',
		ф: 'f',
		х: 'h',
		ц: 'c',
		ч: 'ch',
		ш: 'sh',
		щ: 'shch',
		ы: 'y',
		э: 'e',
		ю: 'u',
		я: 'ya',
		ъ: 'ie',
		ь: '',
		й: 'i',
	}
	let newString = []

	return [...str]
		.map(l => {
			let latL = ru[l.toLocaleLowerCase()]

			if (l !== l.toLocaleLowerCase()) {
				latL = latL.charAt(0).toLocaleUpperCase() + latL.slice(1)
			} else if (latL === undefined) {
				latL = l
			}

			return latL
		})
		.join('')
}


