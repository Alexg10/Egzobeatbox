var controller = new ScrollMagic.Controller();


var first_description = $('.menu-item a').eq(0);




/********************/

var prefooterAnim = new TimelineMax();
	prefooterAnim.staggerFromTo($('.box_container'), 1, {y:100, alpha:0}, {y:0, alpha:1, ease:Power4.easeOut,}, 0.1, "-=1.5");


var scene2 = new ScrollMagic.Scene({
	triggerElement: '.pre_footer', offset:-200, reverse:false
	}).setTween(prefooterAnim)
	.addTo(controller);

if ($("body").hasClass("home")) {
	var parallaxAnim = new TimelineMax();
	var parent = jQuery('.description_step:nth-child(1)');
		parallaxAnim.fromTo(parent, 0.8, {y:30,opacity:0}, {y:0,opacity:1},0)
					.staggerFromTo(parent.find('.inside_description'), 0.5, {y:20, alpha:0}, {y:0, alpha:1}, 0.1, "-=0.25");

	var scene1 = new ScrollMagic.Scene({
		triggerElement: '.description_step:nth-child(1)', offset:-200, reverse:false
		}).setTween(parallaxAnim)
		.addTo(controller);

	/********************/

	var parallaxAnim2 = new TimelineMax();
		var parent = jQuery('.description_step:nth-child(2)');
		parallaxAnim2.fromTo(parent, 0.8, {y:30,opacity:0}, {y:0,opacity:1},0)
					.staggerFromTo(parent.find('.inside_description'), 0.5, {y:20, alpha:0}, {y:0, alpha:1}, 0.1, "-=0.25");

	var scene11 = new ScrollMagic.Scene({
		triggerElement: '.description_step:nth-child(2)', offset:-200, reverse:false
		}).setTween(parallaxAnim2)
		.addTo(controller);

	/********************/

	var parallaxAnim3 = new TimelineMax();
		var parent = jQuery('.description_step:nth-child(3)');
		parallaxAnim3.fromTo(parent, 0.8, {y:30,opacity:0}, {y:0,opacity:1},0)
					.staggerFromTo(parent.find('.inside_description'), 0.5, {y:20, alpha:0}, {y:0, alpha:1}, 0.1, "-=0.25");

	var scene111 = new ScrollMagic.Scene({
		triggerElement: '.description_step:nth-child(3)', offset:-200, reverse:false
		}).setTween(parallaxAnim3)
		.addTo(controller);

	/********************/

	var videoAnim = new TimelineMax();
		videoAnim.fromTo($('.video_description'), 0.8, {y:30,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut},0);

	var scene4 = new ScrollMagic.Scene({
		triggerElement: '.video_description', offset:-350, reverse:false
		}).setTween(videoAnim)
		.addTo(controller);

		/********************/

	var sociauxAnim = new TimelineMax();
		sociauxAnim.fromTo($('.insta_top'), 0.8, {y:30,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut},0)
					.fromTo($('.insta_middle'), 0.8, {y:30,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut,delay: 0.5},0)
					.fromTo($('.insta_bottom'), 0.8, {y:30,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut, delay: 1},0);

	var scene3 = new ScrollMagic.Scene({
		triggerElement: '.insta_block', offset:-100, reverse:false
		}).setTween(sociauxAnim)
		.addTo(controller);


}



