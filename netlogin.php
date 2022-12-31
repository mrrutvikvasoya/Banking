<?php
    session_start();
    if(isset($_SESSION['userlogin'])){
      session_destroy();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<link rel="icon" type="image/x-icon" href="img/fevicon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<title>Net Banking</title>
	<style>
		.myfild{
			width: 245px;
    height: 25px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 4px!important;
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
		}
	</style>
</head>
<body style="background: #f2f2f2;">
	<nav>
		<div class="nav-roll">
			<img src="img/logo1.png" alt="logo" class="logo">
			<h3>Business Development & investment Corporation</h3>
		</div>
		<a href="index.php" class="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Home</a>
	</nav>
	<div class="netlogin">
		<h2 class="net_h2">Welcome to BDIC Bank NetBanking</h2>
		<div id="netbanklogin">
		<form action="thank.php" method="POST" id="netbankingloginform">
			<div class="dd-ff">
				<label for="UserID">User ID</label>
				<div class="dd-ff-cc">
		  			<input class="login-form myfild" type="number" id="UserID" name="UserID" onKeyPress="if(this.value.length==9) return false;" required><br>
		  			<span><a href="">Forgot Customer ID</a>
	  			</div>
			</div>
			<div class="dd-ff">
				<label for="Password">Password</label>
				<div class="dd-ff-cc">
	  				<input class="login-form myfild" type="Password" id="Password" name="userPassword" required><br>
	  				<span><a href="">Forgot Password</a></span>
  				</div>
			</div>
			<div class="dd-ff">
				<label for="Password"></label>
				<div class="dd-ff-cc">
	  				<input type="submit" class="loginnetbtn" value="Login" name="loginnet">
  				</div>
			</div>
  		</form>

		<?php
        if (isset($_GET['error']) == "Incorrect%20Value"){
        	$newerror = $_GET['error'];
                echo "<p class='denderok'>$newerror</p>";
        }
        ?>

  		<p>Dear Customer,Welcome to the new login page of BDIC Bank NetBanking.Its lighter look and feel is designed to give you the best possible user experience. Please continue to login using your User ID and password.</p>
  		<div class="dis_flex">
  		<a href="newac.php" class="lininnetban">Not a Account! Open Now</a>
  		<a href="" class="lininnetban">Loan Login!</a>
  		<a href="contactus.php" class="lininnetban">Support</a>
  		</div>
		</div>
	</div>
</body>
</html>