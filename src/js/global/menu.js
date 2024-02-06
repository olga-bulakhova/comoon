jQuery(document).ready(function ($) {
	let didScroll
	let lastScrollTop = 0
	let delta = 5
	let navbarHeight = $('header').outerHeight()

	$(window).scroll(function (event) {
		didScroll = true
	})

	setInterval(function () {
		if (didScroll) {
			hasScrolled()
			didScroll = false
		}
	}, 250)

	function hasScrolled() {
		var st = $(this).scrollTop()

		if (Math.abs(lastScrollTop - st) <= delta) return
		if (st > lastScrollTop && st > navbarHeight) {
			$('header').removeClass('nav-down').addClass('nav-up')
		} else {
			if (st + $(window).height() < $(document).height()) {
				$('header').removeClass('nav-up').addClass('nav-down')
			}
		}

		lastScrollTop = st
	}

	function toggleMobileMenu() {
		$('.mobile-menu').slideToggle('fast')
		$('body').toggleClass('overflow')
	}

	$('.toggle-menu').on('click', toggleMobileMenu)
})
