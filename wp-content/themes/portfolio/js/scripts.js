$(function(){
	
  $('.flexslider').flexslider({
    animation: "slide"
  }); //END flexslider


  $('.home h2.logo').addClass('is_hidden');

  $('a.burg').on('click', function(e){
      e.preventDefault();
      $('#menu-main').toggleClass('show');
  });

$(window).on('scroll',function(){
  
  var windowHeight = $(window).height();
  var scrollHeight = $(window).scrollTop();
  var scrollPercentage =  (scrollHeight / windowHeight);

  if (scrollPercentage > 0.5) {
  	$('body').addClass('scrolling');
  } else {
  	$('body').removeClass('scrolling');
  }

  if (scrollPercentage < 0.5) {
    $('.home h2.logo').addClass('is_hidden');
  } else {
    $('.home h2.logo').removeClass('is_hidden');
  }

  var opacityFilter =  1 - (scrollPercentage * 2.5);

  $('.title_header').css({
  	'-webkit-filter' : 'opacity('+ opacityFilter +')',
    'filter': 'opacity('+ opacityFilter +')'
  });

}); // END on scroll

if($('.home').length && screen.width > 680) {

  // darken header
  $('.homepage_header:after')
    .velocity({backgroundColor: "#000", backgroundColorAlpha: 0.9}, {duration : 1000});
  
  // fade in h1
  $('.title_header h1')
    .delay(500).velocity({ opacity: 1 }, {duration : 1500 });
  
  // fade in h2
  $('.title_header h2')
    .delay(1500).velocity({opacity: 1, top: 0}, {duration : 900 });

  // fade in nav
  $('nav.main_nav')
    .delay(2300).velocity({opacity: 1}, {duration : 700 });
}
	
}); // END document ready