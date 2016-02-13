$( document ).ready(function($) {

	$('body').removeClass('animated');

    $('.menu_burger').click(function(e){
		e.preventDefault();
		$('.btn_burger').click(function(e){
			e.preventDefault();
		});
		$('.menu_main').toggleClass('menu_open');
		$('.btn_burger').toggleClass('active');
		return false;
    });


    $('a').on('click', function(){
    	var url =$(this).attr('href');

		if ( url.match("^mailto") || url.match("^#") || url.match("facebook|instagram|twitter|soundcloud") ) {
			url=true;

		}else{
			url=false;
		}

    	if( url!=true ){
    		$('body').addClass('animated');	
    	}
    });

    $('.menu-item a').wrapInner('<span>');

    $('.slider_box').first().addClass('slider_box_visible');


    //STICKY SLIDER
    if($("body").hasClass('page-template-boxes')){
    	$(document).on("mousewheel", function() {
    		var window_top = $(window).scrollTop();
    		var slider_top = $('.serie_container').offset().top;
    		var h=$('.slider_box').height();
    		var stop = slider_top + h - 100;

    		slider_top = slider_top+200;

    	    if(window_top > (slider_top-350) && !$('.slider_box').hasClass('fixed')){
    	        $('.slider_box').addClass('fixed');
    	    }

    	    if(window_top > (slider_top-350) && $('.slider_box').hasClass('fixed_bottom')){
    	        $('.slider_box').addClass('fixed');
    	        $('.slider_box.fixed').removeClass('fixed_bottom');
    	    }

    	    if((window_top <= slider_top-350 ) && $('.slider_box').hasClass('fixed') ){
    	        $('.slider_box').removeClass('fixed');
    	        $('.slider_box.fixed').removeClass('fixed_bottom');
    	    }

    	    if( (window_top > stop && ($('.slider_box').hasClass('fixed')) )) {
    	        $('.slider_box').removeClass('fixed');
    	        $('.slider_box').addClass('fixed_bottom');
    	    }
    	});

		$('.slider_box').owlCarousel({
			items:1,
			loop: true,
			autoWidth: true,
			nav:true,
			navText: ["<i class='icon-arrow arrow_left'></i>","<i class='icon-arrow arrow_right'></i>"],
		});



		$('.slider_box').on('translated.owl.carousel', function(event) {
		   motif = $(this).find('.owl-item.active').find('.motif_box').attr('src');
		   $('.slider_box').css("background-image", "url("+motif+")"); 
		   			console.log("hola");
		});

		$('.filter').on('click', function(e){
			console.log("hoel");
			var bg = $(this).parent('.box_presentation').siblings('.box_presentation_slider').find('.slider_box').find('.owl-item.active').find('.motif_box').attr('src');
			console.log(bg);
			$('.slider_box').css("background-image", "url("+bg+")");
			$('.slider_box').removeClass('slider_box_visible').toggleClass('slider_mobile_visible');
			$('.mobile_bg').addClass('mobile_bg_open');
			var slide = $(this).parents('.box_presentation').siblings('.box_presentation_slider').find('.slider_box').addClass('slider_box_visible');
		});

		$('.slider_box').on('initialized.owl.carousel', function(event) {
		   motif_test = $('.slider_box_visible').find('.owl-item.active').find('.motif_box').attr('src');
		   $('.slider_box').css("background-image", "url("+motif_test+")"); 
		});
    }


	$('.icon-close-mobile_bg').on('click', function(e){
		$('.slider_box').removeClass('slider_box_visible').toggleClass('slider_mobile_visible');
		$('.mobile_bg').removeClass('mobile_bg_open');
	});



});
