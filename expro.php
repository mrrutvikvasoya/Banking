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
	<title>Explore Products</title>
</head>
<body>
<?php include "nav.php";?>
<div class="contact_fir_div">
		<img src="img/normal-current-account.jpg" alt="contactus">
		<div class="olkhrmkh">
			<h2 class="olkhrmk">Explore Products <br>All need At One Place</h2>
			<h3 class="olkhrmk">Accounts, Loans, Cards, Deposits</h3>
		</div>
	</div>
<div class="maindivofexpro">
	<div class="subproducts">
		<div class="subpro0">
			<h2>Digital Account</h2>
			<div>
				<ul>
					<li>
						<p><b>- Debit Card</b></p>
						<span>Instant Virtual Debit card with 1% cashback on online spends</span>
					</li>
					<li>
						<p><b>- Instant Account Number</b></p>
						<span>Get your account number Within 24Hour</span>
					</li>
					<li>
						<p><b>- Banking</b></p>
						<span>Enjoy instant access to Net / MobileBanking</span>
					</li>
					<li>
						<p><b>- All At Your Home</b></p>
						<span>All Process Online (no branch visit need)</span>
					</li>
					<li>
						<p><b>- Offers & Discounts</b></p>
						<span>5-45% cashback on 30+ major brands via Grab Deals</span>
					</li>
				</ul>
					<li>
						<p><b>+ Accounts</b></p>
						<div class="d-flex">
						<a href="current.php" class="otherlinksinpage">Current Account</a>
						<a href="salary.php" class="otherlinksinpage">Salary Account</a>
						<a href="products.php" class="otherlinksinpage">Saving Account</a>
						<a href="child.php" class="otherlinksinpage">Child Account</a>
						<a href="bdicac.php" class="otherlinksinpage">BDIC Special Account</a>
						</div>
					</li>
				
			</div>
			<div class="btndivsubpro1">
				<a href="newac.php" class="open_new_ac">Open Now</a>
			</div>
		</div>
		<div class="subpro0">
			<h2>Loan</h2>
			<div>
				<ul>
					<li>
						<p><b>- 24x7 Personal Loans</b></p>
						<span>Instant funds for your personal needs in just a few clicks</span>
					</li>
					<li>
						<p><b>- Less Document</b></p>
						<span>Less Document Required for your loan</span>
					</li>
					<li>
						<p><b>- Fast Process</b></p>
						<span>Get instant access to funds for your immediate requirements</span>
					</li>
					<li>
						<p><b>- Flexibility </b></p>
						<span>Flexibility to choose the loan amount and tenure</span>
					</li>
					<li>
						<p><b>- loan offer</b></p>
						<span>Single comprehensive view to review loan offer</span>
					</li>
					<li>
						<p><b>+ Loans ( know more )</b></p>
						<div class="d-flex">
						<a href="loansdetails.php?loan=home" class="otherlinksinpage">Home Loan</a>
						<a href="loansdetails.php?loan=car" class="otherlinksinpage">Car Loan</a>
						<a href="loansdetails.php?loan=personal" class="otherlinksinpage">Personal Loan</a>
						<a href="loansdetails.php?loan=business" class="otherlinksinpage">Business Loan</a>
						<a href="loansdetails.php?loan=education" class="otherlinksinpage">Education Loan</a>
						</div>
					</li>
				</ul>
			</div>
			
			<p class="notepextra">* To applay for Loan You must Have acount in BDIC Bank</p>
		</div>
	</div>
	<div class="subproducts">
		<div class="subpro0">
			<h2>Cards</h2>
			<div>
				<ul>
					<li>
						<p><b>- Cashback</b></p>
						<span>Avail amazing discounts and cashback schemes</span>
					</li>
					<li>
						<p><b>- Loan</b></p>
						<span>Get Loan on Credit Card</span>
					</li>
					<li>
						<p><b>- Funds</b></p>
						<span>Get access to your funds securely anytime, anywhere!</span>
					</li>
					<li>
						<p><b>- All At Your Home</b></p>
						<span>All Process Online (no branch visit need)</span>
					</li>
					<li>
						<p><b>- Discounts</b></p>
						<span>Upto 10% cashback Discounts on Shopping</span>
					</li>
				</ul>
					<li>
						<p><b>+ Cards</b></p>
						<div class="d-flex">
						<a href="creditcard.php" class="otherlinksinpage">Credit Cards</a>
						<a href="debitcard.php" class="otherlinksinpage">Debit Cards</a>
						<a href="forexcard.php" class="otherlinksinpage">Forex Card</a>
						</div>
					</li>
				
			</div>
		</div>
		<div class="subpro0">
			<h2>Deposits</h2>
			<div>
				<ul>
					<li>
						<p><b>- FD</b></p>
						<span>Save funds for a fixed tenure and enjoy a fixed rate of return</span>
					</li>
					<li>
						<p><b>- Less Amount</b></p>
						<span>Minimum Investment of Rs. 1000</span>
					</li>
					<li>
						<p><b>- secur</b></p>
						<span>Earn secured returns and build a corpus to meet your needs</span>
					</li>
					<li>
						<p><b>- Loan </b></p>
						<span> Avail a loan against your FD without withdrawing it</span>
					</li>
					<li>
						<p><b>- save tax</b></p>
						<span>Invest & save tax on your investments!</span>
					</li>
					<li>
						<p><b>+ Deposits</b></p>
						<div class="d-flex">
						<a href="depo.php?depo=fd" class="otherlinksinpage">Fixed Deposits</a>
						<a href="depo.php?depo=rd" class="otherlinksinpage">Recurring Deposits</a>
						<a href="depo.php?depo=ts" class="otherlinksinpage">Tax Saver Fixed Deposits</a>
						</div>
					</li>
				</ul>
			</div>	
			<p class="notepextra">* To applay for FD You must Have account in BDIC Bank</p>
		</div>
	</div>
</div>
<?php include "footer.php";?>
<script src="js/myscripts.js"></script>
</body>
</html>