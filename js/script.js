$(document).ready(function() {
	//Smooth scrolling
	$('ul.nav li > a[href^="#"] , .list-icon li > a[href^="#"]').on('click', function() {
	    var target = $(this.getAttribute('href'));
	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').stop().animate({
	            scrollTop: target.offset().top +60
	        }, 1000);
	    }
	});

	//Nav close on disappear
	$(document).on('click','.navbar-collapse.in',function(e) {
	    if( $(e.target).is('a') ) {
	        $(this).collapse('hide');
	    }
	});

	//Nav Scroll disappear
	$(window).scroll(function(){                          
        if ($(this).scrollTop() > $('#about-section').position().top -1) {
            $('nav.navbar').fadeOut(500);
        } else {
        	$('nav.navbar').fadeIn(500);
        }
     });

	//Portfolio hover
	$('.grid-item').mouseenter(function() {
		$(this).find('.grid-item-on-hover').fadeIn();
		$(this).find('.grey-scale-img').css('filter','none');
	});
});