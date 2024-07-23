jQuery(document).ready(function ($) {
	const tgLinkButton = $('.tg-link')
	let tgLinkUrl =
		'https://tg.pulse.is/comoonru_bot?start=6696bb71b4a84db37e090163'

	if (!tgLinkButton.length) return

	const slug = tgLinkButton.data('slug')
	if (slug) {
		tgLinkUrl += `|camp_name=${slug}`
	}

	const cookie = readCookie('_deco_utmz')

	if (cookie) {
		const arr = cookie.split('|')
		tgLinkUrl = `${tgLinkUrl}|utm_source=${arr[0]}|utm_medium=${arr[1]}|utm_campaign=${arr[3]}`
	}

	tgLinkButton.attr('href', tgLinkUrl)
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
