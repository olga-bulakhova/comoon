import {
	readCookie,
	addSearchParams,
	resetSearchParams,
	getSearchParams,
} from '../functions'

const monthLabels = {
	ru: [
		'Январь',
		'Февраль',
		'Март',
		'Апрель',
		'Май',
		'Июнь',
		'Июль',
		'Август',
		'Сентябрь',
		'Октябрь',
		'Ноябрь',
		'Декабрь',
	],
	en: [
		'Jan',
		'Feb',
		'Mar',
		'Apr',
		'May',
		'Jun',
		'Jui',
		'Aug',
		'Sep',
		'Oct',
		'Nov',
		'Dec',
	],
}

jQuery(document).ready(function ($) {
	$('.custom-select').each(function () {
		var classes = $(this).attr('class'),
			id = $(this).attr('id'),
			name = $(this).attr('name')
		var template =
			'<div class="' + classes + ' ' + id + '" data-id="' + id + '">'
		template +=
			'<span class="custom-select-trigger">' +
			$(this).attr('placeholder') +
			'</span>'
		template += '<div class="custom-options">'
		$(this)
			.find('option')
			.each(function () {
				template +=
					'<span class="custom-option' +
					' ' +
					$(this).data('selection') +
					'" data-value="' +
					$(this).attr('value') +
					'" data-selection="' +
					$(this).data('selection') +
					'">' +
					$(this).html() +
					'</span>'
			})
		template += '</div></div>'

		$(this).wrap('<div class="custom-select-wrapper"></div>')
		$(this).hide()
		$(this).after(template)

		const parent = $(this).parent()

		const text = parent.find('.custom-option.selection').text()

		if (text) {
			parent.find('.custom-select-trigger').text(text).addClass('selected')
		}
	})
	$('.custom-option:first-of-type').hover(
		function () {
			$(this).parents('.custom-options').addClass('option-hover')
		},
		function () {
			$(this).parents('.custom-options').removeClass('option-hover')
		}
	)

	$('.custom-select-trigger').on('click', function (event) {
		$('html').one('click', function () {
			$('.custom-select').removeClass('opened')
		})

		$('.custom-select').each(function (i, el) {
			if ($(el).has(event.target).length === 0) {
				$(el).removeClass('opened')
			}
		})

		$(this).parents('.custom-select').toggleClass('opened')

		$('.monthpicker_selector').css('display', 'none')
		event.stopPropagation()
	})
	$('.custom-option').on('click', function () {
		$(this)
			.parents('.custom-select-wrapper')
			.find('select')
			.val($(this).data('value'))

		addSearchParams(
			$(this).closest('.custom-select').data('id'),
			$(this).data('value')
		)

		$(this)
			.parents('.custom-options')
			.find('.custom-option')
			.removeClass('selection')
		$(this).addClass('selection')
		$(this).parents('.custom-select').removeClass('opened')
		$(this)
			.parents('.custom-select')
			.find('.custom-select-trigger')
			.text($(this).text())
			.addClass('selected')
	})

	$('.reset-filters-btn').on('click', resetSearchParams)

	//MONTHPICKER

	const lang = readCookie('pll_language')

	const labels = monthLabels[lang] ? monthLabels[lang] : monthLabels['en']

	const monthpicker = $('#monthpicker')

	monthpicker.Monthpicker({
		monthLabels: labels,
		minValue: monthpicker.data('min'),
		maxValue: monthpicker.data('max'),
		onSelect: function () {
			monthpicker.parent().addClass('selected')
			const date = monthpicker.val().split('/').join('-')
			addSearchParams('date', date)
		},
	})

	const selectedDate = getSearchParams('date')

	if (selectedDate) {
		const arr = selectedDate.split('-')
		const strDate = `${labels[Number(arr[0]) - 1]} ${arr[1]}`
		monthpicker
			.parent()
			.addClass('selected')
			.find('.monthpicker_input .placeholder')
			.text(strDate)
	}

	const filters = $('.filters')

	setTimeout(() => {
		filters.css('opacity', 1)
	}, 200)

	$('.filters-open').on('click', function () {
		filters.slideDown('fast')
		$('body').addClass('overflow')
	})

	$('.filters-close').on('click', function () {
		filters.slideUp('fast')
		$('body').removeClass('overflow')
	})
})
