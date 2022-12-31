<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="img/fevicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<title>404 Error BDIC BANK</title>

</head>
<body style="background: white;">
	<div class="e404">
		<nav>
		<div class="nav-roll">
			<img src="img/logo1.png" alt="logo" class="logo">
			<h3>Business Development & investment Corporation</h3>
		</div>
		<a href="index.php" class="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Home</a>
		</nav>
		<div class="error">
			<img class="image404" src="img/404animation.gif" alt="404 error gif">
		</div>
		<div class="errorm">
			<a href="index.php" class="backtohome">Back To HOME Page</a>
		</div>
	</div>
</body>
</html>