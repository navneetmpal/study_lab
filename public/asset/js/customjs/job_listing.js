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
	$('.select_check .click a').click(function () {
        var ts = $(this).parent().parent();
        if (ts.hasClass('open')) {
            ts.removeClass('open').children('.click_detail').slideUp('slow');						
        } else {
			$('.select_check').removeClass('open');
			$('.select_check .click_detail').slideUp('slow');
            ts.addClass('open').children('.click_detail').slideDown('slow');
			$('.filter .box').removeClass('upper');
			ts.parent().parent().addClass('upper');
        }
        return false;
    });
    $('.select_option').click(function () {
		$(this).parent().parent().find('.select_row').removeClass('active');
		$(this).parent().addClass('active');
        var obj = $(this).parents(".select_check");
        $(obj).find(" > .click input[type='hidden']").val($(this).attr('data-value'));
        $(obj).find(".select_main b").html($(this).html());
        $(obj).find(".click_detail").slideUp('slow');
        $(obj).removeClass('open');
        return false;
    });	
	$(".custom_scrollbar").mCustomScrollbar();			
});