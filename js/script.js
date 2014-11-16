$(document).ready(function(){
	var selector = '.nav li';
	var time =500;
	
	$(selector).on('click', function(){
		$(selector).removeClass('active');
		$(this).addClass('active');
	})
	$('#home').show().siblings().hide();
	$('#NAVbrand').click(function () {
 		$(selector).removeClass('active');
 		$('#home').show(time).siblings().hide(time);
	})
	$('#NAVannual').click(function () {
 		$('#annual').show(time).siblings().hide(time);
	})
	$('#NAVabout').click(function () {
 		$('#about').show(time).siblings().hide(time);
	})
	$('#NAVsign').click(function () {
 		$('#sign').show(time).siblings().hide(time);
	})
	$('#NAVlog').click(function () {
 		$('#log').show(time).siblings().hide(time);
	})
})