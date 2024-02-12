jQuery(document).ready(function ($) {
	const videoContainer = $('.home-video')

	if (!videoContainer.length) return

	videoContainer.each(function (i, v) {
		const vk = $(v)
		const video = vk.find('video')
		const overlay = vk.find('.overlay')

		overlay.on('click', function () {
			video.prop('controls', true)
			video.trigger('play')
			overlay.css('display', 'none')
		})
	})
})
