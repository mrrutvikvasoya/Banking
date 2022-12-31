<?php
    session_start();
		include "database.php";
    if(isset($_SESSION['userlogin'])){
    	$data=$_SESSION['data'];
    }else{
      header("Location:netlogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Syahrizaldev">
	<link rel="icon" type="image/x-icon" href="img/fevicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/netbank.css">
  <title>Net Banking</title>
</head>

<body oncontextmenu="return false">
<?php
$sql = "SELECT * FROM account WHERE userid = $data";
$data = $conn->query($sql);
while ($row = $data->fetch_row()){
?>
<div class="netbankbdic">
  	<nav class="netnav1">
	  	<ul>
	  		<li><a href="greb.php" target="_blank">Greb Deals</a></li>
	  		<li><a href="expro.php" target="_blank">BDIC Services</a></li>
	  		<li><a href="expro.php" target="_blank">Loans</a></li>
	  		<li><a href="contactus.php" target="_blank">Contact Us</a></li>
	  	</ul>
  	</nav>
  <nav class="netnav2">
  	<div class="d_f_c">
  	 <img src="img/logo1.png">
  	 <div class="netnavf_div">
	  	 <span>Welcome To The'</span>
	  	 <h3>BDIC Net Banking</h3>
	  	 <span style="font-size: 14px;">User Id' <?php echo $row[1] ?></span>
  	 </div>
  	</div>
  	<div class="netnavf_div1">
	  	<div class="netnavf">
	  	 	<div class="netnavfaa">
	  	 		<input type="hidden" id="loginid" data-id="<?php echo $row[0] ?>">
		  	 	<span>Hello' <?php echo $row[8] ?></span>

			  	 <div class="netnavf_subdiv1">
			  	 		<header>
									<nav class="navbar">
										<i  id="menu-toggle" aria="menu" class="fa fa-bars button" aria-hidden="true"></i>
										<nav class="slide-out-menu">
											<div class="menu-panels">
												<div class="primary-menu-panel">
													<ul>
														<li>
															<button type="button" class="menu-link button linkAccounts" data-ref="my-account" >
																Account
																<svg class="arrow-right d-sm-ib" fill="#111" height="30px" width="30px" viewBox="0 0 185.4 300"><path d="M7.3 292.7c-9.8-9.8-9.8-25.6 0-35.4L114.6 150 7.3 42.7c-9.8-9.8-9.8-25.6 0-35.4s25.6-9.8 35.4 0L185.4 150 42.7 292.7c-4.9 4.8-11.3 7.3-17.7 7.3-6.4 0-12.7-2.5-17.7-7.3z"></path></svg>
															</button>
														</li>
														<li>
															<button type="button" class="menu-link button linkFundTransfer" data-ref="help" >
																Fund Transfer
																<svg class="arrow-right d-sm-ib" fill="#111" height="30px" width="30px" viewBox="0 0 185.4 300"><path d="M7.3 292.7c-9.8-9.8-9.8-25.6 0-35.4L114.6 150 7.3 42.7c-9.8-9.8-9.8-25.6 0-35.4s25.6-9.8 35.4 0L185.4 150 42.7 292.7c-4.9 4.8-11.3 7.3-17.7 7.3-6.4 0-12.7-2.5-17.7-7.3z"></path></svg>
															</button>
														</li>
														<li>
															<button type="button" class="menu-link button linkCards" data-ref="Cards" >
																Cards
																<svg class="arrow-right d-sm-ib" fill="#111" height="30px" width="30px" viewBox="0 0 185.4 300"><path d="M7.3 292.7c-9.8-9.8-9.8-25.6 0-35.4L114.6 150 7.3 42.7c-9.8-9.8-9.8-25.6 0-35.4s25.6-9.8 35.4 0L185.4 150 42.7 292.7c-4.9 4.8-11.3 7.3-17.7 7.3-6.4 0-12.7-2.5-17.7-7.3z"></path></svg>
															</button>
														</li>
														<li>
															<button type="button" class="menu-link button linkLoans" data-ref="Loans" >
																Loans
																<svg class="arrow-right d-sm-ib" fill="#111" height="30px" width="30px" viewBox="0 0 185.4 300"><path d="M7.3 292.7c-9.8-9.8-9.8-25.6 0-35.4L114.6 150 7.3 42.7c-9.8-9.8-9.8-25.6 0-35.4s25.6-9.8 35.4 0L185.4 150 42.7 292.7c-4.9 4.8-11.3 7.3-17.7 7.3-6.4 0-12.7-2.5-17.7-7.3z"></path></svg>
															</button>
														</li>
														<li>
															<button type="button" class="menu-link button linkOffers" data-ref="wishlists" >
																Offers
																<svg class="arrow-right d-sm-ib" fill="#111" height="30px" width="30px" viewBox="0 0 185.4 300"><path d="M7.3 292.7c-9.8-9.8-9.8-25.6 0-35.4L114.6 150 7.3 42.7c-9.8-9.8-9.8-25.6 0-35.4s25.6-9.8 35.4 0L185.4 150 42.7 292.7c-4.9 4.8-11.3 7.3-17.7 7.3-6.4 0-12.7-2.5-17.7-7.3z"></path></svg>
															</button>
														</li>
													</ul>
												</div>
											</div>
										</nav>
									</nav>	
							</header>
							<div class="formob">
				  	 <li><p  class="ChangePassword">Change Password</p></li>
			  		 <li><p class="mainlog" onclick="LogOut()">LogOut</p></li>
			  		</div>
		  		 </div>
	  		</div>	
	  		 <div class="netnavf1" id="navforweb">
	  		 	<p id="linkAccounts" class="activemylink linkAccounts">Accounts</p>
		  		 <p id="linkFundTransfer" class="linkFundTransfer">Fund Transfer</p>
		  		 <p id="linkCards" class="linkCards">Cards</p>
		  		 <p id="linkLoans" class="linkLoans">Loans</p>
		  		 <p id="linkOffers" class="linkOffers">Offers</p>
	  		 </div>
  		</div>	
  	</div>
  </nav>
  <div id="data-cont">
	  <div class="sub_nav_net" id="mainAccounts">
		  	<div class="sub_navmain_div">
		  		<div class="menu-drop">
		  			<ul class="ac">
		  				<li  class="Account activelink" id="Summary">Account Summary</li>
		  				<li class="Statement" id="Statement">Statement</li>
		  				<li class="Cheque" id="Book">Cheque Book</li>
		  				<li class="Debit" id="Card">Debit Card</li>
		  			</ul>
		  		</div>
		  	</div>
		  	<div class="sub_main_div" id="content">
		  		<div class="hideAccount">
		  			<h2 class="mainhessd">Account Summary</h2>
		  			<div class="AccountDetais">
		  				<div class="firdivop">
			  				<h3>Saving Account</h3>
			  				<div class="firacdi"><h3>Available Balance:</h3><span> <?php echo $row[26] ?></span>
			  				</div>
		  				</div>
		  				<div class="firdivop1">
		  					<div class="firacdiv"><h4>Account No:</h4><span><?php echo $row[2] ?></span></div>
		  					<div class="firacdiv"><h4>Name:</h4><span><?php echo $row[8] ?></span></div>
		  					<div class="firacdiv"><h4>IFSC Code:</h4><span>BDIC0009300</span></div>
		  				</div>
		  			</div>
		  				<p class="quilin">See Detailed Statement</p>
		  			<div class="preoffer">
		  				<img src="img/preapp.jpg" class="allimgnow" alt="poster2">
		  			</div>
		  		</div>
		  	</div>

		</div>
				  	<?php
  if (isset($_GET['status']) == "LastChange:%20Password%20Change%20faild"){
  	$newerror = $_GET['status'];
          echo "<p class='denderok' style='color:red; margin:0; padding-left:10px;'>$newerror</p>";
  }	
?>
	</div>

<?php
}
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/netbank.js"></script>
<script>
function LogOut() {
	window.location.replace("logout.php");
}
</script>
</body>

</html>