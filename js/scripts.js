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
		}, 1500);
		return false;
 	});
	$("#aboutbutton").click(function() {
		$('html, body').animate({
			scrollTop: $("#about").offset().top
		}, 1500);
		return false;
 	});

 	$("#clientsbutton").click(function() {
		$('html, body').animate({
			scrollTop: $("#clients").offset().top
		}, 1500);
		return false;
 	});

 	$("#contactsbutton").click(function() {
		$('html, body').animate({
			scrollTop: $("#contact").offset().top
		}, 1500);
		return false;
 	});

 	$("#currencybutton").click(function() {
		$('html, body').animate({
			scrollTop: $("#currency").offset().top
		}, 1500);
		return false;
 	});

 	$("#teambutton").click(function() {
		$('html, body').animate({
			scrollTop: $("#team").offset().top
		}, 1500);
		return false;
 	});


 	//Random bg image on page load
 	var images = ['bg1.jpg', 'bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg', 'bg6.jpg', 'bg7.jpg'];
 	$('body').css({'background-image': 'url(img/' + images[Math.floor(Math.random() *      images.length)] + ')'});


 	//Rollover images in Team section
 	$("img.rollover").hover( 
		function() { this.src = this.src.replace("_off", "_on"); 
		}, 
		function() { this.src = this.src.replace("_on", "_off"); 
		});


 	// CURRENCY CONVERTER
 	$('#convert').click(function(){
	 
	 //Get all the values
	 var amount = $('#amount').val();
	 var from = $('#fromCurrency').val();
	 var to = $('#toCurrency').val();
	 
	 //Make data string
	 var dataString = "amount=" + amount + "&from=" + from + "&to=" + to;
	 
		 $.ajax({
		   type: "POST",
		   url: "php/ajax_converter.php",
		   data: dataString,
		   success: function(data){
			 //Show results div
			 $('#results').show();
			
			//Put received response into result div
			 $('#results').html(data);
		   }
		 });
	});


}); // end doc ready









