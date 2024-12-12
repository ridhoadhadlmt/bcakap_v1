$(window).scroll(function(){
	var scrollTop = $(window).scrollTop();
	if( scrollTop > 100){
		$('#navbar').addClass('navbarActive');
	}
	else if( scrollTop < 100) {
		$('#navbar').removeClass('navbarActive');
	}
	console.log(scrollTop);
});