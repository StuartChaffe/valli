jQuery(document).ready(function($) {

	$(".brands").slick({
		// settings: "unslick",
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		arrows: false,
		infinite: true,
		dots: false,
		adaptiveHeight: false,
		pauseOnHover: false,
		centerPadding: "60px",
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
                    centerMode: true,
					centerPadding: "100px",
					// centerPadding: "160px",
				}
			},
            {
				breakpoint: 660,
				settings: {
					slidesToShow: 2,
                    centerMode: true,
					centerPadding: "100px",
				}
			},
			{
				breakpoint: 560,
				settings: {
					slidesToShow: 1,
                    centerMode: true,
					centerPadding: "120px",
				}
			}
		]
	});
});