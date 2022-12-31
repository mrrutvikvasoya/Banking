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
		<img src="img/loansimg.jpg" alt="contactus">
		<div class="olkhrmkh">
			<h2 class="olkhrmk">Explore Loans with<br>Low Interest Rate</h2>
			<h3 class="olkhrmk">Starting With 10.50% </h3>
		</div>
	</div>
<?php
$loans = '';
if (isset($_GET['loan'])) {
$loans = $_GET['loan'];
}
?>

<?php 
if ($loans == 'home' || !$loans){
?>
	<div class="minloan">
		<div class="maindivloan">
			<h2>Home Loan</h2>
			<div class="basicdetail">
				<p>Fulfil your dream of owning a home with the BDIC Bank Home Loan which offers home loans starting at Rs. 3,00,000. The BDIC Bank Home Loan comes with a host of benefits such as smaller EMIs where you can space out your payment over a longer tenure, attractive interest rates, an easy application process, doorstep service, etc. Find out more about the BDIC Bank Home Loan below.</p>
			</div>
			<h2>Home Loan Details</h2>
			<div class="moredetailin">
				<table id="customers">
				  <tr>
				    <td>Loan Amount</td>
				    <td>Up to Rs 5 crore</td>
				  </tr>
				  <tr>
				    <td>Loan Tenure</td>
				    <td>Up to 30 years</td>
				  </tr>
				  <tr>
				    <td>Floating Interest Rate</td>
				    <td>8.10% - 8.45%</td>
				  </tr>
				  <tr>
				    <td>Fixed Interest Rate</td>
				    <td>14%</td>
				  </tr>
				  <tr>
				    <td>Processing Fee</td>
				    <td>Up to 1% of the loan amount +GST (minimum Rs 10,000) (Null IN BDIC Special Saving Account)</td>
				  </tr>
				</table>
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
						<h4 class="hide-div-feth41 unkonown">Avail attractive interest rates</h4>
						<p>Make your home loan affordable and easier on your pocket every month with attractive home loan interest rates.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth42 unkonown">Pay no prepayment charges</h4>
						<div class="sub_hide_div">
						<p>No prepayment charges for paying off your home loan before the due date (only for loans availed at floating rate of interest)</p>
						</div>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Be assured of quick, transparent processing</h4>
						<p>Premium banking customers can contact their Relationship Manager for details of special benefits.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth44 unkonown">Repay your loan over a longer tenure</h4>
						<p>Repay your home loan in smaller EMIs, over a longer tenure, depending on the situation of your finances.</p>
					</div>
				</div>
				<div class="Eligibility homecss" style="display:none;">
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth41 unkonown">Salaried individuals eligible for home loan</h4>
						<p>- Applicants should be above 21 years of age at the time of loan commencement and up to the age of 60 or superannuation, whichever is earlier at the time of loan maturity. You can check the amount you need to pay as EMI with the Home Loan EMI Calculator.</p>
						<p>- Individuals in permanent service in the Government or reputed companies fall under the home loan eligibility criteria.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth42 unkonown">Professionals eligible for home loan</h4>
						<div class="sub_hide_div">
						<p>- Professionals (i.e., doctors, engineers, dentists, architects, chartered accountants, cost accountants, company secretary, and management consultants only) meet the Axis Bank Home Loan eligibility criteria.</p>
						<p>- Applicants above 21 years of age at the time of home loan commencement and up to 65 years or less at the time of home loan maturity meet our home loan eligibility criteria.</p>
						</div>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Self-employed individuals eligible for home loan</h4>
						<p>- Any individual filing income tax returns can apply</p>
						<p>- Applicants should be above 21 years of age at the time of the commencement of the home loan and up to 65 years or less at the time of maturity of the home loan</p>
					</div>

					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Home Loan Borrowing Limits</h4>
						<p>- Minimum - Rs. 3 lakhs</p>
						<h4 class="hide-div-feth43 unkonown">Margins</h4>
						<p>- For home loan upto Rs. 30 Lakhs - 10%</p>
						<p>- For home loan above Rs. 30 Lakhs upto Rs. 75 Lakhs - 20%</p>
						<p>- For loan above Rs. 75 Lakhs - 25%</p>
					</div>
				</div>
				<div class="Money homecss" style="display:none;">
				<table id="customers">
				  <tr>
				    <th>Type</th>
				    <th>Repo Rate + Spread</th>
				    <th>Effective Rate of Interest</th>
				  </tr>
				  <tr>
				    <td>Floating Rate</td>
				    <td>Repo Rate + 2.70% to Repo Rate + 3.05%	</td>
				    <td>8.60% - 8.95% p.a.</td>
				  </tr>
				  <tr>
				    <td>Fixed Rate	</td>
				    <td>All Loan Amounts	</td>
				    <td>14% p.a.</td>
				  </tr>
				</table>
				</div>
			</div>
		</div>
	</div>
<?php 
} 
if ($loans == 'car'){
?>
	<div class="minloan">
		<div class="maindivloan">
			<h2>Car Loan</h2>
			<div class="basicdetail">
				<p>Looking to buy a new car? BDIC Bank’s New Car Loan offers car loans from Rs. 1 Lakh upto 100% on-road funding along with a host of benefits that include attractive interest rates, comfortable tenure, BDIC eDGE Reward points, etc Before applying for a car loan online, make sure to use the car loan calculator to find out your EMI. Apply for an BDIC Bank New Car Loan and make your dream of owning a car come true</p>
			</div>
			<h2>Car Loan Details</h2>
			<div class="moredetailin">
				<table id="customers">
				  <tr>
				    <td>Car Loan Amount</td>
				    <td>Up to Rs 1 crore</td>
				  </tr>
				  <tr>
				    <td>Loan Tenure</td>
				    <td>Up to 5 years</td>
				  </tr>
				  <tr>
				    <td>Floating Interest Rate</td>
				    <td>6.10% - 7.45%</td>
				  </tr>
				  <tr>
				    <td>Fixed Interest Rate</td>
				    <td>10%</td>
				  </tr>
				  <tr>
				    <td>Processing Fee</td>
				    <td>Up to 1% of the loan amount +GST (minimum Rs 10,000) (Null IN BDIC Special Saving Account)</td>
				  </tr>
				</table>
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
						<h4 class="hide-div-feth41 unkonown">Get high-value car loans</h4>
						<p>Avail funding from Rs. 1,00,000 upto 100% on-road funding for Up to 7 years*.</p>
						<h4 class="hide-div-feth41 unkonown">Attractive scheme for Electric vehicle funding</h4>
						<p>50 bps lower rate of interest on car loan for Electric</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth42 unkonown">Easily calculate Car Loan value</h4>
						<div class="sub_hide_div">
						<p>Value calculated on ex-showroom / on-road price of the vehicle. Calculate your monthly outgoing with the car loan EMI calculator.</p>
						</div>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Instant sanction</h4>
						<p>Pre-qualified customers can avail Instant sanction for their Car Loan.</p>
						<p>Avail upto 100% on-road price funding on select models.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth44 unkonown">Repay your loan over a longer tenure</h4>
						<p>Repay your Car loan in smaller EMIs, over a longer tenure, depending on the situation of your finances.</p>
					</div>
				</div>
				<div class="Eligibility homecss" style="display:none;">
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth41 unkonown">Salaried individuals eligible for home loan</h4>
						<p>- Minimum 21 years of age</p>
						<p>- Maximum 60 years of age at maturity (conditions apply)</p>
						<p>- Minimum Net Annual Salary of Rs. 2,40,000 p.a. for all approved car models</p>
						<p>- Income eligibility based on latest salary slip and Form 16</p>
						<p>- Minimum of 1 year continuous employment</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth42 unkonown">Professionals eligible for home loan</h4>
						<div class="sub_hide_div">
						<p>- Minimum 18 years of age</p>
						<p>- Maximum 65 years of age at maturity (conditions apply)</p>
						<p>- Minimum Net Annual Salary of Rs. 1,80,000 p.a. for all approved car models</p>
						<p>- Income eligibility based on latest salary slip and Form 16</p>
						<p>- Minimum of 3 year continuous employment in the same line of business</p>
						</div>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">BDIC Special customers eligible for a car loan</h4>
						<p>- Customers with a vintage of 6 months</p>
						<p>- Maximum loan amount restricted to 3 times the AQB in the last 2 quarters</p>
					</div>
				</div>
				<div class="Money homecss" style="display:none;">
				<table id="customers">
				  <tr>
				    <th>1 Yr MCLR</th>
				    <th>Spread over MCLR</th>
				    <th>Effective ROI Range	</th>
				    <th>Reset	</th>
				    <th>Processing Fee	</th>
				    <th>Documentation Charges</th>
				  </tr>
				  <tr>
				    <td>8.45%</td>
				    <td>0.0%-4.60%</td>
				    <td>8.45%-13.05%</td>
				    <td>No Reset</td>
				    <td>Rs. 3500 – Rs. 5500</td>
				    <td>	Rs. 500</td>
				  </tr>
				</table>
				</div>
			</div>
		</div>
	</div>
<?php 
} 
if ($loans == 'personal'){
?>
	<div class="minloan">
		<div class="maindivloan">
			<h2>Personal Loan</h2>
			<div class="basicdetail">
				<p>BDIC Bank Personal Loans offer fast processing of your loan. Personal Loans can be used for plenty of purposes! They can be availed when you are planning a vacation, renovating your home or arranging a dream wedding for yourself or somebody special in the family. Now you need not postpone things on your bucket list! You can get a Personal Loan from Rs. 50,000 upto Rs. 40,00,000 with minimal documentation and speedy approval from BDIC Bank. Also, you can transfer your existing high interest Personal Loan to BDIC Bank as well. With a quick approval on Personal Loans, turn your dreams into reality!</p>
			</div>
			<h2>Personal Loan Details</h2>
			<div class="moredetailin">
				<table id="customers">
				  <tr>
				    <td>Loan Amount</td>
				    <td>Up to Rs 1 crore</td>
				  </tr>
				  <tr>
				    <td>Loan Tenure</td>
				    <td>Up to 10 years</td>
				  </tr>
				  <tr>
				    <td>Floating Interest Rate</td>
				    <td>12.10% - 15.45%</td>
				  </tr>
				  <tr>
				    <td>Fixed Interest Rate</td>
				    <td>19%</td>
				  </tr>
				  <tr>
				    <td>Processing Fee</td>
				    <td>Up to 1.5% of the loan amount +GST (minimum Rs 10,000) (0.5% For BDIC Special Saving Account)</td>
				  </tr>
				</table>
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
						<h4 class="hide-div-feth41 unkonown">Meet all your aspirations</h4>
						<p>Get assistance from BDIC Bank Personal Loans and don’t let the need for money hold you back.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth42 unkonown">Choose your need</h4>
						<div class="sub_hide_div">
						<p>Get a Personal Loan between Rs. 50,000 to Rs. 40,00,000.</p>
						<p>The repayment tenure of your Personal Loan can range from 12 to 60 months.</p>
						</div>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Hassle-free Personal Loan</h4>
						<p>Application requires minimal documentation, and approval is speedy.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth44 unkonown">Transfer existing loans</h4>
						<p>Move your existing high-interest personal loan to Axis Bank.</p>
					</div>
				</div>
				<div class="Eligibility homecss" style="display:none;">
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth41 unkonown">Salaried individuals eligible for home loan</h4>
						<p>- Applicants should be above 21 years of age at the time of loan commencement and up to the age of 60 or superannuation</p>
						<p>- Individuals in permanent service in the Government or reputed companies fall under the home loan eligibility criteria.</p>
					</div>
									
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Self-employed individuals eligible for home loan</h4>
						<p>- Any individual filing income tax returns can apply</p>
						<p>- Applicants should be above 21 years of age at the time of the commencement of the home loan and up to 65 years or less at the time of maturity of the home loan</p>
					</div>
				</div>
				<div class="Money homecss" style="display:none;">
				<table id="customers">
				  <tr>
				    <th>1 Yr MCLR	</th>
				    <th>Spread over 1 year MCLR</th>
				    <th>Effective ROI</th>
				    <th>Reset</th>
				  </tr>
				  <tr>
				    <td>8.45%</td>
				    <td>12.10% - 15.45%</td>
				    <td>12% to 21%</td>
				    <td>	No Reset</td>
				  </tr>
				</table>
				</div>
			</div>
		</div>
	</div>
<?php 
} 
if ($loans == 'business'){
?>
	<div class="minloan">
		<div class="maindivloan">
			<h2>Business Loan</h2>
			<div class="basicdetail">
				<p>Are you a manufacturer, retailer, trader or a professional running your own business? Then you would be aware about the challenges of managing your daily operations on one hand while trying to expand with the other. Today, liquidity for a self-employed is of supreme importance. Moreover, meeting your growing business requirements doesn’t come to you on a platter. This is where we play a role. BDIC Bank now offers collateral-free EMI-based Business Loans for the self-employed with minimum documentation. While you decide whether to use the amount for the entire tenure or to pre-close it faster, we help you to mitigate your immediate liquidity requirements while keeping your business adequately funded to prosper. You can apply and avail the loan online and then repay in easy instalments as convenient.</p>
			</div>
			<h2>Business Loan Details</h2>
			<div class="moredetailin">
				<table id="customers">
				  <tr>
				    <td>Loan Amount</td>
				    <td>Up to Rs 10 crore</td>
				  </tr>
				  <tr>
				    <td>Loan Tenure</td>
				    <td>Up to 5 years</td>
				  </tr>
				  <tr>
				    <td>Floating Interest Rate</td>
				    <td>12.10% - 12.45%</td>
				  </tr>
				  <tr>
				    <td>Fixed Interest Rate</td>
				    <td>15%</td>
				  </tr>
				  <tr>
				    <td>Processing Fee</td>
				    <td>Up to 1% of the loan amount +GST (minimum Rs 4,000) (Null IN BDIC Special Saving Account)</td>
				  </tr>
				</table>
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
						<h4 class="hide-div-feth41 unkonown">Collateral free</h4>
						<p>Make your home loan affordable and easier on your pocket every month with attractive home loan interest rates.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth42 unkonown">Flexible loan tenure to meet your business needs </h4>
						<div class="sub_hide_div">
						<p>		The Business Loan can be availed for a minimum of 6 to 60 months. You can repay in EMIs, without undue financial burden. Choose the tenure to suit your budget and repay at your convenience.  </p>
						</div>
					</div>
										
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth44 unkonown">Easy to apply</h4>
						<p>You can apply at the nearest branch  or online to get the loan sanctioned in quick easy steps. The documentation is minimal, keeping in need the busy schedules of a busy professional. Get quick approval if you meet all the eligibility criteria as follows:</p>
					</div>
				</div>
				<div class="Eligibility homecss" style="display:none;">
							
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Which constitutions are Eligible?</h4>
						<p>- Individual (with business registration)</p>
						<p>- Pvt ltd Companies</p>
						<p>- Unlisted Public Ltd. Companies</p>
						<p>- Proprietorship Firm</p>
						<p>- Partnership</p>
						<p>- Limited Liability Partnership</p>
					</div>
				</div>
				<div class="Money homecss" style="display:none;">
				<table id="customers">
				  <tr>
				    <th>Type</th>
				    <th>Repo Rate + Spread</th>
				    <th>Effective Rate of Interest</th>
				  </tr>
				  <tr>
				    <td>Floating Rate</td>
				    <td>Repo Rate + 2.70% to Repo Rate + 3.05%	</td>
				    <td>10.60% - 12.95% p.a.</td>
				  </tr>
				  <tr>
				    <td>Fixed Rate	</td>
				    <td>All Loan Amounts	</td>
				    <td>14% p.a.</td>
				  </tr>
				</table>
				</div>
			</div>
		</div>
	</div>
<?php 
} 
if ($loans == 'education'){
?>
	<div class="minloan">
		<div class="maindivloan">
			<h2>Education Loan</h2>
			<div class="basicdetail">
				<p>BDIC Bank brings you Education Loans for studies both in India and abroad starting from Rs. 50,000 at attractive interest rates. With an BDIC Bank Education Loan you can enjoy a host of benefits such as simple documentation, quick loan disbursal, tax benefit u/s 80(E), long repayment tenure, etc. Find out more about the features and benefits of Student Loan in India, below.</p>
			</div>
			<h2>Education Loan Details</h2>
			<div class="moredetailin">
				<table id="customers">
				  <tr>
				    <td>Loan Amount</td>
				    <td>Up to Rs 1 crore</td>
				  </tr>
				  <tr>
				    <td>Loan Tenure</td>
				    <td>Up to 4 years</td>
				  </tr>
				  <tr>
				    <td>Floating Interest Rate</td>
				    <td>8.10% - 12.45%</td>
				  </tr>
				  <tr>
				    <td>Fixed Interest Rate</td>
				    <td>12%</td>
				  </tr>
				  <tr>
				    <td>Processing Fee</td>
				    <td>Up to 1% of the loan amount +GST (minimum Rs 4,000) (Null IN BDIC Special Saving Account)</td>
				  </tr>
				</table>
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
						<h4 class="hide-div-feth41 unkonown">Avail high value loans</h4>
						<p>Minimum 50000</p>
						<p>The loan will cover tuition fees, hostel charges (if any), cost of books, etc.</p>
						<p>Get Repo Rate linked Interest Rates</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth42 unkonown">Easy loan disbursal</h4>
						<div class="sub_hide_div">
						<p>Within 15 working days from the date of receipt of the complete education loan application along with all documents required by the bank for a proper appraisal.</p>
						</div>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Apply for an Education Loan with a Guardian</h4>
						<p>The parent(s) or guardian will be treated as a co-applicant on the education loan and his or her role would be that of the primary debtor.</p>
					</div>
					
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth43 unkonown">Enjoy easy disbursal of the Education Loan</h4>
						<p>Education Loan will be disbursed in full or in suitable instalments taking into account the requirement of funds and/or fee schedule as assessed by the Bank directly to the educational institution or vendor of books or equipment or instruments.</p>
						<p>The quantum of education loan can be higher amounts, above these caps, subject to eligibility and cost, for case-to-case approval.
                    	</p>
					</div>

					<div class="hide-div-fet1">
						<h4 class="hide-div-feth44 unkonown">Secure your Education Loan</h4>
						<p>Third party guarantee and/or collateral security may be asked for appropriate cases</p>
						<p>-  Additional security in the form of an LIC Policy in favour of the Bank with the sum assured being at least 100% of the education loan amount may be required</p>
						<p>-  Annual premium for the same may be included while computing the education loan requirement and future income of the student needs to be assigned in favour of the Bank to meet instalment obligations</p>
						<p>-  Tangible collateral security of suitable value acceptable to bank may be required along with the assignment of future income of the student for payment of installments</p>
					</div>
				</div>				<div class="Eligibility homecss" style="display:none;">
							
					<div class="hide-div-fet1">
						<h4 class="hide-div-feth41 unkonown">eligibility criteria</h4>
						<p>- Indian Citizenship</p>
						<p>- Secured at least 50% marks during HSC & Graduation</p>
						<p>- Who have obtained admission to career-oriented courses e.g. Medicine, Engineering, Management etc., either at the graduate or post-graduate level</p>
						<p>- Secured admission in India or Abroad through entrance test / merit based selection process post completion of HSC (10+2)</p>
						<p>Documents displaying regular income is mandatory for the co-applicant( parents/sibling/guarantor)</p>
					</div>
				</div>
				<div class="Money homecss" style="display:none;">
				<table id="customers">
				  <tr>
				    <th>Type</th>
				    <th>Repo Rate + Spread</th>
				    <th>Effective Rate of Interest</th>
				  </tr>
				  <tr>
				    <td>Floating Rate</td>
				    <td>Repo Rate + 2.70% to Repo Rate + 3.05%	</td>
				    <td>8.60% - 8.95% p.a.</td>
				  </tr>
				  <tr>
				    <td>Fixed Rate	</td>
				    <td>All Loan Amounts	</td>
				    <td>14% p.a.</td>
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