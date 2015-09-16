var map;

$(document).ready(function(){

	// Maps
	map = GMaps({
  		div: '#map',
  		lat: 18.9918839,
  		lng: -98.2747559,
  		zoom: 17,
  		scrollwheel: false
	});
    map.addMarker({
        lat: 18.9918839,
        lng: -98.2747559,
        title: 'Maestranza'
      });

    // Form toggle

    $("#mainToggle").click(function(){
    	$("#mainToggled").toggle();
    });

    $("#mainClose").click(function(){
    	$("#mainToggled").hide();
    });

    // Privacy

    $('#privacy').click(function(){
    	$('#privacyToggled').toggle('slideDown');
    });

    // Nivo lightbox

    $('.insides a').nivoLightbox();
    $('.apartaments__image-container a').nivoLightbox();
    $('.showcase__strong a').nivoLightbox();
    
    // Hover

    $(".showImage").hover(
    	function(){
    		$('.hideImage', this).hide();
  			$('.imageShown', this).show();  			
		}, 
		function () {
			$('.imageShown', this).hide();
			$('.hideImage', this).show();
	});


    // Slider

    $(window).load(function() {
        $('#slider').nivoSlider({
            directionNav: false,             
            controlNav: false,
            pauseTime: 2000
        });
    });


});