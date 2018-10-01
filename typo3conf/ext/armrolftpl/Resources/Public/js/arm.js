(function($){
    $("div#menu").mmenu({
       "offCanvas": {
            position: "right"
       }
    });
    
    $('.owl-theme').owlCarousel({    
		margin:0,
		autoplay:true,
                autoHeight:true,
		autoplayTimeout:5000,
		smartSpeed:1000,
		dots:false,
		nav:true,
		loop:true,
		items:1,
		responsiveClass:true,   
    });
})(jQuery);

$(window).load(function(){	
    $('.nav-header').click(function () {		
        $('.mobnav').toggleClass('navicon-animated');
    });
});