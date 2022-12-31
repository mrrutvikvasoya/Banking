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

	<title>Business Development and investment Corporation</title>
</head>
<body>

<div id="index">
	<?php include "nav.php";?>
		<div class="slideshow-container">
			<div class="sli-mar">
			<div class="mySlides fade">
			  <img class="slider_img" src="img/fix.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <img class="slider_img" src="img/25980245.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <img class="slider_img" src="img/30262818.jpg" style="width:100%">
			</div>
			</div>
		</div>
		<div style="text-align:center; display: none;">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>

		<div class="index_1">
			<div class="qa-first-div">
				<h2 class="qc-h2"><span class="index-head-span">Products </span>to meet your life goals</h2>
			</div>
			<div class="quick_apply">
				<a href="products.php" class="quick_apply1 qa-q1">
					<img class="qa_img" style="width:90px;" src="img/saving.png" alt="image">
					<p class="qa_mar_1">Digital Savings Account</p>
				</a>
				<a href="loansdetails.php?loan=home" class="quick_apply1 qa-q2">
					<img class="qa_img" src="img/home.png" alt="image">
					<p class="qa_mar_2">Home Loan</p>
				</a>
				<a href="creditcard.php" class="quick_apply1 qa-q3">
					<img class="qa_img" src="img/card.png" alt="image">
					<p class="qa_mar_3">Credit Card</p>
				</a>
				<a href="contactus.php" class="quick_apply1 qa-q4">
					<img class="qa_img" style="width:70px; margin-top: 5px;" src="img/contact.png" alt="image">
					<p class="qa_mar_4">Contact Us</p>
				</a>
			</div>
		</div>
		<div class="index_2">
			<div class="i2firdiv i2firdiv1">
				<div class="i2div i2div1">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
					<p>Credit card</p>
				</div>
				<a href="netlogin.php" class="index_2_link">Apply</a>
			</div>
			<div class="i2firdiv i2firdiv2">
				<div class="i2div">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					<p>Shopping With Us</p>
				</div>
				<a href="greb.php" target="_blank" class="index_2_link">Get cashback</a>
			</div>
		</div>
		<h2 id="containerh2">Ways To Bank</h2>
		<div id="container">
			  <div id="slider-container">
			    <span onclick="slideRight()" class="btn"></span>
			      <div id="slider">
			        <div class="slide">
			        	<h2 class="note">Mobile Banking</h2>
			        	<img src="img/m1.webp" class="slideimg" alt="image">
			        	<p class="note1">One app for all you need</p>
			        </div>
			        <div class="slide slide">
			        	<h2 class="note">Bank In Person</h2>
			        	<img src="img/m2.webp" class="slideimg" alt="image">
			        	<p class="note1">Seamless banking</p>
			        </div>
			        <div class="slide slide">
			        	<h2 class="note">best Service</h2>
			        	<img src="img/m3.webp" class="slideimg" alt="image">
			        	<p class="note1">Best customer service</p>
			        </div>
			        <div class="slide slide">
			        	<h2 class="note">Social Banking</h2>
			        	<img src="img/m4.webp" class="slideimg" alt="image">
			        	<p class="note1">help in Social media</p>
			        </div>
			        <div class="slide slide">
			        	<h2 class="note">Card less Cash</h2>
			        	<img src="img/m5.webp" class="slideimg" alt="image">
			        	<p class="note1">CashWithdrow</p>
			        </div>
			        <div class="slide slide">
			        	<h2 class="note">Net Banking</h2>
			        	<img src="img/m7.webp" class="slideimg" alt="image">
			        	<p class="note1">One web for all you need</p>
			        </div>
			        <div class="slide slide">
			        	<h2 class="note">What's app</h2>
			        	<img src="img/m8.webp" class="slideimg" alt="image">
			        	<p class="note1">to perform small works</p>
			        </div>
			        <div class="slide">
			        	<h2>View all</h2>
			        </div>
			    </div>
			    <span onclick="slideLeft()" class="btn"></span>
			  </div>
			  <div id="slider-container1">
			  	<div class="container1">
			  		<div class="slide">
			        	<h2 class="note">Premier</h2>
			        	<img src="img/per.webp" class="slideimg" alt="">
			        	<p class="note1">Personal banking person</p>
			        </div>
			        <div class="slide">
			        	<h2 class="note">Welth</h2>
			        	<img src="img/wel.webp" class="slideimg" alt="">
			        	<p class="note1">Create Welth with BDIC</p>
			        </div>
			    </div>
			  </div>
		</div>
		<div class="qa-first-div">
				<h2 class="qc-h2"><span class="index-head-span">Deals That Will </span>Interest You </h2>
			</div>
		<div class="gallery index_3">
			
			<div class="g1">
				<img style="height: 200px;" src="img/amazon.png" alt="image"> 
				<div class="gh3">
					<h3>Get Upto 5% Cashback <br> on Credit & debit card</h3>
					<a class="g1_but" href="https://www.amazon.in" target="_blank">Know More</a>
				</div>
			</div>
			<div class="g1">
				<img class="galimg" src="img/Flipkart.png" alt="gallery photo">
				<div class="gh3">
					<h3 >Get Upto 10% Cashback <br> on Credit Card</h3>
					<a class="g1_but" href="https://www.flipkart.in" target="_blank">Know More</a>
				</div>
			</div>
			<div class="g1">
				<img src="img/ajio.png" alt="image">
				<div class="gh3">
					<h3>Get 500rs off <br> on First Order</h3>
					<a class="g1_but" href="https://www.ajio.com" target="_blank">Know More</a>
				</div>
			</div>
		</div>
		<div class="artic">
			<h2>Recommended For You</h2>
			<div class="cards-list">
				<div class="card 1">
				  <div class="card_image"> <img src="img/1cre.jpg"/></div>
				  <div class="card_title title-white">
				    <p>Get a Creditcard Online</p>
				  </div>
				</div>
				<div class="card 1">
				  <div class="card_image"> <img src="img/how-to-activate.webp" /></div>
				  <div class="card_title title-white">
				    <p>Active Debit & Credit Card Online</p>
				  </div>
				</div>
				<div class="card 1">
				  <div class="card_image"> <img src="img/GettyImages.webp" /></div>
				  <div class="card_title title-white">
				    <p>Redeeming Reward Points</p>
				  </div>
				</div>
				<div class="card 1">
				  <div class="card_image"> <img src="img/cred.jpg" /></div>
				  <div class="card_title title-white">
				    <p>Get Lifetime Free Credit Card</p>
				  </div>
				</div>
			</div>
		</div>

		<marquee width="100%" direction="left" height="30px" style="color: red; font-weight: bold;">
		According to the Income Tax website, “As per CBDT circular F.No. 370142/14/22-TPL dated on 30th March 2022, every person who has been allotted a PAN as on 1st July 2017 and is eligible to obtain Aadhaar number is required to link PAN with AADHAAR on or before 31st March, 2022.
		</marquee>

		<?php include "footer.php";?>
		
