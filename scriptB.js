$(document).ready(function() {
	$('.loading').fadeOut();
	$('#ex').hide();

	$("#ex").click(function() {
		$('#in').show();
		$('#ex').hide();
		return false;
	});
	
	$("#in").click(function() {
		$('#ex').show();
		$('#in').hide();
		return false;
	});
	
	$("#nav .nav1").click(function() {
		if (!$(this).next().is(":visible")) {
			$(this).find("span").html('&#9660');
			$(this).next().slideDown('fast');
		}
		else {
			$(this).find("span").html('&#9658;');
			$(this).next().slideUp('fast');
		}
		return false;
	});
		
	$(".nav3").click(function() {
		$('.ClothesPhoto').css('height','95%'),$('* #CompareForm').css('visibility','visible');
		return false;
	});
	
	$(".nav2").click(function() {
		$('.ClothesPhoto').css('height','280px'),$('* #CompareForm').css('visibility','hidden');
		return false;
	});
	
	$('.up').click(function(){ 
		$('html, body').animate({scrollTop:0},1000); 
		return false; //Отменяем действие самой ссылки
	});
	e
});
