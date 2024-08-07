export const readCookie = name => {
	var nameEQ = name + '='
	var ca = document.cookie.split(';')
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i]
		while (c.charAt(0) == ' ') c = c.substring(1, c.length)
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length)
	}
	return null
}

export const rusToLat = str => {
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

export const addSearchParams = (key, value) => {
	let url = new URL(window.location.href)
	url.searchParams.set(key, value)
	window.location.href = url.href
}

export const resetSearchParams = () => {
	let url = new URL(window.location.href)
	url.search = ''
	window.location.href = url.href
}

export const getSearchParams = key => {
	const params = new URL(window.location.href).searchParams

	return params.get(key)
}
