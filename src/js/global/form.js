jQuery(document).ready(function ($) {
	const openModal = $('.open-modal-form')
	const closeModal = $('.form-modal-close')
	const modal = $('.form-modal')

	openModal.on('click', function () {
		modal.removeClass('hidden')
		$('body').addClass('overflow')
	})

	closeModal.on('click', function () {
		modal.addClass('hidden')
		$('body').removeClass('overflow')
	})
})
