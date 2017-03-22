$(document).ready(function() {
	$('.home .row5 .flex1col1').hover(function() {
		var index = $(this).index();
		$(this).children('button').addClass('active');
		$(this).siblings('div').children('button').removeClass('active');
		$('.home .row6 .flex1col1').children('div').eq(index).addClass('active');
		$('.home .row6 .flex1col1').children('div').eq(index).siblings('div').removeClass('active');
		$('.home .row6 .flex1col2').children('div').eq(index).addClass('active');
		$('.home .row6 .flex1col2').children('div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});
});