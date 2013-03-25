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
    mail("hellotravelstars@gmail.com", "Subject: $subject",
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

<!-- Typekit Franklin Gothic -->
<script type="text/javascript" src="//use.typekit.net/qqz5urg.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<link href="fonts/Colaborate/stylesheet.css" type="text/css" rel="stylesheet"/>
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
	    <li><a href="#" id="clientsbutton">Clients</a></li>
	    <li><a href="#" id="contactsbutton">Contact Us</a></li>
	    <li><a href="#" id="teambutton">The Team</a></li>
	    <li><a href="#" id="currencybutton">Currency Converter</a></li>
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
				<p>We specialize in entertainment and luxury travel. From a musician's world tour, to a luxury European get-away for two, we can meet your budget, and exceed your expectations. Combined, we have over 80 years of travel industry experience, and we know the ins and outs of making your trip or tour go without a hitch. Proudly founded in Nashville, TN in 1994. Travel with the best, Travel for the Stars.</p>
			</div>
		</div>
	</div>
</div> <!-- aboutus-wrapper end -->


<div class="clients-wrapper" id="clients">
	<div class="clients">
		<div class="headline-section">
    <div class="aboutus-copy">
      <h3>Our clients are our most valued resource.</h3>
      <hr><br>
        <a href="http://www.reba.com" target="blank">Reba McEntire</a><br><br>
        <a href="http://www.timmcgraw.com" target="blank">Tim McGraw</a><br><br>
        <a href="http://www.blakeshelton.com" target="blank">Blake Shelton</a><br><br>
        <a href="http://www.bigmachinelabelgroup.com" target="blank">Big Machine Label Group</a><br><br>
        <a href="http://martinamcbride.com" target="blank">Martina Mcbride</a><br><br>
        <a href="http://www.faithhill.com" target="blank">Faith Hill</a><br><br>
        <a href="http://www.ronniedunn.com" target="blank">Ronnie Dunn</a><br><br>
        <a href="http://www.kixbrooks.com" target="blank">Kix Brooks</a><br><br>
        <a href="http://www.bigandrich.com" target="blank">Big and Rich</a><br><br>
        <a href="http://www.cmaworld.com" target="blank">Country Music Association</a><br><br>
        <a href="http://www.lukebryan.com" target="blank">Luke Bryan</a><br><br>
		</div>
		</div>
	</div>
</div> <!-- clients-wrapper end -->



<div class="contact-wrapper" >
  <div class="contact">
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
  		<a href="http://twitter.com/travel4stars" target="blank">@travel4stars</a>
  	</div>
  </div>
</div> <!-- contact-wrapper end -->

<div class="team-wrapper" id="team">
  <div class="team">
    <div class="teamcopy" id="pam">
      <div class="team-pic">
        <a href="mailto:pam@travelstars.net"><img src="img/pam_off.png" class="rollover" /></a>
      </div>
      <div class="teamcopy-left">
      <h3>Pam Keller</h3><h6>President/Founder</h6>
      <hr>
      <p>Pam is originally from Memphis TN where she met her husband, Ken.  They  moved back to Ken’s home of Nashville in 1972.  She has 2 wonderful sons and one fabulous granddaughter.</p>
      <hr>
      <ul>
        <li>25 years experience in business administration</li>
        <li>25 years experience in marketing and sales</li>
        <li>16 years experience in the travel industry</li>
        <li>26 years experience in meeting planning</li>
        <li>Graduate of Nashville Tech Sabre travel school</li>
        <li>16 years in tour and entertainment travel</li>
        <li>Extensive international and domestic travel experience</li>
        <li>Specialist certifications for Italy, Portugal, Cancun and South Africa</li>
      </ul>
      </div>
    </div>


    <div class="teamcopy" id="elvie">
      <div class="team-pic">
        <a href="mailto:elvie@travelstars.net"><img src="img/elvie_off.png" class="rollover" /></a>
      </div>
      <div class="teamcopy-left">
      <h3>Elvie Foster</h3><h6>Travel Consultant</h6>
      <hr>
      <p>Elvie has been in the Travel Industry for over 31 years. She is originally from the Philippines but now considers Nashville TN her home. She lives in Nashville with her immediate family members as well as with two beautiful grandchildren, Skyler and Izabella.</p>
      <hr>
      <ul>
        <li>31 years of Leisure and Corporate travel experience</li>
        <li>Managed Tour and Travel in Goppingen Germany for the U.S. Army.</li>
        <li>Enjoys arranging Sports Travel specially Football, College and Pro during Championship season and escorting groups.</li>
        <li>Arranged travel for Radio Promotions/contest winners along with major record launches with Nashville’s Country Music Artists.</li>
      </ul>
      </div>
    </div>


    <div class="teamcopy" id="beth">
      <div class="team-pic">
        <a href="mailto:beth@travelstars.net"><img src="img/beth_off.png" class="rollover" /></a>
      </div>
      <div class="teamcopy-left">
      <h3>Beth Anderson</h3><h6>Travel Consultant</h6>
      <hr>
      <p>Originally from Gallatin, Tennessee, Beth considers herself lucky to be able to enjoy living in Nashville. She has been happily married to a wonderful man for almost 20 years. She and her husband Larry have three children; a 24 year old daughter and 16 year old twin boys.</p>
      <hr>
      <ul>
        <li>BS degree in Tourism, Food and Lodging Administration from UT</li>
        <li>Graduate of Nashville Tech Sabre Trave lSchool</li>
        <li>12 years travel industry experience specializing in leisure</li>
        <li>4 years event planning and coordination</li>
        <li>Certified Sandals Specialist</li>
        <li>Couples Resorts Preferred Agent</li>
        <li>Palace Resorts Specialist</li>
        <li>Official Cancun Counselor</li>
      </ul>
      </div>
    </div>


    <div class="teamcopy" id="debra">
      <div class="team-pic">
        <a href="mailto:debra@travelstars.net"><img src="img/debra_off.png" class="rollover" /></a>
      </div>
      <div class="teamcopy-left">
      <h3>Debra Rohrer</h3><h6>Travel Consultant</h6>
      <hr>
      <p>Debra Rohrer is originally from Ft. Lauderdale, FL - but has made Nashville her home since 1980 (when she was 6). She has 20 years of experience (off and on) in all aspects of the travel industry including entertainment travel, account management/development and sales.</p>
      <hr>
      <ul>
        <li>22 years in Entertainment Travel</li>
        <li>Managed Artists Travel Connection</li>
        <li>Director, Account Management</li>
        <li>Vendor Negotiations with Travel Suppliers</li>
        <li>Group travel including 2 full-ship charters</li>
        <li>Showcase travel for record labels up to 500 people</li>
      </ul>
      </div>
    </div>


    <div class="teamcopy" id="courtney">
      <div class="team-pic">
        <a href="mailto:courtney@travelstars.net"><img src="img/courtney_off.png" class="rollover" /></a>
      </div>
      <div class="teamcopy-left">
      <h3>Courtney Keller</h3><h6>Sales and Marketing Director</h6>
      <hr>
      <p>Courtney has lived in the Nashville area all of her life. Before joining the Travel for the Stars team, she worked in the insurance industry and in sales for a large apparel company. She has a wonderful husband, a beautiful daughter and a spoiled Labrador Retriever. Courtney has a passion for music, a desire to travel and a sense of pride in being from the South.</p>
      <hr>
      <ul>
        <li>7 years experience in sales/account management</li>
        <li>11 years experience in customer service</li>
        <li>2 years event planning and coordination</li>
        <li>3 years experience in using CRM software in relation to sales and marketing</li>
      </ul>
      </div>
    </div>


    <div class="teamcopy" id="frances">
      <div class="team-pic">
        <a href="mailto:frances@travelstars.net"><img src="img/frances_off.png" class="rollover" /></a>
      </div>
      <div class="teamcopy-left">
      <h3>Frances Goodlow</h3><h6>Receptionist</h6>
      <hr>
      <p>Frances was born a self-proclaimed Air Force Brat. She grew up in 3 different states before finally settling in Nashville. Married to a wonderful man for 3 years, they both share their love of dogs and are both big supporters of ASPCA and the Humane Shelter. She and her husband Dave are huge fans of the Nashville Predators.</p>
      <hr>
      <ul>
        <li>8 years marketing experience</li>
        <li>11 years corporate training and customer relations</li>
        <li>15 years as a travel administration assistant</li>
      </ul>
      </div>
    </div>


  </div>
</div> <!-- team-wrapper end -->



<div class="currency-wrapper" id="currency">
	<div class="currency">
		<div id="currencyBox">
      <div class="data">
          <label for="amount">Convert this amount:</label>
          <input type="text" name="amount" id="amount" value="1" />
      </div>
    
      <div class="styled-select">
      <div class="data">
          <label for="fromCurrency">From this currency:</label>
          <select name="fromCurrency" id="fromCurrency">
            <option selected="" value="EUR">Euro - EUR</option>
            <option value="USD">United States Dollars - USD</option>
            <option value="GBP">United Kingdom Pounds - GBP</option>
            <option value="CAD">Canada Dollars - CAD</option>
            <option value="AUD">Australia Dollars - AUD</option>
            <option value="JPY">Japan Yen - JPY</option>
            <option value="INR">India Rupees - INR</option>
            <option value="NZD">New Zealand Dollars - NZD</option>
            <option value="CHF">Switzerland Francs - CHF</option>
            <option value="ZAR">South Africa Rand - ZAR</option>
            <option value="DZD">Algeria Dinars - DZD</option>
            <option value="USD">America (United States) Dollars - USD</option>
            <option value="ARS">Argentina Pesos - ARS</option>
            <option value="AUD">Australia Dollars - AUD</option>
            <option value="BHD">Bahrain Dinars - BHD</option>
            <option value="BRL">Brazil Reais - BRL</option>
            <option value="BGN">Bulgaria Leva - BGN</option>
            <option value="CAD">Canada Dollars - CAD</option>
            <option value="CLP">Chile Pesos - CLP</option>
            <option value="CNY">China Yuan Renminbi - CNY</option>
            <option value="CNY">RMB (China Yuan Renminbi) - CNY</option>
            <option value="COP">Colombia Pesos - COP</option>
            <option value="CRC">Costa Rica Colones - CRC</option>
            <option value="HRK">Croatia Kuna - HRK</option>
            <option value="CZK">Czech Republic Koruny - CZK</option>
            <option value="DKK">Denmark Kroner - DKK</option>
            <option value="DOP">Dominican Republic Pesos - DOP</option>
            <option value="EGP">Egypt Pounds - EGP</option>
            <option value="EEK">Estonia Krooni - EEK</option>
            <option value="EUR">Euro - EUR</option>
            <option value="FJD">Fiji Dollars - FJD</option>
            <option value="HKD">Hong Kong Dollars - HKD</option>
            <option value="HUF">Hungary Forint - HUF</option>
            <option value="ISK">Iceland Kronur - ISK</option>
            <option value="INR">India Rupees - INR</option>
            <option value="IDR">Indonesia Rupiahs - IDR</option>
            <option value="ILS">Israel New Shekels - ILS</option>
            <option value="JMD">Jamaica Dollars - JMD</option>
            <option value="JPY">Japan Yen - JPY</option>
            <option value="JOD">Jordan Dinars - JOD</option>
            <option value="KES">Kenya Shillings - KES</option>
            <option value="KRW">Korea (South) Won - KRW</option>
            <option value="KWD">Kuwait Dinars - KWD</option>
            <option value="LBP">Lebanon Pounds - LBP</option>
            <option value="MYR">Malaysia Ringgits - MYR</option>
            <option value="MUR">Mauritius Rupees - MUR</option>
            <option value="MXN">Mexico Pesos - MXN</option>
            <option value="MAD">Morocco Dirhams - MAD</option>
            <option value="NZD">New Zealand Dollars - NZD</option>
            <option value="NOK">Norway Kroner - NOK</option>
            <option value="OMR">Oman Rials - OMR</option>
            <option value="PKR">Pakistan Rupees - PKR</option>
            <option value="PEN">Peru Nuevos Soles - PEN</option>
            <option value="PHP">Philippines Pesos - PHP</option>
            <option value="PLN">Poland Zlotych - PLN</option>
            <option value="QAR">Qatar Riyals - QAR</option>
            <option value="RON">Romania New Lei - RON</option>
            <option value="RUB">Russia Rubles - RUB</option>
            <option value="SAR">Saudi Arabia Riyals - SAR</option>
            <option value="SGD">Singapore Dollars - SGD</option>
            <option value="SKK">Slovakia Koruny - SKK</option>
            <option value="ZAR">South Africa Rand - ZAR</option>
            <option value="KRW">South Korea Won - KRW</option>
            <option value="LKR">Sri Lanka Rupees - LKR</option>
            <option value="SEK">Sweden Kronor - SEK</option>
            <option value="CHF">Switzerland Francs - CHF</option>
            <option value="TWD">Taiwan New Dollars - TWD</option>
            <option value="THB">Thailand Baht - THB</option>
            <option value="TTD">Trinidad and Tobago Dollars - TTD</option>
            <option value="TND">Tunisia Dinars - TND</option>
            <option value="TRY">Turkey Lira - TRY</option>
            <option value="AED">United Arab Emirates Dirhams - AED</option>
            <option value="GBP">United Kingdom Pounds - GBP</option>
            <option value="USD">United States Dollars - USD</option>
            <option value="VEB">Venezuela Bolivares - VEB</option>
            <option value="VND">Vietnam Dong - VND</option>
            <option value="ZMK">Zambia Kwacha - ZMK</option>
          </select>
      </div>
      </div> <!-- end styled-select -->
    
      <div class="styled-select">
      <div class="data">
          <label for="toCurrency">To this currency:</label>
          <select name="toCurrency" id="toCurrency">
            <option value="USD">United States Dollars - USD</option>
            <option value="GBP">United Kingdom Pounds - GBP</option>
            <option value="CAD">Canada Dollars - CAD</option>
            <option value="AUD">Australia Dollars - AUD</option>
            <option value="JPY">Japan Yen - JPY</option>
            <option value="INR">India Rupees - INR</option>
            <option value="NZD">New Zealand Dollars - NZD</option>
            <option value="CHF">Switzerland Francs - CHF</option>
            <option value="ZAR">South Africa Rand - ZAR</option>
            <option value="DZD">Algeria Dinars - DZD</option>
            <option value="USD">America (United States) Dollars - USD</option>
            <option value="ARS">Argentina Pesos - ARS</option>
            <option value="AUD">Australia Dollars - AUD</option>
            <option value="BHD">Bahrain Dinars - BHD</option>
            <option value="BRL">Brazil Reais - BRL</option>
            <option value="BGN">Bulgaria Leva - BGN</option>
            <option value="CAD">Canada Dollars - CAD</option>
            <option value="CLP">Chile Pesos - CLP</option>
            <option value="CNY">China Yuan Renminbi - CNY</option>
            <option value="CNY">RMB (China Yuan Renminbi) - CNY</option>
            <option value="COP">Colombia Pesos - COP</option>
            <option value="CRC">Costa Rica Colones - CRC</option>
            <option value="HRK">Croatia Kuna - HRK</option>
            <option value="CZK">Czech Republic Koruny - CZK</option>
            <option value="DKK">Denmark Kroner - DKK</option>
            <option value="DOP">Dominican Republic Pesos - DOP</option>
            <option value="EGP">Egypt Pounds - EGP</option>
            <option value="EEK">Estonia Krooni - EEK</option>
            <option value="EUR">Euro - EUR</option>
            <option value="FJD">Fiji Dollars - FJD</option>
            <option value="HKD">Hong Kong Dollars - HKD</option>
            <option value="HUF">Hungary Forint - HUF</option>
            <option value="ISK">Iceland Kronur - ISK</option>
            <option value="INR">India Rupees - INR</option>
            <option value="IDR">Indonesia Rupiahs - IDR</option>
            <option value="ILS">Israel New Shekels - ILS</option>
            <option value="JMD">Jamaica Dollars - JMD</option>
            <option value="JPY">Japan Yen - JPY</option>
            <option value="JOD">Jordan Dinars - JOD</option>
            <option value="KES">Kenya Shillings - KES</option>
            <option value="KRW">Korea (South) Won - KRW</option>
            <option value="KWD">Kuwait Dinars - KWD</option>
            <option value="LBP">Lebanon Pounds - LBP</option>
            <option value="MYR">Malaysia Ringgits - MYR</option>
            <option value="MUR">Mauritius Rupees - MUR</option>
            <option value="MXN">Mexico Pesos - MXN</option>
            <option value="MAD">Morocco Dirhams - MAD</option>
            <option value="NZD">New Zealand Dollars - NZD</option>
            <option value="NOK">Norway Kroner - NOK</option>
            <option value="OMR">Oman Rials - OMR</option>
            <option value="PKR">Pakistan Rupees - PKR</option>
            <option value="PEN">Peru Nuevos Soles - PEN</option>
            <option value="PHP">Philippines Pesos - PHP</option>
            <option value="PLN">Poland Zlotych - PLN</option>
            <option value="QAR">Qatar Riyals - QAR</option>
            <option value="RON">Romania New Lei - RON</option>
            <option value="RUB">Russia Rubles - RUB</option>
            <option value="SAR">Saudi Arabia Riyals - SAR</option>
            <option value="SGD">Singapore Dollars - SGD</option>
            <option value="SKK">Slovakia Koruny - SKK</option>
            <option value="ZAR">South Africa Rand - ZAR</option>
            <option value="KRW">South Korea Won - KRW</option>
            <option value="LKR">Sri Lanka Rupees - LKR</option>
            <option value="SEK">Sweden Kronor - SEK</option>
            <option value="CHF">Switzerland Francs - CHF</option>
            <option value="TWD">Taiwan New Dollars - TWD</option>
            <option value="THB">Thailand Baht - THB</option>
            <option value="TTD">Trinidad and Tobago Dollars - TTD</option>
            <option value="TND">Tunisia Dinars - TND</option>
            <option value="TRY">Turkey Lira - TRY</option>
            <option value="AED">United Arab Emirates Dirhams - AED</option>
            <option value="GBP">United Kingdom Pounds - GBP</option>
            <option value="USD">United States Dollars - USD</option>
            <option value="VEB">Venezuela Bolivares - VEB</option>
            <option value="VND">Vietnam Dong - VND</option>
            <option value="ZMK">Zambia Kwacha - ZMK</option>
          </select>
      </div>
      </div> <!-- end styled-select -->
    
      <div class="data">
      	<input type="button" name="convert" id="convert" value="Convert" />
      </div>
    </div> <!-- end currency Box-->
    <!-- Below conversion rsults will be displayed -->
    <div id="resultsBox">
      <div id="results"></div>
    </div>
  </div> <!-- end currency -->
</div> <!-- currency wrapper end -->



</div> <!-- container end -->

</body>
</html>

