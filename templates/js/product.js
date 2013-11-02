(function ($) {
	'use strict';

	$(function () {
		$('.existing-images a').on('click', function () {
			$(this).closest('.image').remove();
		});
	});
})(jQuery);