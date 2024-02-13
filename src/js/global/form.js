jQuery(document).ready(function ($) {
	const openModal = $('.open-modal-form')
	const closeModal = $('.form-modal-close, .form-modal-cancel')
	const modal = $('.form-modal')
	const modalContent = $('.form-modal-content')

	openModal.on('click', function () {
		modal.removeClass('hidden')
		$('body').addClass('overflow')
		modalContent.removeClass('hidden')
	})

	closeModal.on('click', function () {
		modal.addClass('hidden')
		$('body').removeClass('overflow')
		modalContent.addClass('hidden')
	})
})
