$(document).ready(function() {
	new WOW().init();
});

$(document).ready(function() {
	$(".testimonials__slider").slick({
		autoplay: true,
		arrows: false,
		slide: "blockquote",
		speed: 750,
		autoplaySpeed: 6000,
		pauseOnHover: false
	});

	$(".site-slider").slick({
		dots: true,
		slide: "ul",
		speed: 750,
		lazyLoad: "progressive"
	});
});

var heroResize = function() {
	var headHeight  = $(".page__head").outerHeight(),
	pageHeight  = $(window).height(),
	$introStrip = $(".strip--intro");

	$introStrip.css("height", pageHeight - headHeight);
}

$(document).ready(heroResize);
$(window).resize(heroResize);

$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				if ( $(".service-nav").length || $(".service-nav").css("display") == "table" ) {
					$('html,body').animate({
						scrollTop: target.offset().top - 48
					}, 1000);
				} else {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
				}
				
				return false;
			}
		}
	});
});


$(document).ready(function() {
	$(".accordion").each(function() {
		$(".accordion > dd").addClass("visuallyhidden");
		$(".accordion > dd:first-of-type").removeClass("visuallyhidden");

		$(".accordion > dt").click(function() {
			$(this).siblings("dd").slideUp(250, function() {
				$(this).addClass("visuallyhidden")
				.slideDown(0);
			});

			$(this).next("dd").slideUp(0, function() {
				$(this).removeClass("visuallyhidden");
				$(this).slideUp(0, function() {
					$(this).slideDown(250);
				});
			});		
		});
	});
});


$(document).ready(function() {
	if ( $(".service-nav").length ) {
		var top = $(".service-nav").offset().top;

		$(window).scroll(function(event) {
			var y = $(this).scrollTop();

			if ( y >= top ) {
				$(".service-nav").addClass("service-nav--fixed");
				$(".service-nav-placeholder").show();
			} else {
				$(".service-nav").removeClass("service-nav--fixed");
				$(".service-nav-placeholder").hide();
			}
		});
	}
});


