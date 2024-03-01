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
	$(".form .label").click(function () {
		$(this).parent().children(".input_text").focus();
	});
	$(".form .input_text").focus(function () {
		$(this).parent().addClass('active');
	});
	$(".form .input_text").blur(function () {
		if ($(this).val() == "") {
			$(this).parent().removeClass('active');
		}
	});
	$(".form .input_text").trigger("focus");
	$(".form .input_text").trigger("blur");					
	$('.radio, .checkbox').checkator();
});