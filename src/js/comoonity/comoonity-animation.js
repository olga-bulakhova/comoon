import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

gsap.registerPlugin(ScrollTrigger)

jQuery(document).ready(function ($) {
	const tl = gsap.timeline({
		scrollTrigger: {
			trigger: '.comoonity-content',
			start: 'top 50%',
		},
	})

	tl.to('.chart-progress-fill-large', 0.6, {
		width: '100%',
	})

		.to(
			'.chart-progress-fill-middle',
			0.5,
			{
				width: '100%',
			},
			0.2
		)
		.to(
			'.chart-progress-fill-small',
			0.1,
			{
				width: '100%',
			},
			0.2
		)
		.to(
			'.chart-text-large',
			{
				innerText: 50,
				duration: 2.6,
				snap: {
					innerText: 1,
				},
			},
			0
		)
		.to(
			'.chart-text-middle',
			{
				innerText: 40,
				duration: 2.1,
				snap: {
					innerText: 1,
				},
			},
			0.1
		)
		.to(
			'.chart-text-small',
			{
				innerText: 10,
				duration: 0.6,
				snap: {
					innerText: 1,
				},
			},
			0.2
		)

		.to(
			'.dem-number-man',
			{
				innerText: 60,
				duration: 2.9,
				snap: {
					innerText: 1,
				},
			},
			0
		)

		.to(
			'.dem-number-woman',
			{
				innerText: 40,
				duration: 2.3,
				snap: {
					innerText: 1,
				},
			},
			0
		)

	gsap.utils.toArray('.dem-icon').forEach((element, i) => {
		tl.to(
			element,
			{
				opacity: 1,
			},
			i / 8
		)
	})

	const boxes1 = gsap.utils.toArray('.marque-wrapper-green .marque-box')
	const boxes2 = gsap.utils.toArray('.marque-wrapper-yellow .marque-box')

	horizontalLoop(boxes1, {
		paused: false,
		repeat: -1,
		speed: 1.25,
	})

	horizontalLoop(boxes2, {
		paused: false,
		repeat: -1,
		speed: 1.25,
	})

	function horizontalLoop(items, config) {
		items = gsap.utils.toArray(items)
		config = config || {}
		let tl = gsap.timeline({
				repeat: config.repeat,
				paused: config.paused,
				defaults: { ease: 'none' },
				onReverseComplete: () =>
					tl.totalTime(tl.rawTime() + tl.duration() * 100),
			}),
			length = items.length,
			startX = items[0].offsetLeft,
			times = [],
			widths = [],
			xPercents = [],
			curIndex = 0,
			pixelsPerSecond = (config.speed || 1) * 100,
			snap = config.snap === false ? v => v : gsap.utils.snap(config.snap || 1),
			totalWidth,
			curX,
			distanceToStart,
			distanceToLoop,
			item,
			i
		gsap.set(items, {
			xPercent: (i, el) => {
				let w = (widths[i] = parseFloat(gsap.getProperty(el, 'width', 'px')))
				xPercents[i] = snap(
					(parseFloat(gsap.getProperty(el, 'x', 'px')) / w) * 100 +
						gsap.getProperty(el, 'xPercent')
				)
				return xPercents[i]
			},
		})
		gsap.set(items, { x: 0 })
		totalWidth =
			items[length - 1].offsetLeft +
			(xPercents[length - 1] / 100) * widths[length - 1] -
			startX +
			items[length - 1].offsetWidth *
				gsap.getProperty(items[length - 1], 'scaleX') +
			(parseFloat(config.paddingRight) || 0)
		for (i = 0; i < length; i++) {
			item = items[i]
			curX = (xPercents[i] / 100) * widths[i]
			distanceToStart = item.offsetLeft + curX - startX
			distanceToLoop =
				distanceToStart + widths[i] * gsap.getProperty(item, 'scaleX')
			tl.to(
				item,
				{
					xPercent: snap(((curX - distanceToLoop) / widths[i]) * 100),
					duration: distanceToLoop / pixelsPerSecond,
				},
				0
			)
				.fromTo(
					item,
					{
						xPercent: snap(
							((curX - distanceToLoop + totalWidth) / widths[i]) * 100
						),
					},
					{
						xPercent: xPercents[i],
						duration:
							(curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond,
						immediateRender: false,
					},
					distanceToLoop / pixelsPerSecond
				)
				.add('label' + i, distanceToStart / pixelsPerSecond)
			times[i] = distanceToStart / pixelsPerSecond
		}
		function toIndex(index, vars) {
			vars = vars || {}
			Math.abs(index - curIndex) > length / 2 &&
				(index += index > curIndex ? -length : length)
			let newIndex = gsap.utils.wrap(0, length, index),
				time = times[newIndex]
			if (time > tl.time() !== index > curIndex) {
				vars.modifiers = { time: gsap.utils.wrap(0, tl.duration()) }
				time += tl.duration() * (index > curIndex ? 1 : -1)
			}
			curIndex = newIndex
			vars.overwrite = true
			return tl.tweenTo(time, vars)
		}
		tl.next = vars => toIndex(curIndex + 1, vars)
		tl.previous = vars => toIndex(curIndex - 1, vars)
		tl.current = () => curIndex
		tl.toIndex = (index, vars) => toIndex(index, vars)
		tl.times = times
		tl.progress(1, true).progress(0, true)
		if (config.reversed) {
			tl.vars.onReverseComplete()
			tl.reverse()
		}
		return tl
	}
})
