$(document).ready(function() {
	$('#header .header .right .profile .click').click(function () {
		var ts = $(this).parent();
		if (ts.hasClass('open')) {
			ts.removeClass('open').children('.click_detail').slideUp('slow');
		} else {
			ts.addClass('open').children('.click_detail').slideDown('slow');
			
		}
		return false;
	});	
	$('.school_detail_carousel').owlCarousel({
		margin:0,
		nav:true,
		navText:false,
		dots:false,
		items:1,
	});							
});