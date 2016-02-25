'use strict';
/*global jQuery Blazy skrollr Modernizr */

//*

(function() {
	var bLazy = new Blazy();
})();


Modernizr.addTest('textstroke', function() {
  var h1 = document.createElement('h1');
  return !(!('webkitTextStroke' in h1.style) && !('textStroke' in h1.style));
});


// MODERNIZR

(function ($) {

	$(function () {
		if(!Modernizr.textstroke) {
			$('html').addClass('no-text-stroke');
		}
	});

})(jQuery);

/* EQUALIZE */
(function ($) {

	$(function () {
		$('.equalize').equalize();
	});

})(jQuery);


/* WAYPOINTS */
(function ($) {

	$(function () {

		skrollr.init();

		$('#section-2').waypoint({
				handler: function(direction) {
					if(direction === 'down') {
						$(this.element).removeClass('abs').addClass('bg-fixed');
					} else {
						$(this.element).addClass('abs').removeClass('bg-fixed');
					}
				}
		});
		$('.triangle-logo').waypoint({
			handler: function(direction) {
				if(direction === 'down') {
					$(this.element).addClass('fixed');
				} else {
					$(this.element).removeClass('fixed');
				}
			}
		});

		$('#content-container').waypoint({
			handler: function(direction) {
				if(direction === 'down') {
					$('.triangle-logo').removeClass('-white');
				} else {
					$('.triangle-logo').addClass('-white');
				}
			},
			offset: 204
		});

		$('main').waypoint({
			handler: function(direction) {
				if(direction === 'down') {
					$('header').add('.social-media').addClass('on');
				} else {
					$('header').add('.social-media').removeClass('on');
				}
			}
		});
	});

})(jQuery);


/* WAYPOINTS */
(function ($) {
	$(function () {

		var calc = 100;
		$(window).scroll(function() {
			calc = calc - 7.5;
			$('.shrink-with-scroll').css(
				{
					'width': calc + '%',
					'opacity': calc * .01
				});
		});
	});
})(jQuery);
