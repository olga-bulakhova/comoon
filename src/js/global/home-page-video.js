jQuery(document).ready(function ($) {
	const videoContainer = $('.home-video')

	if (!videoContainer.length) return

	const video = videoContainer.find('video')
	const button = videoContainer.find('.video-play')
	const overlay = videoContainer.find('.overlay')

	button.on('click', function () {
		video.prop('controls', true)
		video.trigger('play')
		overlay.css('display', 'none')
	})
})
