<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Syahrizaldev">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/x-icon" href="img/fevicon.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<title>Salary Account</title>
	<style>
		@media only screen and (max-width: 767px) {
			.openacpageimg{
				width: 100%!important;
			}
		}
	</style>
</head>
<body>
	<?php include "nav.php";?>
	<div>
		<div class="fir_di_open_sav">
			<div>
				<img src="img/sal.png" alt="img" class="openacpageimg">
			</div>
			<div class="fir_di_open_s">
				<h1 class="openaconlineh1">Get the <b>BDIC Bank Digital</b></h1>
				<h1 class="openaconlineh1">Salary Account <b>Online</b></h1>
				<div class="fir_di_open_">
					<div class="new_ac_div">
						<img src="img/1.png" alt="1" class="numb_open">
						<h3>PAN and Aadhaar verification</h3>
					</div>
					<div class="new_ac_div">
						<img src="img/2.png" alt="2" class="numb_open">
						<h3>Fill Personal details</h3>
					</div>
					<div class="new_ac_div">
						<img src="img/3.png" alt="3" class="numb_open">
						<h3>Fund your account</h3>
					</div>
					<div class="new_ac_div">
						<img src="img/4.png" alt="4" class="numb_open">
						<h3>Review By Agent</h3>
					</div>
				</div>
				<a href="newac.php" class="open_new_ac">Open Now</a>
			</div>
		</div>
		<div class="fir_di_open_sav1">
			<div class="fir_di_open_sav12">
				<h2>Salary Account Information</h2>
				<h3>Open your Salary Account instantly from the comfort of your home</h3>
				<ul class="normalli1">
				  <li>Free MoneyBack Debit Card with Higher Debit Card Limits</li>
				  <li>Daily Domestic ATM withdrawal limits: Rs. 1,00,000</li>
				  <li>Free Personal Accidental Death cover of ₹ 1 lakhs* and free Air Accidental Death cover of ₹ 5 lakhs* on your account.</li>
				  <li>You are entitled to a Base Personal Accident Death Cover by Air/Road/Rail for a sum assured of Rs. 5 lakh.</li>
				  <li>Accelerated Personal Accident Death Cover of up to Rs. 10 lakhs on your debit card</li>
				  <li>Airport Lounge access offer: The card also gets you complimentary access to Clipper lounges at airports across India.</li>
				  <li>Get preferential pricing on loans (Apply Online) and get access to our Super Premium Credit cards (Apply Online)</li>
				</ul>
				<h3>Key highlights</h3>
				<ul class="normalli">
					<li><b>Get your account number Within 24Hour</b></li>
					<li><b>Enjoy instant access to Net / MobileBanking</b></li>
					<li><b>Get Up to Rs. 3000 Cashback on debit card every year</b></li>
					<li><b>24x7 Hour priority Support</b></li>
				</ul>
			</div>
			
			<div class="fir_di">
				<h2>All You Need To Know</h2>
				<hr>
				<p class="nav-d-2 FEATURES1" style="color: #3977b9;">FEATURES</p>
				<p class="nav-d-2 Eligibility1">Eligibility</p>
				<p class="nav-d-2 Money1">Money</p>
				<hr>
			</div>

			<div class="HideShowdetail">
				<div class="FEATURES">
					<div class="hide-div-fet">
						<h4 class="hide-div-feth41">Instant Account Opening</h4>
						<p>Instant account opening is easy with BDIC Bank. All you need is a working <b>mobile number, Aadhaar number</b> and a <b>PAN</b> number to open an account.</p>
					</div>
					<hr>
					<div class="hide-div-fet">
						<h4 class="hide-div-feth42">4 easy steps</h4>
						<div class="sub_hide_div">
						<p>Your instant Salary Account or Salary Account is fully functional in 4 easy steps:</p>
						<ul>
							<li>PAN and Aadhaar verification</li>
							<li>Fill Business details</li>
							<li>Fund your account</li>
							<li>Review By Agent</li>
						<ul>
						</div>
					</div>
					<hr>
					<div class="hide-div-fet">
						<h4 class="hide-div-feth43">Account number and Customer ID</h4>
						<p>Get your account number and Customer ID immediately You will receive your account number and Customer ID as soon as you open an BDIC Bank Salary Account online.  It's <b>immediate!</b></p>
					</div>
					<hr>
					<div class="hide-div-fet">
						<h4 class="hide-div-feth44">Transferring money</h4>
						<p>Enjoy cashless & seamless Banking through Digital Products i.e. ME/MPOS/MEAPP/BHIM/Bharat QR Payment Gateway And More</p>
					</div>
					<hr>
					<div class="hide-div-fet">
						<h4 class="hide-div-feth45">NetBanking and MobileBanking</h4>
						<div class="sub_hide_div">
						<p>NetBanking and MobileBanking are automatically enabled for your account</p>
						<p>Your instant Online Salary Account is NetBanking and <b>Mobile Banking enabled</b>, so it's easy to check your balances and many more immediately once you have set your password</p>
					</div>
					</div>
					<hr>
					<div class="hide-div-fet">
						<h4 class="hide-div-feth46">Transferring money</h4>
						<div class="sub_hide_div">
						<p><b>Send money and pay bills </b>within 48 hours of instant account opening:</p>
						<p>For your protection, outgoing payments are only <b>enabled</b> after the first 48 hours of opening your account.  After that, you can send money and pay bills easily.</p>
						</div>
					</div>
				</div>
				<div class="Eligibility" style="display:none;">
					<div class="hide-div-fet">
						<h4 class="hide-div-feth47">Eligibility criteria</h4>
						<div class="sub_hide_div">
						<p>Here are the BDIC Bank Salary Account eligibility criteria you need to meet:</p>
						<ul>
							<li>You must be employed with a corporate that has a salary account relationship with BDIC Bank</li>
							<li>Salary Credit >=15,000</li>
						<ul>
						</div>
					</div>
				</div>
				<div class="Money" style="display:none;">
					<div class="hide-div-fet">
						<h4 class="hide-div-feth48">AMB Requried</h4>
						<p>If your Account open success than you must maintain <b>15,000 plus </b>in your Salary account.</p>
					</div>
					<div class="hide-div-fet">
						<h4 class="hide-div-feth49">Ways to add money</h4>
						<div class="sub_hide_div">
						<p>When You Open This Account You Can Add Money Through Debit & Credit Card Only</p>
						<p>After Opening Account You Add money in your account Through Any Way</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<?php include "footer.php";?>
<script>
	$(".FEATURES1").click(function(){
     $(".FEATURES").show();
     $(".FEATURES1").css("color", "#3977b9");
     $(".Eligibility1").css("color", "#7b7c7d");
     $(".Money1").css("color", "#7b7c7d");
    $(".Eligibility").hide();
    $(".Money").hide();
});
		$(".Eligibility1").click(function(){
			 $(".Eligibility1").css("color", "#3977b9");
     $(".FEATURES1").css("color", "#7b7c7d");
     $(".Money1").css("color", "#7b7c7d");
     $(".Eligibility").show();
    $(".FEATURES").hide();
    $(".Money").hide();
});

		$(".Money1").click(function(){
			 $(".Money1").css("color", "#3977b9");
     $(".Eligibility1").css("color", "#7b7c7d");
     $(".FEATURES1").css("color", "#7b7c7d");
     $(".Money").show();
    $(".FEATURES").hide();
    $(".Eligibility").hide();
});	
</script>

<script src="js/myscripts.js"></script>
</body>
</html>