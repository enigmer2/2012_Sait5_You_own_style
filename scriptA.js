function MM_jumpMenu(targ,selObj,restore){
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+".html'");
  if (restore) selObj.selectedIndex=0;
}
function UnHide( eThis ){
        if( eThis.innerHTML.charCodeAt(0) == 9658 ){
            eThis.innerHTML = '&#9660;'
            eThis.parentNode.parentNode.parentNode.className = '';
        }else{
            eThis.innerHTML = '&#9658;'
            eThis.parentNode.parentNode.parentNode.className = 'cl';
        }
        return false;
};
function send_msg(url,data)
{
	$.ajax({
		type:"POST",
		url:url + ".php",
		data:"pol="+ data,
		success:function(html){$(".cat").html(html);$('.loading').fadeOut();},	
		error:function(html){alert('в данный момент сервер недоступен')}
	});
};
function LogIn()		{
		$('.LogIn').animate({right:"15px"},700).css('visibility','visible').fadeIn(700),
		$('.Category').animate({right:"-230px"},700).css('visibility','hidden').fadeOut(700),
		$('.SearchAnswer').animate({right:"-10px"},700).css('width','86%');};

function OpenSearch()		{
		$('.LogIn').animate({right:"-163px"},700).css('visibility','hidden').fadeOut(700),
		$('.Category').animate({right:"35px"},700).css('visibility','visible').fadeIn(700),
		$('.SearchAnswer').animate({right:"-30px"},700).css('width','76%');};
		
function brawser () {
if ( $.browser.msie ) {
		$('.reseze_out').css('visibility','hidden'),
		$('.full').hide(500),
		$('.MenuUser2').css('top','25 px'),
		$('.reseze_in').css('visibility','hidden');
	}
else if( $.browser.opera ) {
		$('.reseze_out').css('visibility','hidden'),
		$('.reseze_in').css('visibility','hidden'),
		$('.full').hide(500),
		$('.Category').css('background-color','#ffffff');
	}
};
