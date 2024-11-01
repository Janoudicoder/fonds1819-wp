
jQuery(document).ready(function( $ ) {


// @prepros-prepend ../../slick/slick.min.js
// @prepros-prepend ../../magnific/jquery.magnific-popup.js
// @prepros-prepend jarallax.min.js
// @prepros-prepend jarallax-video.min.js
// @prepros-prepend navigation.js
// @prepros-prepend wow.min.js


  $('.jarallax').jarallax({
      speed: 0.5
  });


      // ANIMATE NA SCROLL
    wow = new WOW(
      {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       false,      // default
      live:         true        // default
      }
  )
  wow.init();


  $('#searchToggle').click(function(){
    $('.searchContainer').toggleClass('open');
    $('.form-wrapper').toggleClass('open');
    $('.nav-dropdown').css({"max-height": "0", "margin":"0"});
    $('#s').focus();

  });

  var linkTarhetBlank = $("p a[target='_blank']");
  console.log(linkTarhetBlank);

  linkTarhetBlank.append('<span class="sr-only">opent nieuw scherm</span>');


  $('.leesverder').click(function(e)
  {
     e.preventDefault();

     var containerHero =  $(this).closest('section');
     var nextDiv = containerHero.next();

     $('html, body').animate({
      scrollTop: nextDiv.offset().top - 150 //#DIV_ID is an example. Use the id of your destination on the page
  }, 'slow');

  });
    

   //MENU
   $("#navigation1").navigation({
      mobileBreakpoint: 976,
      submenuIndicatorTrigger: true,
      overlayColor: "rgba(0,0,0, 0.5)" 
   });
 
  // This will create a single gallery from all elements that have class "gallery-item"
  $('.gallery-item').magnificPopup({
      type: 'image',
      gallery:{
      enabled:true
    }
  });

    // This will create a single gallery from all elements that have class "gallery-item"
    $('.popup-vimeo').magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      fixedContentPos: false
  });

    // TABLE RESPONSIVE
    $( "table" ).wrap( "<div style=\"overflow-x:auto;\"></div>" );




  $('.hero-slick').slick({
    pauseOnHover: false,
    arrows: false,
    dots: true,
    infinite: true,
    fade: true,
    cssEase: 'linear',
    speed: 500,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow:1,
    slidesToScroll: 1,
});

$('.blok-slider').each(function( index ) {
  $(this).slick({
      arrows: true,
      infinite: false,
      speed: 300,
      slidesToShow: 3.5,
      slidesToScroll: 1,
      appendArrows: $(this),
      prevArrow:  '<i class="fas fa-chevron-left arrow-left"></i>',
      nextArrow: '<i class="fas fa-chevron-right arrow-right"></i>',
      responsive: [
        {
          breakpoint: 1280,
          settings: {
            slidesToShow: 2.5,
          }
        },
        {
          breakpoint: 680,
          settings: {
            slidesToShow: 1.2
          }
        }]
  });
});





$(window).bind('scroll', function () {
  if ($(window).scrollTop() > 55) {
      $('body').addClass('menufixed', 500);
  } else {
      $('body').removeClass('menufixed', 500);
  }
});

//--SCROLL CLASS TOEVOEGEN BIJ SCROLLEN--/
$(window).bind('scroll', function () {
  if ($(window).scrollTop() > 55) {
      $('body').addClass('onscroll', 500);
  } else {
      $('body').removeClass('onscroll', 500);
  }
});

		//Scroll back to top

		var progressPath = document.querySelector('.progress-wrap path');
		var pathLength = progressPath.getTotalLength();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
		progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		progressPath.style.strokeDashoffset = pathLength;
		progressPath.getBoundingClientRect();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
		var updateProgress = function () {
			var scroll = $(window).scrollTop();
			var height = $(document).height() - $(window).height();
			var progress = pathLength - (scroll * pathLength / height);
			progressPath.style.strokeDashoffset = progress;
		}
		updateProgress();
		$(window).scroll(updateProgress);
		var offset = 50;
		var duration = 550;
		jQuery(window).on('scroll', function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.progress-wrap').addClass('active-progress');
			} else {
				jQuery('.progress-wrap').removeClass('active-progress');
			}
		});
		jQuery('.progress-wrap').on('click', function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})

});