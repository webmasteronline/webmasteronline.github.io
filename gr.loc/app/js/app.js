document.addEventListener("DOMContentLoaded", function() {

	$(".navbar-toggler").click(function() {
		$(".navbar").toggleClass("navbar-bg");
	});

	$('.navbar-nav>li>a').on('click', function(){
		$('.navbar-collapse').collapse('hide');
		$(".navbar").removeClass("navbar-bg");
	});

	$('#nav-about, #nav-our-advantages, #nav-conference, #nav-contact').on('click', function(){
		$(".social-icons > ul > li > a > span").addClass("grey-color-t");
	});

	$('#nav-main-page').on('click', function(){
		$(".social-icons > ul > li > a > span").removeClass("grey-color-t");
	});
	
});