</div>
	<?php include "popup.php";?>
<script type="text/javascript" src="js/myscripts.js"></script>
<script>

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>


<script>
var container = document.getElementById('container')
var slider = document.getElementById('slider');
var slides = document.getElementsByClassName('slide').length;
var buttons = document.getElementsByClassName('btn');


var currentPosition = 0;
var currentMargin = 0;
var slidesPerPage = 0;
var slidesCount = slides - slidesPerPage;
var containerWidth = container.offsetWidth;
var prevKeyActive = false;
var nextKeyActive = true;

window.addEventListener("resize", checkWidth);

function checkWidth() {
    containerWidth = container.offsetWidth;
    setParams(containerWidth);
}

function setParams(w) {
    if (w < 551) {
        slidesPerPage = 1;
    } else {
        if (w < 901) {
            slidesPerPage = 2;
        } else {
            if (w < 1101) {
                slidesPerPage = 3;
            } else {
                slidesPerPage = 4;
            }
        }
    }
    slidesCount = slides - slidesPerPage;
    if (currentPosition > slidesCount) {
        currentPosition -= slidesPerPage;
    };
    currentMargin = - currentPosition * (100 / slidesPerPage);
    slider.style.marginLeft = currentMargin + '%';
    if (currentPosition > 0) {
        buttons[0].classList.remove('inactive');
    }
    if (currentPosition < slidesCount) {
        buttons[1].classList.remove('inactive');
    }
    if (currentPosition >= slidesCount) {
        buttons[1].classList.add('inactive');
    }
}

setParams();

function slideRight() {
    if (currentPosition != 0) {
        slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
        currentMargin += (100 / slidesPerPage);
        currentPosition--;
    };
    if (currentPosition === 0) {
        buttons[0].classList.add('inactive');
    }
    if (currentPosition < slidesCount) {
        buttons[1].classList.remove('inactive');
    }
};

function slideLeft() {
    if (currentPosition != slidesCount) {
        slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
        currentMargin -= (100 / slidesPerPage);
        currentPosition++;
    };
    if (currentPosition == slidesCount) {
        buttons[1].classList.add('inactive');
    }
    if (currentPosition > 0) {
        buttons[0].classList.remove('inactive');
    }
};
</script>
</body>
</html>