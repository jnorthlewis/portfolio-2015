$(function(){$(".flexslider").flexslider({animation:"slide"}),$(".home h2.logo").addClass("is_hidden"),$("a.burg").on("click",function(o){o.preventDefault(),$("#menu-main").toggleClass("show")}),$(window).on("scroll",function(){var o=$(window).height(),e=$(window).scrollTop(),l=e/o;l>.2?$("body").addClass("scrolling"):$("body").removeClass("scrolling"),.2>l?$(".home h2.logo").addClass("is_hidden"):$(".home h2.logo").removeClass("is_hidden");var i=1-4.5*l;$(".title_header").css({"-webkit-filter":"opacity("+i+")",filter:"opacity("+i+")"})}),$(window).width()>680&&($(".homepage_header:after").velocity({backgroundColor:"#000",backgroundColorAlpha:.9},{duration:1e3}),$(".title_header h1").delay(500).velocity({opacity:1},{duration:1500}),$(".title_header h2").delay(1500).velocity({opacity:1,top:0},{duration:900}),$("nav.main_nav").delay(2300).velocity({opacity:1},{duration:700}),$.stellar({horizontalScrolling:!1,scrollProperty:"scroll",hideDistantElements:!1}))});