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
	$('#NAVedit').click(function () {
 		$('#edit').show(time).siblings().hide(time);
	})
	$('#NAVmission').click(function () {
		$('#mission').show(time).siblings().hide(time);
	})
	$('#NAVrecord').click(function () {
 		$('#record').show(time).siblings().hide(time);
	})
	$('#NAVpublic').click(function () {
 		$('#public').show(time).siblings().hide(time);
	})
	$('#NAVprivate').click(function () {
 		$('#private').show(time).siblings().hide(time);
	})
	$('#NAVadd').click(function () {
 		$('#add').show(time).siblings().hide(time);
	})
})