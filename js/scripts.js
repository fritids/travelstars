$(document).ready(function() {

	//body fade in
	$("body").css("display", "none");
		$("body").fadeIn(1000);

	//nav fade in
	$("#navbar").css("display", "none");
		$("#navbar").fadeIn(1000);

	
 	//nav button click scroll animations
 	$("#homebutton").click(function() {
		$('html, body').animate({
			scrollTop: $("#home").offset().top
		}, 1000);
		return false;
 	});
	$("#aboutbutton").click(function() {
		$('html, body').animate({
			scrollTop: $("#about").offset().top
		}, 1000);
		return false;
 	});

 	$("#clientsbutton").click(function() {
		$('html, body').animate({
			scrollTop: $("#clients").offset().top
		}, 1000);
		return false;
 	});

 	$("#contactsbutton").click(function() {
		$('html, body').animate({
			scrollTop: $("#contact").offset().top
		}, 1000);
		return false;
 	});


 	//Random bg image on page laod
 	var images = ['bg1.jpg', 'bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg', 'bg6.jpg'];
 	$('body').css({'background-image': 'url(img/' + images[Math.floor(Math.random() *      images.length)] + ')'});

 	//form submit
 	$("#submit").click(function(){

 	});


}); // end doc ready









