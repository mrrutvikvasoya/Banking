<?php
session_start();
session_destroy();
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
	<title>Open New Account</title>
<style>
	body{
		background: #f2f2f2;
	}
</style>
</head>
<body oncontextmenu="return false">
	<div id="newac">
		<nav>
		<div class="nav-roll">
			<img src="img/logo1.png" alt="logo" class="logo">
			<h3>Business Development & investment Corporation</h3>
		</div>
		<a href="index.php" class="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Home</a>
		</nav>
		<form action="mail.php" method="POST" id="new_ac_form" novalidate enctype="multipart/form-data">
			<div class="newapp">
				<h1 class="OpenAccount">Let’s Open Account</h1>
				<div class="op-ac-flex">
				<div class="steps">
					<div class="step1">
						<h3 class="note">To get an instant Account, use Mobile Number linked to your Aadhaar.</h3>
						<h5 class="note1"><b>Note: </b>Your Mobile Number will get linked to your New Bank Account.</h5>
						<div class="d-f">
							<label for="MobileNumber">Mobile Number</label>
  							<input class="form-control" type="number" id="MobileNumber" name="MobileNumber">
						</div>
						<div class="d-f">
  							<label for="email">Email</label>
  							<input class="form-control" type="text" id="email" name="email" >
  						</div>
  						<div class="d-f">
  							<label for="EnterPAN">Enter PAN</label>
  							<input class="form-control" type="text" id="EnterPAN" name="EnterPAN" >
							</div>
							<div class="d-f">
  							<label for="EnterAadhaar">Enter Aadhaar Number</label>
  							<input class="form-control" type="number" id="EnterAadhaar" name="EnterAadhaar" >
							</div>
							<div class="acceptc">
  							<input class="form-control" type="checkbox" id="Privacy" name="Privacy">
							<label class="lblcheck">I authorize BDIC Bank and its representatives to Call, SMS or communicate via WhatsApp regarding my application. This consent overrides any registration for DNC / NDNC. I confirm I am in India, I am a major and a resident of India and I have read and I accept BDIC Bank's <a href="" class="privacy">Privacy Policy</a></label>
						</div>
						<div class="acceptc d-f-a">
  							<button onclick="proform('step01')" class="btnnext" id="btn1" type="button">NEXT</button>
  							<span class="spanred" style="display:none;">*Enter all Fields Properly</span>
							</div>
					</div>
					<div class="step2" style="display: none;">
						<h3 class="note">Select Account Type And Select State, City and Branch</h3>
						<h5 class="note1"><b>Note: </b>Whichever branch you select, your account will be opened in that branch.</h5>
						<div class="radioac" style="align-items: stretch;display: flex; flex-direction: row;flex-wrap: wrap;"> 
							<div class="radionewac">
							  <input type="radio" id="Current" name="Account" value="Current" checked="checked">
							  <label for="actype">Current Account</label>
							</div>
							  <div class="radionewac">
							  <input type="radio" id="Salary" name="Account" value="Salary">
							  <label for="actype">Salary Account</label>
							</div>
							  <div class="radionewac">
							  <input type="radio" id="Saving" name="Account" value="Saving">
							  <label for="actype">Saving Account</label>
							</div>
							  <div class="radionewac">
							  <input type="radio" id="Child" name="Account" value="Child">
							  <label for="actype">Child Account</label>
							</div>
						</div>
						<div class="d-f">
							<label for="State">State</label>
								  <select name="State" id="State">
									  <option disabled selected value>Select</option>
									  <option value="INDIABRANCH">INDIA BRANCH</option>
									  <option value="Gujarat">Gujarat</option>
								  </select>
						</div>
						<div class="d-f">
							<label for="City">City</label>
								  <select name="City" id="City">
								  	 <option disabled selected value>Select</option>
								    <option value="Surat">Surat</option>
								  </select>
						</div>
						<div class="d-f">
							<label for="Branch">Branch</label>
								  <select name="Branch" id="Branch">
								  	 <option disabled selected value>Select</option>
								  	 <option value="SURAT CITY">Surat City(Main Branch)</option>
								    <option value="YogiChowk">Yogi Chowk</option>
								    <option value="Sarthana">Sarthana</option>
								  </select>
						</div>
						<div class="acceptc d-f-a">
						<button class="btnnext" id="btn2" onclick="proform('step02')" type="button">NEXT</button>
						<span class="spanred" style="display:none;">*Enter all Fields Properly</span>
						</div>
					</div>
					<div class="step3" style="display: none;">
						<h3 class="note">Enter Your Full Details</h3>
						<h5 class="note1"><b>Note: </b>Give your details correct otherwise your account open request Reject due to mismatch.</h5>
						<div class="d-f">
							<label for="FullName">Full Name</label>
  							<input class="form-control" type="text" id="FullName" name="FullName" >
  						</div>
  						<div class="d-f">
							<label for="acimg">Upload Your Photo</label>
 							<input class="form-control" type="file" id="acimg" name="acimg" accept="image/*">
 						</div>
 						<div class="d-f">
 							<label for="birthday">Birthday</label>
  							<input class="form-control" type="date" id="birthday" name="birthday">
  						</div>
  						<div class="d-f">
  							<label for="Gender">Gender</label>
								  <select name="Gender" id="Gender">
								  	 <option disabled selected value>Select</option>
								    <option value="Male">Male</option>
								    <option value="Female">Female</option>
								  </select>
						</div>
						<div class="d-f">
							<label for="marital">marital</label>
								  <select name="marital" id="marital">
								  	 <option disabled selected value>Select</option>
								    <option value="Married">Married</option>
								    <option value="UnMarried">UnMarried</option>
								  </select>	  
						</div>
						<div class="d-f">
							<label for="FatherName">Father Name</label>
  							<input class="form-control" type="text" id="FatherName" name="FatherName" >
  						</div>
  						<div class="d-f">
  							<label for="MotherName">Mother Name</label>
  							<input class="form-control" type="text" id="MotherName" name="MotherName" >
						</div>
						<div class="acceptc d-f-a">
						<button class="btnnext" id="btn3" onclick="proform('step03')" type="button">NEXT</button>
						<span class="spanred" style="display:none;">*Enter all Fields Properly</span>
						</div>
					</div>
					<div class="step4" style="display: none;">
						<h3 class="note">Full Address</h3>
						<h5 class="note1"><b>Note: </b>Give current residential address , our agent verify this address</h5>
						<div class="d-f">
							<label for="FlatNO">Flat NO</label>
  							<input class="form-control" type="text" id="FlatNO" name="FlatNO" >
  						</div>
  						<div class="d-f">
  							<label for="RoadName">Road Name</label>
  							<input class="form-control" type="text" id="RoadName" name="RoadName" >
  						</div>
  						<div class="d-f">
  							<label for="Landmark">Landmark</label>
  							<input class="form-control" type="text" id="Landmark" name="Landmark" >
  						</div>
  						<div class="d-f">
  							<label for="ZipCode">Zip Code</label>
  							<input class="form-control" type="number" id="ZipCode" name="ZipCode" >
  						</div>
  						<div class="d-f">
  							<label for="city">City</label>
  							<input class="form-control" type="text" id="city1" name="city1" >
  						</div>
  						<div class="d-f">
  							<label for="State">State</label>
  							<input class="form-control" type="text" id="State1" name="State1" >
  						</div>
						<div class="acceptc">
							<label for="Permanent">This is my Permanent Address</label>
						</div>
						<div class="acceptc d-f-a">
						<button class="btnnext" id="btn4" onclick="proform('step04')" type="button">NEXT</button>
						<span class="spanred" style="display:none;">*Enter all Fields Properly</span>
						</div>
					</div>
					<div class="step5" style="display: none;">
						<h3 class="note">Employment Status</h3>
						<h5 class="note1"><b>Note: </b>We will decide your transaction limit basis on employment status</h5>
						<div class="d-f">
							<label for="employment">employment</label>
	  							<select id="employment"  name="employment">
	  								<option disabled selected value>Select</option>
								  <option value="SelfEmployed.">Self Employed</option>
								  <option value="CasualwageLabourers">Casual wage Labourers</option>
								  <option value="Salaried">Salaried</option>
								  <option value="Student">Student</option>
								  <option value="Other">Other</option>
								</select>
						</div>
						<div class="d-f">
							<label for="Source">Source of Fund</label>
	  							<select id="Source"  name="Source">
	  								<option disabled selected value>Select</option>
								  <option value="Retainedearnings">Retained earnings.</option>
								  <option value="Debtcapital">Debt capital</option>
								  <option value="Equitycapital">Equity capital</option>
								  <option value="income">Income</option>
								</select>
						</div>
						<div class="d-f">
							<label for="Annualincome">Annual income</label>
  							<input class="form-control" type="text" id="Annualincome" name="Annualincome" >
						</div>
						<div class="acceptc d-f-a">
							<button class="btnnext" id="btn5" onclick="proform('step05')" type="button">NEXT</button>
							<span class="spanred" style="display:none;">*Enter all Fields Properly</span>
						</div>
					</div>
					<div class="step6" style="display: none;">
						<h3 class="note">Upload Proof</h3>
						<h5 class="note1"><b>Note: </b>Give current Images in JPG,PNG,JPEG , our agent verify All Proofs than Your account open</h5>
							<div class="d-f">
								<label for="Adharcard">Upload Adharcard</label>
	 							<input class="form-control" type="file" id="Adharcard" name="Adharcard" accept="image/*">
							</div>
							<div class="d-f">
								<label for="PanCard">Upload PanCard</label>
	 							<input class="form-control" type="file" id="PanCard" name="PanCard" accept="image/*">
							</div>
							<div class="d-f">
	 							<label for="AddressProof">Upload Address Proof</label>
	 							<input class="form-control" type="file" id="AddressProof" name="AddressProof" accept="image/*">
							</div>
							<div class="g-recaptcha" data-sitekey="6LeusIYgAAAAAAYnP1yZeYSHuHZBE2zYE7204Xz_"></div>
						<div class="acceptc d-f-a">
							<button class="btnnext" id="btn5" onclick="proform('step06')" type="button">NEXT</button>
 							<span class="spanred" style="display:none;">*Enter all Fields Properly</span>
						</div>
					</div>
					<div class="end-of-ac">
						<div class="step7 end-ac" style="display: none;">
							<h1>Signature</h1>
							<h5 class="note1" style="font-size: 16px; margin-bottom: 5px;"><b>Note: </b>For some real world personal identification, signature can be used for personal identification. It is used for authentication or concluding document. In order to reduce frauds in banks, signature verification is very much important. It increases accuracy and efficiency.</h5>
							<h5 class="note1" style="font-size: 16px; margin-bottom: 5px;">The signature on a bank signature card is a verification tool for bank tellers and employees; they use your bank card signature to compare your signature on endorsements of checks and withdrawal slips.</h5>
							<h5 class="note1" style="font-size: 16px; margin-bottom: 5px;"> If you change your name, for example, you’ll want to call your bank to reflect this change on all banking documents. You’ll also want to inquire how to update your bank signature card if your name change has altered your signature.</h5>
							<div class="d-f d-f-all">
	 							<label for="AddressProof">Upload Signature *</label>
	 							<div style="display: flex;">
	 								<input class="form-control" type="file" id="Signature" name="Signature" accept="image/*">
	 								<span class="el-finds" style=" color: red; display: none;"><b>Upload Your Signature</b></span>
	 							</div>
							</div>
							<h1>Add Fund In Your Account</h1>
								<label for="AddFund">Add Funds</label>
								<div style="display: flex;">
		  						<input class="form-control" type="number" id="AddFund" name="AddFund">
		  						<span class="el-find" style=" color: red; display: none;"><b>Enter Valid Amount between 1,000 to 99,999</b></span>
		  						</div>
		  						<button onclick="proform('AddFundmet')" class="btnnext" id="AddFundmet" type="button">Add Funds</button>
						</div>
						<div class="add-fun end-ac" style="display: none;">
								<div class="container preload">
								  <div class="creditcard">
								    <div class="front">
								      <div id="ccsingle"></div>
								      <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
								        <g id="Front">
								          <g id="CardBackground">
								            <g id="Page-1_1_">
								              <g id="amex_1_">
								                <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
								                            C0,17.9,17.9,0,40,0z" />
								              </g>
								            </g>
								            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
								          </g>
								          <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
								          <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">My Name</text>
								          <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">cardholder name</text>
								          <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiration</text>
								          <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">card number</text>
								          <g>
								            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
								            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
								            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
								            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
								          </g>
								          <g id="cchip">
								            <g>
								              <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
								                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
								            </g>
								            <g>
								              <g>
								                <rect x="82" y="70" class="st12" width="1.5" height="60" />
								              </g>
								              <g>
								                <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
								              </g>
								              <g>
								                <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
								                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
								                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
								                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
								                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
								              </g>
								              <g>
								                <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
								              </g>
								              <g>
								                <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
								              </g>
								              <g>
								                <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
								              </g>
								              <g>
								                <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
								              </g>
								            </g>
								          </g>
								        </g>
								        <g id="Back">
								        </g>
								      </svg>
								    </div>
								    <div class="back">
								      <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
								        <g id="Front">
								          <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
								        </g>
								        <g id="Back">
								          <g id="Page-1_2_">
								            <g id="amex_2_">
								              <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
								                        C0,17.9,17.9,0,40,0z" />
								            </g>
								          </g>
								          <rect y="61.6" class="st2" width="750" height="78" />
								          <g>
								            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
								                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
								            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
								            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
								            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
								          </g>
								          <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
								          <g class="st8">
								            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">security code</text>
								          </g>
								          <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
								          <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
								          <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">John Doe</text>
								        </g>
								      </svg>
								    </div>
								  </div>
								</div>
								<div class="form-container">
								  <div class="field-container">
								    <label for="name">Name</label>
								    <input id="name" maxlength="20" type="text">
								  </div>
								  <div class="field-container">
								    <label for="cardnumber">Card Number</label><span id="generatecard">generate random</span>
								    <input id="cardnumber" type="text" pattern="[0-9]*" inputmode="numeric">
								    <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    </svg>
								  </div>
								  <div class="field-container">
								    <label for="expirationdate">Expiration (mm/yy)</label>
								    <input id="expirationdate" type="text" pattern="[0-9]*" inputmode="numeric">
								  </div>
								  <div class="field-container">
								    <label for="securitycode">Cvv</label>
								    <input id="securitycode" type="text" pattern="[0-9]*" inputmode="numeric">
								  </div>
								  <div class="field-container">
								  	<button onclick="proform('paynow')" type="button" class="btnnext" id="PayNow" style="width: 130px;">Pay Now</button>
								  </div>
								  <span class="el-findos" style=" color: red; display: none;"><b>Enter Valid Card Details</b></span>
								</div>
						</div>
						<div class="mar-pro">
						<li class="pay-status" style="display: none;">Payment Is Processing</li> </div>
						<div class="mar-pro">
						<li class="pay-status-c" style=" display: none;">Payment Confirm</li></div>
						<div class="ac-com" style="display: none;">
							<input type="submit" class="btnnext btnsub" value="Submit" name="submit">
							<h5 class="note1 spe-f-s"><b>Note: </b>To click Submit button all Details Send to our branch, review by our agent If your all details correct than account open otherwise account opening request decliend</h5>
						</div>
					</div>
				</div>
				<div class="step1other">
						<div class="other-li"><img src="img/sav.png" alt="img" class="other-li-img"><h3>No queues, Just Smart & Secure Account</h3></div>
						<div>
							<ul>
								<li><img src="img/tick.png" alt="img" class="tick">Add & Send money online</li>
								<li><img src="img/tick.png" alt="img" class="tick">High Cashback on Our Debitcard</li>
								<li><img src="img/tick.png" alt="img" class="tick">Pre-approved offer In Creditcards</li>
								<li><img src="img/tick.png" alt="img" class="tick">Card less cash withdrawals</li>
								<li><img src="img/tick.png" alt="img" class="tick">Free RTGS & NEFT</li>
								<li><img src="img/tick.png" alt="img" class="tick">Quick Customer Support</li>
								<li><img src="img/tick.png" alt="img" class="tick">E Passbook & NetBanking </li>
								<li><img src="img/tick.png" alt="img" class="tick">Get minimum 4% on your saving account</li>
							</ul>
						</div>
				</div>
				</div>
			</div>
		</form>

	</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
<script src="js/myscripts.js"></script>
<script src="js/card.js"></script>
</body>
</html>