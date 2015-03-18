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
	
}); // END document ready