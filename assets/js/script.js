$(document).ready(function(){
  
	$('.content img').each(function(index) {
		var small = 'yes';
		$(this).click(function(){
	  	if (small == 'yes'){
	  		$(this).removeClass('small');
	  		small =  'no';
	  	}
	  	else {
	  		$(this).addClass('small');
	  		small = 'yes';
	  	}
	  });
	});

	var window_height = $(window).height();
	var window_width = $(window).width();

	// $('.group.slides .image-container').css('height', window_height);
	$('.group.slides .image-container img').css('max-height', window_height).show();

	$('.group.large-slides img').css('max-height', window_height * 2).show();

	$('ul.related').show();


	/* CLICK INFO NAV */

	var project_info = 'off';

	$('nav a.info').click(function(){
		if (project_info == 'off'){
	  		$('.content-info').show();
	  		$('nav a.info').addClass('clicked');
	  		project_info = 'on';
	  		return false;
	  	}
	  	else {
	  		$('.content-info').hide();
	  		$('nav a.info').removeClass('clicked');
	  		project_info = 'off';
	  		return false;
	  	}
	});


	var blob_position = 'back';

	$('.home-blob').click(function(){
		if (blob_position == 'front'){
			$(this).css('z-index', '-1');
	  		blob_position = 'back';
	  	}
	  	else {
	  		$(this).css('z-index', '777');
	  		blob_position = 'front';
	  	}
	})


	/* FOLLOW CURSOR CREDITS */

	// function randomlyStick(){
	//     var randomNumberOne = Math.floor(Math.random()*window_width);
	//     var randomNumberTwo = Math.floor(Math.random()*window_height);
	    
	//     while (randomNumberOne == randomNumberTwo) {
	//        randomNumberTwo=Math.floor(Math.random()*window_height);
	//     }
	    
	//     $('#credits, #metadata').css({
	//     	left: randomNumberOne,
	//     	top: randomNumberTwo
	//     });
	// }

	// function fadeCredits(){
	// 	$('#credits, #metadata').fadeOut();
	// }

	// setTimeout(fadeCredits, 3000);


	/* POSTMESSAGE */

	// var first_link = $("a[target='one']");

	// $(first_link).on('click', function(evt){
	// 	evt.preventDefault();
	// 	window.top.postMessage({destination:'one', href:evt.target.href}, '*');
	// });


	/* SPACE */

	// var space = 'off';
	// $('.space').click(function(){
	//   	if (space == 'off'){
	//   		$('.space-nothing').show();
	//   		space =  'on';
	//   	}
	//   	else {
	//   		$('.space-nothing').hide();
	//   		space = 'off';
	//   	}
	// });

});	