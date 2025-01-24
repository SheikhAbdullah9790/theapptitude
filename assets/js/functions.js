
$(document).ready(function() {
"use strict";

// wow start
new WOW().init();
// wow end

  

$(function() {
        var myLazyLoad = new LazyLoad({
   elements_selector: ".lazy"
   // load_delay: 300 //adjust according to use case
});
    });

$(document).ready(function(){

  //toggle menu
  $('.hamburger-container').click(function(){
    $('#menu').slideToggle();
  });

  //to fix issue that toggle adds style(hides) to nav
  $(window).resize(function(){
    if(window.innerWidth > 1024) {
      $('#menu').removeAttr('style');
    }
  });

  //icon animation
  var topBar = $('.hamburger li:nth-child(1)'),
    middleBar = $('.hamburger li:nth-child(2)'),
    bottomBar = $('.hamburger li:nth-child(3)');

  $('.hamburger-container').on('click', function() {
    if (middleBar.hasClass('rot-45deg')) {
      topBar.removeClass('rot45deg');
      middleBar.removeClass('rot-45deg');
      bottomBar.removeClass('hidden');
    } else {
      bottomBar.addClass('hidden');
      topBar.addClass('rot45deg');
      middleBar.addClass('rot-45deg');
    }
  });

});


  
////// mobile slider
    $(".asd").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 3000,
        centerMode: false,        
        variableWidth: false,
        infinite: true,
        cssEase: 'linear',
        arrows: false,
        dots: false,
            responsive: [
                {
                  breakpoint: 10000,
                  settings: "unslick"
                },                
                {
                  breakpoint: 900,
                  settings: {
                    unslick: true
                  }
                }
            ]
    });


        $(".mob-servs").slick({
        speed: 2000,
        autoplay: true,
        autoplaySpeed: 3000,
        centerMode: false,        
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: false,
        infinite: true,
        initialSlide: 1,
        arrows: false,
        dots: true,
            responsive: [
                {
                  breakpoint: 10000,
                  settings: "unslick"
                },                
                {
                  breakpoint: 900,
                  settings: {
                    unslick: true
                  }
                }
            ]
    });

////// mob slider end  

////// Logo-slider
$(".lgosldr").slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000,
    cssEase: "linear",
    pauseOnHover: true,
    slidesToShow: 10,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 5
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        slidesToShow: 3
      }
    }
  ]
});  

////// fancybox
$('[data-fancybox="swf-file"]').fancybox({
	iframe : {
		css : {
			width : '336px',
			height : '280px'
		}
	}
});

$('[data-fancybox="video-file"]').fancybox({
	iframe : {
		css : {
			width : '580px',
			height : '340px'
		}
	}
});		
////// fancybox end

$(function(){
"use strict";
var theYear = new Date().getFullYear();
$('#year').html(theYear);
}); 

 // Tabbing *****************************

    $('[data-targetit]').on('click', function() {
        $(this).siblings().removeClass('current');
        $(this).addClass('current');
        var target = $(this).data('targetit');
        $('.' + target).siblings('[class*="my-tabs"]').removeClass('current');
        $('.' + target).addClass('current');
        $('.slick-slider').slick('setPosition', 0);

    });

}); // document ready end


// Fixed Resize Window Function
const resizeWindow = () => {
   if (window.innerWidth > 992) {
      if (navbarMenu.classList.contains("active")) {
         toggleMenu();
      }
      if (navbarMenu.querySelector(".menu-dropdown.active")) {
         collapseSubMenu();
      }
   }
};

// Initialize Swiper 
    // var swiper = new Swiper(".mySwiper", {
    //   effect: "cards",
    //   grabCursor: true,
    // });







