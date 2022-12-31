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
	<link rel="icon" type="image/x-icon" href="img/fevicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<title>Grab Deals</title>
</head>
<body>
<?php include "nav.php";?>
	<div class="contact_fir_div">
		<img src="img/poster.jpg" alt="contactus">
		<div class="olkhrmkh">
			<h2 class="olkhrmk">Offers so good, <br>everybody wants a piece.</h2>
			<h3 class="olkhrmk">Grab them while you can!</h3>
		</div>
	</div>
	<div class="grabheading">
		<div class="grabheadingSec">
			<p>Earn when you spend with exciting</p>
			<h2>Cashback Offers</h2>
			<p class="subTitle">Access a plethora of incredible cashback offers <br>from brands you love.</p>
			<div class="workBtn">
				<a href="#index_1" class="open_new_ac">Banking Channel</a>
			</div>
		</div>
		<div class="grabheadingSec1">
			<div class="gallery index_3">
			
			<div class="g1">
				<img style="height: 200px;" src="img/amazon.png" alt="image"> 
				<div class="gh3">
					<h3>Get Upto 5% Cashback <br> on Credit & debit card</h3>
					<a class="g1_but" href="https://amazon.in" target="_blank">Know More</a>
				</div>
			</div>
			<div class="g1">
				<img class="galimg" src="img/Flipkart.png" alt="gallery photo">
				<div class="gh3">
					<h3 >Get Upto 10% Cashback <br> on Credit Card</h3>
					<a class="g1_but" href="https://flipkart.com" target="_blank">Know More</a>
				</div>
			</div>
			<div class="g1">
				<img src="img/ajio.png" alt="image">
				<div class="gh3">
					<h3>Get 500rs off <br> on First Order</h3>
					<a class="g1_but" href="https://ajio.com" target="_blank">Know More</a>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="bankchel" id="index_1">
		<div class="grabheadingSec grabheadingSec00">
			<p>Get rewarded on using any</p>
			<h2>Banking Channel</h2>
			<p class="subTitle">Find deals you love via your favourite mode of payment.</p>
		</div>
		<div class="index_1" >
			<div class="quick_apply">
				<div href="" id="quick_apply1" class="quick_apply1 qa-q1">
					<img class="qa_img" src="img/card.png" alt="image">
					<p class="qa_mar_1">Credit Card</p>
				</div>
				<div href="" id="quick_apply1" class="quick_apply1 qa-q2">
					<img class="qa_img" src="img/debit.png" alt="image">
					<p class="qa_mar_2">Debit Card</p>
				</div>
				<div href="" id="quick_apply1" class="quick_apply1 qa-q3">
					<img class="qa_img" src="img/Prepaid.png" alt="image">
					<p class="qa_mar_3">Prepaid Card</p>
				</div>
				<div href="" id="quick_apply1" class="quick_apply1 qa-q4">
					<img class="qa_img" src="img/upi.png" alt="image">
					<p class="qa_mar_4">Upi</p>
				</div>
			</div>
		</div>
	</div>

<div class="grebdealoffeblog">
	<div class="grabheadingSec grabheadingSec00">
		<p>The clock is ticking!</p>
		<h2>Limited Period Offers</h2>
		<p class="subTitle">Enjoy these incredible deals while they last! We’d hate to see you miss out.</p>
	</div>
	<div class="cards-list">
		<div class="card 1">
		  <div class="card_image"> <img src="img/bonus.png"/></div>
		  <div class="card_title title-white">
		    <p>Earn & redeem REWARDS when shopping with BDIC Bank Card</p>
		  </div>
		</div>
		<div class="card 1">
		  <div class="card_image"> <img src="img/dnigh.png" /></div>
		  <div class="card_title title-white">
		    <p>Treat yourself and get 30% off at partner restaurants</p>
		  </div>
		</div>
		<div class="card 1">
		  <div class="card_image"> <img src="img/shpppskmdksm.png" /></div>
		  <div class="card_title title-white">
		    <p>Shop online with Our link And get cashback on card</p>
		  </div>
		</div>
	</div>
</div>
<?php include "footer.php";?>
<script src="js/myscripts.js"></script>
</body>
</html>