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


	/* FOLLOW CURSOR CREDITS */

	function randomlyStick(){
	    var randomNumberOne = Math.floor(Math.random()*window_width);
	    var randomNumberTwo = Math.floor(Math.random()*window_height);
	    
	    while (randomNumberOne == randomNumberTwo) {
	       randomNumberTwo=Math.floor(Math.random()*window_height);
	    }
	    
	    $('#credits, #metadata').css({
	    	left: randomNumberOne,
	    	top: randomNumberTwo
	    });
	}

	function fadeCredits(){
		$('#credits, #metadata').fadeOut();
	}

	setTimeout(fadeCredits, 3000);


	/* POSTMESSAGE */


	var first_link = $("a[target='one']");

	$(first_link).on('click', function(evt){
		evt.preventDefault();
		window.top.postMessage({destination:'one', href:evt.target.href}, '*');
	});


	/* SPACE */

	var space = 'off';
	$('.space').click(function(){
	  	if (space == 'off'){
	  		$('.space-nothing').show();
	  		space =  'on';
	  	}
	  	else {
	  		$('.space-nothing').hide();
	  		space = 'off';
	  	}
	});


	/* NAV */

	// $('nav a.sync').hover(
	// 	function() {
	//     $('nav a.back').css('background', 'transparent');
	//     $(this).css('background', 'white');
	//   }, function() {
	//     $('nav a.back').css('background', 'white');
	//     $(this).css('background', 'transparent');
	//   }
	// );

	
	/* BOUNCING BUBBLE */

	xInitial = 7;
	yInitial = 6;
	var xSpeed = xInitial;
	var ySpeed = yInitial;

	//init functions
	$(window).load(function(){
		setTimeout(moveBouncer, 30);
	});

	function moveBouncer(){
	if (xSpeed > 2 || xSpeed < -2){
	  xSpeed = xSpeed / 1.005;
	}
	if (ySpeed > 2 || ySpeed < -2){
	  ySpeed = ySpeed / 1.005;
	}
	//set initial values
	var height = $('#bouncer').height();
	var width = $('#bouncer').width();
	var x = $('#bouncer').css('left');
	var y = $('#bouncer').css('top');
	x = parseFloat(x.substr(0, x.length-2));
	y = parseFloat(y.substr(0, y.length-2));

	//set test values
	var testX = x + xSpeed;
	var testY = y + ySpeed;

	//see if the next move will push the div off the screen, if so 
	//then change direction
	if (testX > $(window).width() - width || testX < 0){
	  if (xSpeed < 0){
	    xSpeed = xInitial;
	  }else if (xSpeed > 0){
	    xSpeed = -xInitial;
	  }
	}
	if (testY > $(window).height() - height || testY < 0){
	  if (ySpeed < 0){
	    ySpeed = yInitial;
	  }else if (ySpeed > 0){
	    ySpeed = -yInitial;
	  }
	}

	//set new location
	$('#bouncer').css({
	  'top':y + ySpeed + 'px',
	  'left':x + xSpeed + 'px'
	});

	//timer
	setTimeout(moveBouncer, 30);
	}
	
});	