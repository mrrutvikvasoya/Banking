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
	<title>BDIC Loans</title>
	<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 15px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

@media only screen and (max-width: 767px) {
	.hide-div-fet1{
	    width: 85%!important;
	}
}

</style>
</head>
<body>
	<?php include "nav.php";?>
	<div class="contact_fir_div">
		<img src="img/recurring-deposits.jpg" alt="contactus">
		<div class="olkhrmkh">
			<h2 class="olkhrmk">BDIC Deposites<br>High Interest Rate</h2>
			<h3 class="olkhrmk">Starting With 5.50% </h3>
		</div>
	</div>
<?php
$depo = '';
if (isset($_GET['depo'])) {
$depo = $_GET['depo'];
}
?>

<?php 
if ($depo == 'rd' ){
?>
	<div class="minloan">
		<div class="maindivloan">
			<h2>Recurring Deposit</h2>
			<div class="basicdetail">
				<p>Axis Bank's Recurring Deposit helps you build your savings through systematic deposits, every month. Earn a higher interest rate depending on the amount of instalment and the deposit period, on your Recurring Deposit. Open a Recurring Deposit online with minimum monthly instalments of Rs. 500 while the maximum can run into multiples thereof with no maximum limit. Earn interest for a minimum tenure of 6 months or a maximum of 10 years on your Recurring Deposit.</p>
			</div>
			<div class="fir_di">
				<h2>All You Need To Know</h2>
				<hr>
				<p class="nav-d-2 FEATURES1" style="color: #3977b9;">FEATURES</p>
				<p class="nav-d-2 Eligibility1">Eligibility</p>
				<p class="nav-d-2 Money1">Rate</p>
				<hr>
			</div>

			<div class="HideShowdetails">
				<div class="FEATURES homecss">
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth41 unkonown">Build your savings on a regular basis</h4>
						<p>Save through fixed monthly deposits over a fixed period. Total repayable amount, inclusive of interest depends on the instalment amount and the deposit period.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth42 unkonown">Stay compliant with prevalent tax laws</h4>
						<div class="sub_hide_div">
						<p>Tax at source is deducted as per the Income Tax regulations prevalent from time to time. TDS in respect of interest earned on fixed deposits, is deducted on the basis of the total interest projected on the aggregate of fixed deposits of the customer, for the financial year. If the total projected interest in a financial year crosses the TDS Threshold limit INR 40,000/- (INR 50,000/- for Senior Citizen) in a financial year.</p>
						</div>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Facility to encash Term Deposits prematurely</h4>
						<p>For Rupee Term Deposits of a contracted amount less than Rs. 5 crores and for a tenure >2 Years, premature penalty will not be applicable for TDs closed after 15 months of booking/renewal. Deposits eligible for the waiver will be TDs opened/renewed on or after December 15 2020 (excluding Flexi deposits), TDs closed for the entire contracted amount and for Domestic & NRO deposits.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth44 unkonown">Avoid delayed payments</h4>
						<p>-	For Recurring Deposits opened on or after 9th August, 2016, in case of delay in payment of any instalment/s beyond the calendar month, the depositor/s shall be liable to pay a penalty at Rs. 10 per Rs. 1,000 per month for the period of delay. <br>-  For Existing Recurring Deposit Customers, in case of delay in payment of any instalment/s beyond the calendar month, the depositor/s shall be liable to pay a penalty at the existing Business Prime Lending Rate +4% for the period of delay. <br>-  Fraction of a month will be treated as full month for the purpose of calculating such penalty i.e. if the instalment due on 31.05.2011, is paid on 02.06.2011, the delay shall be treated as one month. </p>
					</div>
				</div>
				<div class="Eligibility homecss" style="display:none;">
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth41 unkonown">Below are the individuals and entities eligible for a Regular Fixed Deposit:</h4>
						<p>- Residents</p>
						<p>- Hindu Undivided Families</p>
						<p>- Sole Proprietorship Firms</p>
						<p>- Partnership Firms</p>
						<p>- Limited Companies</p>
						<p>- Trust Accounts</p>
					</div>
				</div>
				<div class="Money homecss" style="display:none;">
				<table id="customers">
				  <tr>
				    <th>Below 6 Month</th>
				    <th>1 Year</th>
				    <th>2 Year</th>
				    <th>3 Year</th>
				    <th>5 Year</th>
				    <th>10 Years Up</th>
				  </tr>
				  <tr>
				    <td>4.00%</td>
				    <td>4.50%</td>
				    <td>4.85%</td>
				    <td>5.00%</td>
				    <td>5.50%</td>
				    <td>6.00%</td>
				  </tr>
				</table>
				</div>
			</div>
		</div>
	</div>
<?php 
} 
if ($depo == 'fd' || !$depo){
?>
	<div class="minloan">
		<div class="maindivloan">
			<h2>Fixed Deposit</h2>
			<div class="basicdetail">
				<p>Digital Fixed Deposit is an industry-first digital Full KYC Fixed Deposit product. Open Digital Fixed Deposit without an Axis Bank Savings Account by providing your basic details. It comes with a host of features like attractive FD interest rates, zero issuance fees and no penalty on premature withdrawal (up to 25% of the amount). A quick and convenient way to save money.</p>
			</div>
			<div class="fir_di">
				<h2>All You Need To Know</h2>
				<hr>
				<p class="nav-d-2 FEATURES1" style="color: #3977b9;">FEATURES</p>
				<p class="nav-d-2 Eligibility1">Eligibility</p>
				<p class="nav-d-2 Money1">Rate</p>
				<hr>
			</div>

			<div class="HideShowdetails">
				<div class="FEATURES homecss">
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth41 unkonown">No Savings Account Required</h4>
						<p>You don’t need BDIC Bank’s Savings Account to open Digital FD</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth42 unkonown">Attractive interest rates & Investment</h4>
						<div class="sub_hide_div">
						<p>interest Starting With 5%</p>
						<p>You can start with an investment amount as low as ₹5,000 and can enjoy a tenure as high as 10 years.</p>
						</div>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Facility to encash Term Deposits prematurely</h4>
						<p>For Rupee Term Deposits of a contracted amount less than Rs. 5 crores and for a tenure >2 Years, premature penalty will not be applicable for TDs closed after 15 months of booking/renewal. Deposits eligible for the waiver will be TDs opened/renewed on or after December 15 2020 (excluding Flexi deposits), TDs closed for the entire contracted amount and for Domestic & NRO deposits.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth44 unkonown">Transfer funds seamlessly between accounts</h4>
						<p>-	Move funds from a Savings Account to a Fixed Deposit to earn higher interest</p>
					</div>

					<div class="hide-div-fet1">
						<h4 class="hide-div-feth44 unkonown">Avail automatic rollover facility</h4>
						<p>-		Only on principal: Only principal is rolled over and interest is credited to a designated account or paid out.</p><p>-	On principal and interest: Both deposit and interest accrued for the same tenure at the interest rate applicable on maturity date.</p><p>-	Auto-renewal option is not available for Fixed Deposit Plus, Tax Saver and deposit booked for Other Legal Entities (Cooperative Societies, Partnership, Limited Liability Partner, Trust, Associations, Club, University, Financial Institution)</p>
					</div>
				</div>
				<div class="Eligibility homecss" style="display:none;">
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth41 unkonown">Below are the individuals and entities eligible for a Regular Fixed Deposit:</h4>
						<p>- Residents</p>
						<p>- Hindu Undivided Families</p>
						<p>- Sole Proprietorship Firms</p>
						<p>- Partnership Firms</p>
						<p>- Limited Companies</p>
						<p>- Trust Accounts</p>
					</div>
				</div>
				<div class="Money homecss" style="display:none;">
				<table id="customers">
				  <tr>
				    <th>Below 6 Month</th>
				    <th>1 Year</th>
				    <th>2 Year</th>
				    <th>3 Year</th>
				    <th>5 Year</th>
				    <th>10 Years Up</th>
				  </tr>
				  <tr>
				    <td>4.00%</td>
				    <td>4.50%</td>
				    <td>5.55%</td>
				    <td>6.00%</td>
				    <td>6.50%</td>
				    <td>7.00%</td>
				  </tr>
				</table>
				</div>
			</div>
		</div>
	</div>
<?php 
} 
if ($depo == 'ts'){
?>
	<div class="minloan">
		<div class="maindivloan">
			<h2>Tax Saver Fixed Deposit</h2>
			<div class="basicdetail">
				<p>Get attractive interest rates on your lump sum investment as well as the benefit of tax saving with Axis Bank's Tax Saver Fixed Deposit. Invest from a minimum amount of Rs. 100 to a maximum of Rs. 1,50,000. The Tax Saving Fixed Deposit comes with 3 options. Choose from Tax Saving - Reinvestment Deposit, Tax Saving - Quarterly Interest Payout or Tax Saving – Monthly Interest Payout depending on the interest pay-out most suitable for you.</p>
			</div>
			<div class="fir_di">
				<h2>All You Need To Know</h2>
				<hr>
				<p class="nav-d-2 FEATURES1" style="color: #3977b9;">FEATURES</p>
				<p class="nav-d-2 Eligibility1">Eligibility</p>
				<p class="nav-d-2 Money1">Rate</p>
				<hr>
			</div>

			<div class="HideShowdetails">
				<div class="FEATURES homecss">
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth41 unkonown">Get tax benefits on interest earned on 5-year deposits</h4>
						<p>The provision of Section 80C of IT Act, 1961 whereby a deduction of up to Rs. 150,000 is allowed while computing total income of an individual or HUF in respect of the life insurance premium, contribution to Provident Fund etc. has been amended to include Fixed Deposits with a scheduled bank, for a period of not less than five years. Accordingly, an individual or HUF shall now be entitled to deduction of up to Rs. 1,50,000 on fixed deposits for the period of five years or more. This exemption shall be part of the Rs. 1,50,000 exemption presently available in respect to life insurance premium, contribution to PF etc.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth42 unkonown">Invest between limits</h4>
						<div class="sub_hide_div">
						<p>Minimum investment is Rs. 100 or multiples thereof Maximum deposit amount is Rs. 1,50,000</p>
						</div>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Forfeit tax benefits on premature closing</h4>
						<p>Minimum lock-in period of 5 years is stipulated to enable the deposit to be assessed as exempt from taxable income u/s 80C of the Income Tax Act. No term deposit will be encashed before the expiry of 5 years from the date of receipt.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth44 unkonown">Stay compliant with prevalent tax laws</h4>
						<p>-	Fixed Deposits with the bank shall be subject to Tax Deduction at source as per Income Tax Act 1961:<br>-  Interest on these term deposits shall be liable to tax under the Act, on the basis of annual accrual or receipt, depending upon the method of accounting followed by the assessee. <br>-  Tax at source is deducted as per the Income Tax regulations prevalent from time to time. TDS with respect to interest earned on Fixed Deposits is deducted on the basis of the total interest projected on the aggregate of Fixed Deposits of the customer, for the financial year</p>
					</div>
				</div>
				<div class="Eligibility homecss" style="display:none;">
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth41 unkonown">Below are the individuals and entities eligible for a Regular Fixed Deposit:</h4>
						<p>- Residents</p>
						<p>- Hindu Undivided Families</p>
						<p>- Sole Proprietorship Firms</p>
						<p>- Partnership Firms</p>
						<p>- Limited Companies</p>
						<p>- Trust Accounts</p>
					</div>
				</div>
				<div class="Money homecss" style="display:none;">
				<table id="customers">
				  <tr>
				    <th>Below 6 Month</th>
				    <th>1 Year</th>
				    <th>2 Year</th>
				    <th>3 Year</th>
				    <th>5 Year</th>
				    <th>10 Years Up</th>
				  </tr>
				  <tr>
				    <td>4.00%</td>
				    <td>4.50%</td>
				    <td>4.85%</td>
				    <td>5.00%</td>
				    <td>5.50%</td>
				    <td>6.00%</td>
				  </tr>
				</table>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
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