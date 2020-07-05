$(document).ready(function() {

	$(".portfolio-item").each(function(i){
		$(this).find("a").attr("href","#work_" + i);
		$(this).find(".port-descr").attr("id" , "work_" + i);
	});

	$("#portfolio_grid").mixItUp();

	$(".s-portfolio li").click(function() {
		$(".s-portfolio li").removeClass("active");
		$(this).addClass("active");
	});

	$(".top-text h1").animated("fadeInDown", "fadeOutUp");	
	$(".top-text p, .section-header").animated("fadeInUp", "fadeOutDown");

	$(".popup").magnificPopup({type:'image'});
	$(".popup-content").magnificPopup({type:'inline',midClick: true});

	$(".animation-1").animated("flipInY", "flipOutY");	
	$(".animation-2").animated("fadeInLeft", "fadeOutLeft");
	$(".animation-3").animated("fadeInRight", "fadeOutRight");

	$(".left .resume-item").animated("fadeInLeft", "fadeOutDown");
	$(".right .resume-item").animated("fadeInRight", "fadeOutDown");

var $container = $(".masonry-container");
	$container.imagesLoaded(function () {
		$container.masonry({
			columnWidth: ".grid-item",
		itemSelector: ".grid-item"
	});
});
/*
	var masonryOptions = {
		columnWidth: ".grid-sizer",
		itemSelector: ".portfolio-item"
}
// init Masonry
var $grid = $('.masonry-container').masonry( masonryOptions );

var isActive = true;

$('#all, #front_end, #back_end ,#desine ,#small_work').on( 'click', function() {
  if ( isActive ) {
    
    $grid.masonry( masonryOptions );
  } else {
    // re-init Masonry
    $grid.masonry('reloadItems');
  }
  isActive = !isActive;
});
*/
/*
//Masonry - destroy, vanilla JS
var grid = document.querySelector('.masonry-container');
var masonryOptions = {
		columnWidth: ".grid-sizer",
		itemSelector: ".portfolio-item"
}
// init Masonry
var msnry = new Masonry( grid, masonryOptions );

var isActive = true;

var toggleButton = document.querySelector('#front_end');
toggleButton.addEventListener( 'click', function() {
  if ( isActive ) {
    msnry.destroy();
  } else {
    // re-init Masonry
    msnry = new Masonry( grid, masonryOptions );
  }
  isActive = !isActive;
});
*/

	function heightDetect(){
		$(".main-head").css("height",$(window).height());
	};
	heightDetect();
	$(window).resize(function(){
		heightDetect()
	});

	//$('.parallax-window').parallax({imageSrc:'../img/bg.jpg'});



	$(".toggle-mnu").click(function() {
		$(".sandwich").toggleClass("active");
	});

	$(".top-mnu ul a").click(function() { 
		$(".top-mnu").fadeOut(600);
		$(".sandwich").toggleClass("active");
		$(".top-text").css("opacity", "1");
	}).append("<span>&nbsp;");

	$(".toggle-mnu").click(function(){
		if ($(".top-mnu").is(":visible")){
			$(".top-text").css("opacity", "1");
			$(".top-mnu").fadeOut(600);
			$(".top-mnu li a").removeClass("fadeInUp animated");
		} else {
			$(".top-text").css("opacity", ".1");
			$(".top-mnu").fadeIn(600);
			$(".top-mnu li a").addClass("fadeInUp animated");			
		};
	});

	$("input, select, textarea").jqBootstrapValidation(); 
	$(".top-mnu ul a").mPageScroll2id();

});
$(window).ready(function() { 
	$(".loader-inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");
});
