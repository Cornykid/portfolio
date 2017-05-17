/* Custom Isotope */
$(window).on('load', function(){ 
    var $container = $('.portfolio'); 
    $container.isotope({ 
        filter: '*',
        masonryHorizontal: {
            isFitWidth: true
        },
        animationOptions: { 
            duration: 750, 
            easing: 'linear', 
            queue: false, 
        } 
    }); 
  	
  	$('nav.filter ul a').click(function(){ 
        var selector = $(this).attr('data-filter'); 
        $container.isotope({ 
            filter: selector,
            masonryHorizontal: {
                isFitWidth: true
            },
            animationOptions: { 
                duration: 750, 
                easing: 'linear', 
                queue: false, 
            } 
        }); 
      return false; 
    });

    var $optionSets = $('nav.filter ul'), 
       	$optionLinks = $optionSets.find('a'); 
   
       	$optionLinks.click(function(){ 
		var $this = $(this); 

		if ( $this.hasClass('selected') ) { 
		  return false; 
		} 

		var $optionSet = $this.parents('nav.filter ul'); 
		$optionSet.find('.selected').removeClass('selected'); 
		$this.addClass('selected'); 
	}); 
});
