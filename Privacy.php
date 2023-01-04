<?php
session_start();
session_destroy();
?>
<!-- bhai aaam chalu kar -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Privacy of BDIC
	</title>
	<link rel="icon" type="image/x-icon" href="img/fevicon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<script src="js/myscripts.js"></script>
</head>
<body>

	<?php include "nav.php";?>

<?php
$share = '';
if (isset($_GET['name'])) {
$share = $_GET['name'];
}
?>

<?php 
if ($share == 'Privacy' || !$share){
?>

	<div class="Privacyofbdic">
		<h2>Global Privacy Policy</h2>
		<div>
			<h4>Who is covered under this policy?</h4>
			<p>All natural persons ("Covered Persons"), whose personal information is either collected/ received/ possessed/ stored/ dealt in/ handled by BDIC Bank/ who visit the site http://www.BDICbank.com and provide information to BDIC Bank online, are covered under this Policy.</p>
		</div>
		<div>
			<h4>Information covered by this Policy </h4>
			<p>This Policy seeks to cover personal information of the Covered Persons provided to BDIC Bank as also any information collected by the bank server from the visitor’s browser. The ("Information"), i.e. any of the following:Personal/private information of the Covered Persons
			Sensitive personal data or information</p>
		</div>
		<div>
			<h4>Definitions used in this policy:</h4>
			<p>"Personal information" means any information that relates to a natural person, which, either directly or indirectly, in combination with other information available or likely to be available with a body corporate, is capable of identifying such person.</p>
		</div>
		<div>
			<h4>The Features of the Policy:</h4>
			<p>All Information collected shall be used for the relevant lawful purposes connected with various functions or activities of the Bank related to services in which the Concerned Person is interested, and/or to help determine the eligibility of the Concerned Persons for the product/services requested/ applied/ shown interest in and/or to enable Bank the Covered Persons verification and/or process applications, requests, transactions and/or maintain records as per internal/legal/regulatory requirements and shall be used to provide the Concerned Person with the best possible services/products as also to protect interests of BDIC Bank.</p>
			<p>The Information shall not be shared with any external organisation unless the same is necessary to protect the interests of the Bank or to enable BDIC Bank to provide you services or to enable the completion/compilation of a transaction, credit reporting, or the same is necessary or required pursuant to applicable banking norms or pursuant to the terms and conditions applicable to such Information as agreed to with BDIC Bank or pursuant to any requirement of law/regulations or any Government/court/other relevant authority’s directions/orders. Needless to add, confidentiality norms as applicable to banks shall be adhered to. BDIC Bank may also share Information to provide you with superior services and a range of offers.</p>
		</div>
		<div>
			<p>The BDIC Bank website uses cookies. Cookies are small data files that a website stores on your computer. We use persistent cookies which are permanently placed on your computer to store non-personal (Browser, ISP, OS, Clickstream information etc) and profiling information (age, gender, income etc). While cookies have unique identification nos, personal information (name, a/c no, contact nos etc) SHALL NOT be stored on the cookies.</p>
		</div>
	</div>
<?php }
if ($share == 'seq'){
?>
	<div class="Privacyofbdic">
		<h2>Secure Banking</h2>
		<div>
			<h4>BDIC Bank's Internet and Mobile Banking services are safe and secure as various measures are put in place to protect your personal banking information from disclosure to third parties.</h4>
			<p>- SMSes informing you that your BDIC Bank NetBanking account will be blocked if you do not update KYC/PAN/Aadhaar details. Do not click on links in such messages. </p>
			<p>- Scamsters who advise you to download third-party screen-sharing apps to help resolve your complaints. By downloading and installing such apps, they may get access to your mobile screen and other mobile data.</p>
			<p>- Fake helpline numbers updated on search engines by scamsters that you may call, who will seek your banking details. Refer only to the official BDIC Bank website for contact details. </p>
			<p>- Do not share your Customer ID and login password, OTP, ATM PIN, card number, CVV, expiry date, UPI VPA/MPIN with anyone over message, call, email, etc.</p>
			<p>- Do not click, open, or respond to emails, messages, links, etc, with lucrative offers, cashback, discounts, rewards points, loans with low-interest rates, etc. </p>
			<p>- Do visit only the official BDIC Bank website or the company for correct Customer Care or Helpline numbers. </p>
			<p>- SMSes from BDIC Bank will always include a header like BDICBK / BDICBN/ 186161. Any link contained in BDIC Bank SMSes will only come from the BDICbk.io domain. </p>
			<p>- You don't need to enter UPI PIN or scan QR code to receive payments through UPI.</p>
		</div>
	</div>

<?php }
if ($share == 'offerterm'){
?>
	<div class="Privacyofbdic">
		<h2>Offer Terms & Condition</h2>
		<div>
			<p>- By Visiting this site "I ACCEPT," you are acknowledging and agreeing to this disclaimer and the subsequent automatic redirection to a third-party website, i.e., the website of Reward360, which you may proceed to use for your transactions.</p>
			<p>- This Website is not owned, controlled or endorsed by BDIC Bank Limited, its affiliates, subsidiaries, employees, officers, directors, personnel or agents (hereinafter "BDIC Bank").</p>
			<p>- BDIC Bank does not warrant the accuracy or completeness of the services, information, materials, tools or reliability of any service, advice, opinion, statement or information displayed or distributed through the Website. Furthermore, it is advised that you make your own enquiries and arrangements to verify, scan and check the Website for any viruses, malicious code or malware. BDIC Bank provides no warranties whatsoever in this regard. Upon agreeing, you understand and acknowledge that accessing/availing any service offered on the Website or relying on any opinion, statement, or information presented on the Website shall be at your sole risk. </p>
			<p>- The information/services available on the Website is subject to change, revision, verification and/or amendment without notice. Such services/information may change materially at any time, and you agree and accept the same.</p>
		</div>
	</div>
<?php } ?>
	<?php include "footer.php";?>
	<script src="js/myscripts.js"></script>
</body>
</html>
