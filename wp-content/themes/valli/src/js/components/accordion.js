// FAQ
jQuery(function ($) {
$('.accordion .accordion__title').click(function() {
	$('.accordion .accordion__title').removeClass('active');
	$('.accordion .accordion__content').slideUp('normal');
	if($(this).next().is(':hidden') == true) {
		$(this).addClass('active');
		$(this).next().slideDown('normal');
	}
	return false;
});
$('.accordion .accordion__content').hide();
})