jQuery(document).ready(function ($) {
	const container = $('.camps-list-container')

	container.each(function (i, v) {
		const item = $(v).find('.camps-item')

    if(!item.length){
       $(v).remove();
    }
	})

})
