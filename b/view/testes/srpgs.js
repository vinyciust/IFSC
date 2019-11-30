/*
* Project	:	Single Responsive Photo Gallery plus Slideshow
* Author	:	Phong Thai (http://www.javascriptbank.com/)
* Support	:	http://www.javascriptbank.com/single-responsive-photo-gallery-plus-slideshow.html
* Version	:	1.0.1
*/

/*
	You are free to use this plugin in any personal, commercial project without my permission.
	But please help me by leaving the Copyright sign, it just occupies about 10 pixels, 
	otherwise please help me with a milk coffee (https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2MEPB69L9E5VQ) to remove this sign.
*/

/****************************************/
// PLEASE DO NOT CHANGE any variable or function below to keep the script works properly
/****************************************/

$(document).ready(function() {
	var srpgs_scroll_times = 1,
		srpgs_ver = '1.0.1';
	
	// load thumbnails
	for(var i=0; i<srpgs_photos.length; i++) {
		if( srpgs_photos[i].image.length )
	    	$('#srpgs-thumbs-gallery').html( $('#srpgs-thumbs-gallery').html() + '<img src="' + srpgs_path_thumb + srpgs_photos[i].image + '" id="srpgs-thumb-' + i + '" title="' + (srpgs_photos[i].title&&srpgs_photos[i].title.length?srpgs_photos[i].title:'') + '" />' );
	}
	
	$('.srpgs-thumbs-nav').click(function() {
		scroll_thumbnails($(this).attr('class').split(' ')[1]);
	});
	
	// set version
	if( $(".copyright").length ) {
		var copyright_txt = "* Project	:	Single Responsive Photo Gallery plus Slideshow\n* Author	:	Phong Thai (http://www.javascriptbank.com/)\n* Version	:	" + srpgs_ver + "\n\n\n";
		$('a', $(".copyright")).attr('title', $('a', $(".copyright")).attr('title') + ' - version ' + srpgs_ver).click(function(){
			if( confirm(copyright_txt+"Click 'Ok' if you want to open the website of author\n          ") )
				window.open($(this).attr('href'));
			return false;
		});
	}
	
	// set max height, width for photos
	var resizePhoto = function() {
		$('img', $(".srpgs-holder")).css('max-width', $(window).width() - 4 + 'px' );
		$('img', $(".srpgs-holder")).css('max-height', $(window).height() - 4 + 'px' );
	}
	resizePhoto();
	
	var scroll_thumbnails = function(direction) {
	switch( direction ) {
		case 0:
			$('#srpgs-thumbs-gallery').animate({ scrollTop: 0 }, srpgs_scroll_delay);
			break;
		case 'up':
			srpgs_scroll_times--;
			$('#srpgs-thumbs-gallery').animate({ scrollTop: $('#srpgs-thumbs-gallery').scrollTop() - $('#srpgs-thumbs-gallery').height() }, srpgs_scroll_delay);
			break;
		case 'down':
			srpgs_scroll_times++;
			$('#srpgs-thumbs-gallery').animate({ scrollTop: $('#srpgs-thumbs-gallery').scrollTop() + $('#srpgs-thumbs-gallery').height() }, srpgs_scroll_delay);
			break;
		}
	};
	
	
	$('img', $('#srpgs-thumbs-gallery')).click(function() {
		navigate(this.id.substring(12));
	});
	
	// Backwards navigation
	$("#srpgs-control-back").click(function() {
		stopAnimation();
		navigate("back");
	});
	
	// Forward navigation
	$("#srpgs-control-next").click(function() {
		stopAnimation();
		navigate("next");
	});
	
	var interval;
	$("#srpgs-control-play-pause").toggle(function(){
		stopAnimation();
	}, function() {
		// Change the background image to "pause"
		$(this).css({ "background-image" : "url(images/btn_pause.png)" });
		
		// Show the next image
		navigate("next");
		
		// Start playing the animation
		interval = setInterval(function() {
			navigate("next");
		}, srpgs_slideshowSpeed);
	});
	
	
	var activeContainer = 1;	
	var currentImg = 0;
	var animating = false;
	var navigate = function(direction) {
		// Check if no animation is running. If it is, prevent the action
		if(animating) {
			return;
		}
		
		// Check which current image we need to show
		if( parseInt(direction) >= 0 )
		{
			currentImg = parseInt(direction)+1;
		}
		else if(direction == "next") {
			currentImg++;
			if(currentImg == srpgs_photos.length + 1) {
				currentImg = 1;
			}
		} else {
			currentImg--;
			if(currentImg == 0) {
				currentImg = srpgs_photos.length;
			}
		}
		
		// set active image
		$('img', $('#srpgs-thumbs-gallery')).removeClass('active');
		$('img#srpgs-thumb-' + (currentImg-1), $('#srpgs-thumbs-gallery') ).addClass('active');
		
		// check to auto scroll thumbnails
		if( currentImg == 1 ) {
			scroll_thumbnails(0);
			srpgs_scroll_times = 1;
		}
		else if( currentImg*($('img', $('#srpgs-thumbs-gallery')).height()+4) > $('#srpgs-thumbs-gallery').height()*srpgs_scroll_times ){
			scroll_thumbnails('down');
		}
		
		// Check which container we need to use
		var currentContainer = activeContainer;
		if(activeContainer == 1) {
			activeContainer = 2;
		} else {
			activeContainer = 1;
		}
		
		showImage(srpgs_photos[currentImg - 1], currentContainer, activeContainer);
		
	};
	
	var currentZindex = -1;
	var showImage = function(photoObject, currentContainer, activeContainer) {
		animating = true;
		
		// Make sure the new container is always on the view
		currentZindex--;
		
		// Show the new active container
		$("#srpgs-rotate-" + activeContainer).css({
			"display" : "block",
			"z-index" : currentZindex
		});
		// Set new photo
		$('img', $("#srpgs-rotate-" + activeContainer)).attr('src', srpgs_path_pics + photoObject.image);
		// Fade out the current container
		// and display the header text when animation is complete
		$("#srpgs-rotate-" + currentContainer).fadeOut(function() {
			setTimeout(function() {
				$("#srpgs-picture").css({"display" : "block"});
				animating = false;
			}, 500);
		});
		
		// Hide the header text
		$("#srpgs-picture").css({"display" : "none"});
		
		// Set the new header text
		if( photoObject.title && photoObject.title.length )
		{
			$("#srpgs-picture-title").show();
			$("#srpgs-picture-title").html(photoObject.title);
		}
		else $("#srpgs-picture-title").hide();
		
		if( photoObject.url && photoObject.url.length && photoObject.subject && photoObject.length ) {
			$("#srpgs-picture-url")
				.attr("href", photoObject.url)
				.html(photoObject.subject);
			$(".srpgs-picture-link").show();
		}
		else $(".srpgs-picture-link").hide();
		
	};
	
	var stopAnimation = function() {
		// Change the background image to "play"
		$("#srpgs-control-play-pause").css({ "background-image" : "url(images/btn_play.png)" });
		
		// Clear the interval
		clearInterval(interval);
	};
	
	// We should statically set the first image
	navigate("next");
	
	// Start playing the animation
	interval = setInterval(function() {
		navigate("next");
	}, srpgs_slideshowSpeed);
	
	$(window).resize(function(){ resizePhoto(); });
});