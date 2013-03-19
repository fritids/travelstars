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
<link href="fonts/Colaborate/stylesheet.css" type="text/css" rel="stylesheet"/>
<link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/scripts.js"></script>
<style>
	.sfe-break-top{
		font-size: 36px;
	}
</style>

<style type="text/css">
body {font-family:Arial, Helvetica, sans-serif;font-size:12px;}

#heading, #currencyBox, #results {width:775px;margin:0 auto;}

#heading {font-weight:bold;font-size:28px;padding-bottom:10px;color:#333;}

#currencyBox {-moz-border-radius:5px;border-radius:5px;background:#999;overflow:hidden;padding:10px;}

label {display:block;padding-bottom:2px;font-weight:bold;}

.data {float:left;width:auto;padding:0 5px;}

input[type=button] {margin-top:15px;cursor:pointer;background:#333333;color:#ffffff;border:none;padding:2px 5px;-moz-border-radius:5px;border-radius:5px;}

#results {display:none;font-weight:bold;font-size:24px;}
#results {-moz-border-radius:5px;border-radius:5px;background:#999999;overflow:hidden;padding:10px;text-align:center;margin-top:10px;}
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
		<!-- <iframe src="https://www.google.com/finance/converter?a=24&from=EUR&to=USD&meta=ei%3D-a1HUdDrC6G4lgOMdw"></iframe> -->
	</div>
</div> <!-- contact-wrapper end -->



<div class="currency-wrapper" id="currency">
	<div class="currency">
		<div id="currencyBox">
    <div class="data">
        <label for="amount">Convert this amount:</label>
        <input type="text" name="amount" id="amount" value="1" />
    </div>
    
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
    
    <div class="data">
    	<input type="button" name="convert" id="convert" value="Convert" />
    </div>
</div>

<!-- Below conversion rsults will be displayed -->
<div id="results"></div>
	</div>
</div> <!-- currency wrapper end -->



</div> <!-- container end -->

</body>
</html>

