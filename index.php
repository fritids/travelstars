<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {//send email
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("zkellerdevelops@gmail.com", "Subject: $subject",
    $message, "From: $email" );
    header("location: index.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="author" content="Zach Keller">
<meta name="description" content="Travel for the Stars, Nashville, TN.">

<title>Travel for the Stars</title>

<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<link href="fonts/Bebas-fontfacekit/bebas_stylesheet.css" type="text/css" rel="stylesheet"/>
<link href="fonts/Crimson-fontfacekit/crimson_stylesheet.css" type="text/css" rel="stylesheet"/>
<link href="fonts/WisdomScript/stylesheet.css" type="text/css" rel="stylesheet"/>
<link href="fonts/Colaborate/stylesheet.css" type="text/css" rel="stylesheet"/>

<!--<link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
<link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet"/>-->
<!-- <script src="js/bootstrap.min.js"></script> -->
<link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>

<script src="js/jquery-1.9.1.min.js"></script>

<script src="js/scripts.js"></script>
<style>
	.sfe-break-top{
		font-size: 36px;
	}
</style>
</head>



<body>

<div class="container">

<div class="navbar" id="navbar">
	<div id="navbar-logo">
		<a href="#"><img alt="travel stars" src="img/ts_brand.png" id="homebutton"/></a>
	</div>

	<nav>
	  <ul>
	    <li><a href="#" id="aboutbutton">About Us</a></li>
	    <li><a href="#" id="clientsbutton">Our Clients</a></li>
	    <li><a href="#" id="contactsbutton">Contact Us</a></li>
	    <li><a href="#" id="teambutton">The Team</a></li>
	  </ul>
	</nav>
</div> <!-- navbar end -->

<div class="hero" id="home">
	<div class="herologo">
		<img src="img/ts_logo.png">
	</div>


	<div class="headline">
		<!--<h2>DELIVERING A LEVEL OF SERVICE UNIQUELY OURS</h2>-->
	</div>
</div> <!-- hero end -->


<div class="aboutus-wrapper" id="about">
	<div class="aboutus">
		<div class="headline-section-about">
			<!--<h1>ABOUT US</h1>-->
			<div class="aboutus-copy">
				<h3>Travel for the Stars is a team of professionals dedicated to excellence and service.</h3>
				<hr>
				<p>We specialize in entertainment and luxury travel. From a musician's world tour, to a luxury European get-away for two, we can meet your budget, and exceed your expectations. We have a combined 75 years of travel industry experience, and we know the ins and outs of making your trip or tour go without a hitch. Proudly founded in Nashville, TN in 1994. Travel with the best, Travel for the Stars.</p>
			</div>
		</div>
	</div>
</div> <!-- aboutus-wrapper end -->


<div class="clients-wrapper" id="clients">
	<div class="clients">
		<div class="headline-section">
			<h1>Our Clients</h1>
		</div>
		<div class="copy">
			<div class="clientcopy-left">
				<a href="http://www.reba.com"><h4>Reba McEntire</h4></a>
				<a href="http://www.timmcgraw.com"><h4>Tim McGraw</h4></a>
				<a href="http://www.blakeshelton.com"><h4>Blake Shelton</h4></a>
				<a href="http://www.cmaworld.com"><h4>Country music Association</h4></a>
				<a href="http://www.ronniedunn.com"><h4>Ronnie Dunn</h4></a>
				<a href="http://www.kixbrooks.com"><h4>Kix Brooks</h4></a>
				<a href="http://www.martina-mcbride.com"><h4>Martina Mcbride</h4></a>
			</div>
			<div class="clientcopy-right">
				<a href="http://www.georgethorogood.com"><h4>George Thorogood</h4></a>
				<a href="http://www.bigandrich.com"><h4>Big and Rich</h4></a>
				<a href="http://www.faithhill.com"><h4>Faith Hill</h4></a>
				<a href="http://www.lukebryan.com"><h4>Luke Bryan</h4></a>
				<a href="http://www.gilbertbrantley.com"><h4>Gilbert Brantley</h4></a>
				<a href="http://www.leebrice.com"><h4>Lee Brice</h4></a>
				<a href="http://www.bigmachinelabelgroup.com"><h4>Big Machine Label Group</h4></a>
				<a href="http://www.dickeybetts.com"><h4>Dickey Betts</h4></a>
			</div>
		</div>
	</div>
</div> <!-- clients-wrapper end -->



<div class="contact-wrapper" >
	<div class="contact-left" id="contact">
		<?php 
		if (isset($_REQUEST['email'])) {
			echo "<h4>Success!</h4>";
		}
		$mail_form = include('php/mail_form.php'); ?>
	</div> <!-- end div contact -->

	

	<div class="contact-right">
		<h5>Visit Us</h5>
		<h3>Travel for the Stars<br> 1225 16th Ave South<br> Nashville, TN 37212</h3>

		<h5>Call Us</h5>
		<h3>615-329-2020</h3>

		<h5>Tweet Us</h5>
		<h3>@travel4stars</h3>
		<iframe src="https://www.google.com/finance/converter?a=24&from=EUR&to=USD&meta=ei%3D-a1HUdDrC6G4lgOMdw"></iframe>
	</div>
</div> <!-- contact-wrapper end -->



</div> <!-- container end -->

</body>
</html>

