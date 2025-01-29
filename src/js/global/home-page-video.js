jQuery(document).ready(function ($) {
	const videoContainer = $('.home-video')

	if (!videoContainer.length) return

	videoContainer.each(function (i, v) {
		const vk = $(v)
		const video = vk.find('video')
		const overlay = vk.find('.overlay')
		const info = vk.next('.people-item-review-info')
		const infoReview = vk.next('.founders-item-info')

		overlay.on('click', function (e) {
			console.log(info)

			e.preventDefault()
			e.stopPropagation()
			video.prop('controls', true)
			video.trigger('play')
			overlay.css('display', 'none')
			info.css('display', 'none')
			infoReview.css('display', 'none')
		})
	})
})