if ($("body").hasClass("page-template-singlebox")) {



	var prefooterAnim = new TimelineMax();
		prefooterAnim.staggerFromTo($('.box_container'), 1, {y:100, alpha:0}, {y:0, alpha:1, ease:Power4.easeOut,}, 0.1, "-=1.5");


	var scene2 = new ScrollMagic.Scene({
		triggerElement: '.pre_footer', offset:-200, reverse:false
		}).setTween(prefooterAnim)
		.addTo(controller);

	/********************/

	var boxDescribAnim = new TimelineMax();
		boxDescribAnim.fromTo($('.box_description'), 1, {y:30,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut},0);

	var scene5 = new ScrollMagic.Scene({
		triggerElement: '.box_description', offset:-250, reverse:false
		}).setTween(boxDescribAnim)
		.addTo(controller);

	/********************/

	var punchLineAnim = new TimelineMax();
		punchLineAnim.fromTo($('.punchline'), 1, {y:30,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut},0);

	var scene5 = new ScrollMagic.Scene({
		triggerElement: '.punchline', offset:-250, reverse:false
		}).setTween(punchLineAnim)
		.addTo(controller);

	/********************/

	var descriptionSupLineAnim = new TimelineMax();
		descriptionSupLineAnim.fromTo($('.description_sup'), 1, {y:30,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut},0);

	var scene6 = new ScrollMagic.Scene({
		triggerElement: '.description_sup', offset:-250, reverse:false
		}).setTween(descriptionSupLineAnim)
		.addTo(controller);	

	/********************/

	// var videoSingleBoxAnim = new TimelineMax();
	// 	videoSingleBoxAnim.fromTo($('.video_description'), 1, {y:30,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut},0);

	// var scene7 = new ScrollMagic.Scene({
	// 	triggerElement: '.video_description', offset:-250
	// 	}).setTween(videoSingleBoxAnim)
	// 	.addTo(controller);	

	// function gotoUrl() {

	// 	$('a').on('click', function(){
	// 		var url =$(this).attr('href');
	// 		console.log(url);
	// 		// setTimeout({
	//   //   		$('body').addClass('loading');
	// 		// },500);
	// 	return;
	// 		document.location.href = $(el).attr('href');
	// 	});
	//     // $('body').addClass('loading');
	//     // var tl = new TimelineMax({
	//     //     onComplete: function () {
	//     //         document.location.href = $(el).attr('href');
	//     //     }
	//     // });
	// }



	// gotoUrl();




	function anim_box_single(){

		var nb = $('.picture_sup_int').text().slice(-1);
		var b = 8;

		for (i=0; i<nb; i++){

			var pictureName = "picture_sup_int_";
			var pictureNb = $('.picture_suplus').eq(i);
			var parent = $('.picture_suplus').eq(i);
			var animName = "imgSupSingleAnime_";
			var animNameNb = animName+i;
			var sceneName= "scene";
			var sceneNb = sceneName+b;


			animNameNb = new TimelineMax();
			animNameNb.fromTo($('.picture_suplus').eq(i), 1, {y:50,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut},0);

			sceneNb = new ScrollMagic.Scene({
				triggerElement: '.picture_sup_int_'+i+'', offset:-250, reverse:false
				}).setTween(animNameNb)
	
				.addTo(controller);	

			b++;
		}
	}
	anim_box_single();

}


if ($("body").hasClass("page-template-boxes")) {



		/********************/

	var sociauxAnim = new TimelineMax();
		sociauxAnim.fromTo($('.insta_top'), 0.8, {y:30,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut},0)
					.fromTo($('.insta_middle'), 0.8, {y:30,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut,delay: 0.5},0)
					.fromTo($('.insta_bottom'), 0.8, {y:30,opacity:0}, {y:0,opacity:1, ease:Power4.easeOut, delay: 1},0);

	var scene3 = new ScrollMagic.Scene({
		triggerElement: '.insta_block', offset:-100, reverse:false
		}).setTween(sociauxAnim)
		.addTo(controller);




}
/********************/


$('.menu_burger').click( function(){ 
	TweenMax.killAll({delay:0.5});
	TweenMax.staggerFrom(".menu-item", 0.5, {y:-100, opacity:0, delay:0.6, ease:Power3.easeOut}, 0.3);
}) ;
// 	var scene3 = new ScrollMagic.Scene().setTween(menuAnim)
//
// 		.addTo(controller);
// 	// TweenLite.fromTo($('.menu-item'), 0.5, {y:20, alpha:0}, {y:0, alpha:1, paused: true}, 0.1, "-=0.25");

// });
TweenLite.fromTo($('.boxes_intro'), 1, {x: '-=200px',opacity:0}, {x: 0,opacity:1, ease:Power4.easeInOut});
 TweenLite.fromTo($('.slider_box'), 2, {y: '+=200px',opacity:0}, {y: 0,opacity:1, ease:Power4.easeInOut,delay: 0.50});


$(document).on('click', '.picture_sup', function(){


});

// $(document).ready(function () {
// TweenLite.fromTo($('body'), 2, {opacity:0}, {opacity:1, ease:Power4.easeInOut, onStart: start});


// });





