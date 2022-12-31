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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<title>BDIC Loans</title>
	<style>
.customers {
  border-collapse: collapse;
  width: 100%;
}

.customers td, .customers th {
  border: 1px solid #ddd;
  padding: 15px;
}

.customers td {text-align: center;}
.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

@media only screen and (max-width: 767px) {
	.hide-div-fet1{
	    width: 85%!important;
	}
}

input {
  position: absolute;
  opacity: 0;
  z-index: -1;
}

.row {
  display: flex;
}
.row .col {
  flex: 1;
}
.row .col:last-child {
  margin-left: 1em;
}

/* Accordion styles */
.tabs {
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 4px -2px rgba(0, 0, 0, 0.5);
}

.tab {
  width: 100%;
  color: white;
  overflow: hidden;
}
.tab-label {
  display: flex;
  justify-content: space-between;
  padding: 1em;
  font-weight: bold;
  cursor: pointer;
  border-bottom: 1px solid #bebebe;

}

.tab-label::after {
  content: "❯";
  width: 1em;
  height: 1em;
  text-align: center;
  transition: all 0.35s;
}
.tab-content {
  max-height: 0;
  padding: 0 1em;
  color: black;
  background: white;
  transition: all 0.35s;
}
.tab-close {
  display: flex;
  justify-content: flex-end;
  padding: 1em;
  font-size: 0.75em;
  background: #7581af;
  cursor: pointer;
}
.tab-close:hover {
  background: #5D678C;
}

input:checked + .tab-label {
  background: #5D678C;
  color: white;
}
input:checked + .tab-label::after {
  transform: rotate(90deg);
}
input:checked ~ .tab-content {
  max-height: 100vh;
  padding: 1em;
}
.tab label{
	color: black;
}
</style>
</head>
<body>
	<?php include "nav.php";?>

	<div class="contact_fir_div">
		<img src="img/stockInfoBanner.jpg" alt="contactus">
		<div class="olkhrmkh">
			<h2 class="olkhrmk">Stock <br>Information</h2>
			<h3 class="olkhrmk">BDIC Bank</h3>
		</div>
	</div>
<?php
$share = '';
if (isset($_GET['shareholder'])) {
$share = $_GET['shareholder'];
}
?>

<?php 
if ($share == 'StockInformation' || !$share){
?>
	<section class="StockInformation">
		<div class="maindivofsi">
			<div class="stcknun">
				<p>Follow BDIC Bank's stock performance, LIVE:</p>
			</div>
			<div class="otherstockinfolink">
				<a href="https://www.nseindia.com/" class="nse">NSE</a>
				<a href="https://www.bseindia.com/" class="nse">BSE</a>
			</div>
		</div>
		<div class="stockrolinfo">
			<h1>Company Details :</h1>
		<table class="customers">
			<tr>
				<th>Stock Name</th>
				<td>BDIC BANK</td>
			</tr>
			<tr>
				<th>Stock Price</th>
				<td>725.08 (Last Trading Session)</td>
			</tr>	
			<tr>
				<th>Stock Info</th>
				<td>Private Bank Stock</td>
			</tr>
			<tr>
				<th>Dividend yield</th>
				<td>2%</td>
			</tr>	
			<tr>
				<th>Last Bonus or Split</th>
				<td>-</td>
			</tr>	
			<tr>
				<th>NSE Stock Id</th>
				<td>NSE847481</td>
			</tr>	
			<tr>
				<th>BSE Stock id</th>
				<td>5287931</td>
			</tr>	
			<tr>
				<th>Company Registration number</th>
				<td>IN8456321168543</td>
			</tr>
			<tr>
				<th>Company Registration number</th>
				<td>IN9852495</td>
			</tr>	
			<tr>
				<th>CIN</th>
				<td>FKEDL2012PTC232495</td>
			</tr>
			<tr>
				<th>Age of Company</th>
				<td>10 Years</td>
			</tr>
			<tr>
				<th>Date of Incorporation</th>
				<td>06 March 2010</td>
			</tr>
		</table>

		<h1 class="stockrolinfo">Trademark Details :</h1>
		<table class="customers" >
			<tr>
				<th>Word Mark	</th>
				<td>BDIC BANK</td>
			</tr>
			<tr>
				<th>Appl. No.</th>
				<td>FAK789244</td>
			</tr>	
			<tr>
				<th>Appl. Date	</th>
				<td>10 March 2010</td>
			</tr>
			<tr>
				<th>Proprietor</th>
				<td>BDIC</td>
			</tr>	
			<tr>
				<th>Journal No.	</th>
				<td>2032-0</td>
			</tr>	
			<tr>
				<th>Journal Date</th>
				<td>16 JUNE 2010</td>
			</tr>	
			<tr>
				<th>Valid Upto</th>
				<td>29/08/2031</td>
			</tr>	
		</table>
		</div>
	</section>
<?php 
} 
if ($share == 'shareholder'){
?>
	<section class="shareholder">
		<div class="singon">
		<h2 style="text-align:center;">Shareholder's Information</h2>
		<div class="chartinfo">
			<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
			<table class="tableother">
			<tr>
				<th>Total Promoter Holding</th>
				<td>9.69%</td>
			</tr>
			<tr>
				<th>Mutual Funds</th>
				<td>23.69%</td>
			</tr>	
			<tr>
				<th>Other Domestic Institutions</th>
				<td>8.57%</td>
			</tr>
			<tr>
				<th>Foreign Institutions</th>
				<td>46.12%</td>
			</tr>		
			<tr>
				<th>Retail and Others</th>
				<td>11.94%</td>
			</tr>	
			</table>
		</div>
		<h2 style="text-align:center;">Promoter Information</h2>
		<div class="chartinfo">
			<table class="tableother">
			<tr>
				<th>Rutvik Vasoya</th>
				<td>1.05%</td>
			</tr>
			<tr>
				<th>Aman Raj Sigh</th>
				<td>3.25%</td>
			</tr>	
			<tr>
				<th>madan mohan</th>
				<td>2.05%</td>
			</tr>
			<tr>
				<th>Johan Doe</th>
				<td>0.9%</td>
			</tr>		
			<tr>
				<th>Capital Venture</th>
				<td>2.44%</td>
			</tr>	
			</table>
			<canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
		</div>
		</div>
	</section>
<?php 
} 
if ($share == 'Financial'){
?>
	<section class="Financial">
		<div>
		<h2 style="text-align:center;">Income Statement</h2>
		<div style="overflow-x: auto;     display: flex;
    justify-content: center;">
			<table class="tableother">
				<tr>
					<th>Financial Year</th>
					<th>FY 2013	</th>
					<th>FY 2014	</th>
					<th>FY 2015	</th>
					<th>FY 2016	</th>
					<th>FY 2017	</th>
					<th>FY 2018	</th>
					<th>FY 2019	</th>
					<th>FY 2020	</th>
					<th>FY 2021	</th>
					<th>FY 2022	</th>
				</tr>
				<tr>
					<th>Total Revenue</th>
					<td>44,854.25	</td>
					<td>45,856.89	</td>
					<td>48,425.68	</td>
					<td>51,364.23	</td>
					<td>57,596.69	</td>
					<td>58,476.68	</td>
					<td>70,232.40</td>
					<td>80,057.67</td>
					<td>77,974.28</td>
					<td>86,114.19	</td>
				</tr>	
				<tr>
					<th>EBITDA</th>
					<td>5,151.37</td>
					<td>8,480.48	</td>
					<td>11,876.47</td>
					<td>13,151.37</td>
					<td>6,480.48	</td>
					<td>1,156.47</td>
					<td>8,329.23</td>
					<td>6,086.12</td>
					<td>10,725.91</td>
					<td>19,975.05</td>
				</tr>
				<tr>
					<th>Net Income</th>
					<td>3,145.41	</td>
					<td>5,822.52	</td>
					<td>7,896.41</td>
					<td>8,349.68	</td>
					<td>6,480.48	</td>
					<td>11,256.77</td>
					<td>12,386.28</td>
					<td>11,886.82</td>
					<td>15,725.71</td>
					<td>16,685.75</td>
				</tr>
				<tr>
					<th>EPS</th>
					<td>3</td>
					<td>4.2</td>
					<td>4.9</td>
					<td>5</td>
					<td>8.12</td>
					<td>10.25</td>
					<td>15.22</td>
					<td>20</td>
					<td>22</td>
					<td>23</td>
				</tr>
				<tr>
					<th>Payout ratio</th>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0.1</td>
					<td>0</td>
					<td>0.5</td>
					<td>0.8</td>
					<td>0.4</td>
					<td>0.3</td>
				</tr>				
			</table>
		</div>
		</div>
		<div>
		<h2 style="text-align:center;">Balance Sheet</h2>
		<div style="overflow-x: auto;     display: flex;
    justify-content: center;">
			<table class="tableother">
			<tr>
				<th>Financial Year</th>
				<th>FY 2013	</th>
				<th>FY 2014	</th>
				<th>FY 2015	</th>
				<th>FY 2016	</th>
				<th>FY 2017	</th>
				<th>FY 2018	</th>
				<th>FY 2019	</th>
				<th>FY 2020	</th>
				<th>FY 2021	</th>
				<th>FY 2022	</th>
			</tr>
			<tr>
				<th>Total Assets</th>
				<td>3,40,583</td>
				<td>4,47,745</td>
				<td>5,58,123</td>
				<td>6,50,963</td>
				<td>7,01,414</td>
				<td>8,82,747</td>
				<td>9,14,147</td>
				<td>11,44,859</td>
				<td>13,85,822</td>
				<td>14,96,471</td>
			</tr>	
			<tr>
				<th>Total Liabilities</th>
				<td>3,07,413	</td>
				<td>3,47,984</td>
				<td>4,22,308	</td>
				<td>4,92,964	</td>
				<td>5,55,113	</td>
				<td>6,39,565	</td>
				<td>7,46,248	</td>
				<td>8,41,477	</td>
				<td>8,97,280	</td>
				<td>10,77,204</td>
			</tr>
			<tr>
				<th>Total Equity</th>
				<td>44,980	</td>
				<td>53,597	</td>
				<td>56,441</td>
				<td>64,276	</td>
				<td>67,887	</td>
				<td>86,453	</td>
				<td>88,471	</td>
				<td>95,858</td>
				<td>1,03,767</td>
				<td>1,18,522</td>
			</tr>				
			</table>
		</div>
		</div>
	</section>
<?php 
} 
if ($share == 'faq'){
?>
	<section class="faq">
			<div class="row">
			  <div class="col">
			    <h2>Invester <b>FAQ</b></h2>
			    <div class="tabs">
			      <div class="tab">
			        <input type="checkbox" id="chck1">
			        <label class="tab-label" for="chck1">What were the rates of Dividend declared by BDIC Bank in the past?</label>
			        <div class="tab-content">
			          The rates of dividend declared by BDIC Bank were as follows: 2% current year
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck2">
			        <label class="tab-label" for="chck2">Who are the Registrars and Share Transfer Agents of BDIC Bank?</label>
			        <div class="tab-content">
			          KFIN Technologies Limited<br>
								Selenium Building, Tower – B, Plot No.31 & 32,<br>
								Financial District, Nanakramguda, Serilingampally,<br>
								Hyderabad – 500032<br>
								Tel : (040) 67162222<br>
								Fax: (040) 23001153<br>
								Toll Free no. : 1800 3094 001<br>
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck3">
			        <label class="tab-label" for="chck3">On which stock exchange are the Securities of BDIC Bank listed?</label>
			        <div class="tab-content">
			          The shares of BDIC Bank Limited are listed on the NSE and BSE. The GDRs issued by the Bank are listed on London Stock Exchange. The Bonds issued by the Bank under the MTN programme are listed on the Singapore Stock Exchange.
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck4">
			        <label class="tab-label" for="chck4">When was the last Book Closure of BDIC Bank?</label>
			        <div class="tab-content">
			          The last Book Closure was during 06/07/2019 to 20/07/2019 (BDI)
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck5">
			        <label class="tab-label" for="chck5">When was last AGM of BDIC Bank held?</label>
			        <div class="tab-content">
			          The last AGM was held on July 30, 2021.
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck6">
			        <label class="tab-label" for="chck6">What is the benefit of Depository System?</label>
			        <div class="tab-content">
			          As a part of Capital Market Reforms and in line with global practice, the Depository environment with respect to electronic transactions of securities has also been put in place by SEBI. This will ensure a more efficient service in the matter of share transfer and eliminate risks for the investors against theft/fraud etc while the share certificates are in transit through courier or postal service.
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck7">
			        <label class="tab-label" for="chck7">How to open a Demat account?</label>
			        <div class="tab-content">
			          <a href="zerodha.com">Click Hear To Process of Demat account Open</a>
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck8">
			        <label class="tab-label" for="chck8">How to buy dematerialised shares?</label>
			        <div class="tab-content">
			          You can purchase the share in any of the two exchanges (BSE/NSE) where the shares of the bank are listed, through a broker of your choice and make payment to your broker. Make sure you tell your broker you want only in demat shares.
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck9">
			        <label class="tab-label" for="chck9">How does one transmit the account?</label>
			        <div class="tab-content">
			          If the account holder passes away, the Bank would be able to process the transmission of these securities to the legal heirs.
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck10">
			        <label class="tab-label" for="chck10">How can one add or change nomination details?</label>
			        <div class="tab-content">
			          If the shares are held in physical mode, the shareholders can opt to nominate one or more persons as the beneficiary so that in the event of death of the shareholder, the ownership can smoothly pass on to the nominee. Please read the form for complete details. To download the nomination form, click here. The forms duly filled in can be sent to the address given in the "Contact details" section.
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck11">
			        <label class="tab-label" for="chck11">What is NACH mandate?</label>
			        <div class="tab-content">
			          If the shares are held in physical mode, the shareholders instead of receiving warrants for the dividend payment could give details of their bank accounts so that the dividend amount can be directly credited to their account without much hassle through the National Automated Clearing House (NACH) of RBI. You can submit your mandate by filling up the NACH mandate form.
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck12">
			        <label class="tab-label" for="chck12">What are the guidelines to claim unclaimed Dividends/Shares?</label>
			        <div class="tab-content">
			         Unclaimed Dividends/Shares which have been transferred to the designated account of the IEPF Authority, in accordance with the with the IEPF Authority (Accounting, Audit, Transfer and Refund) Rules, 2016, can be claimed by the Shareholders through the website of the IEPF Authority (http://www.iepf.gov.in). Please follow the steps detailed below:<br>
			         <ul>
			         	<li>Download the Form IEPF - 5 from the website of IEPF (http://www.iepf.gov.in). Read the instructions provided on the instructions kit along with the e-form carefully before filling the form.</li>
			         	<li>After filling the form save it on the computer and submit the duly filled form by following the instructions given in the upload link on the IEPF website.</li>
			         	<li>On successful uploading, the acknowledgment will be generated indicating the SRN. This SRN is to be used for future tracking of the form.</li>
			         	<li>After uploading the form, submit the following documents to Nodal Officer(IEPF) of the Bank in an envelope marked “Claim for refund from the IEPF Authority:</li>
			         	<li>The general information of the Bank, required for filing the aforesaid Form, are as under: </li>
			         </ul><br>
			         KFIN, has been entrusted with the task of verifying the claims received from the Shareholders of the Bank, in respect the unclaimed dividend/shares of the Bank transferred to the IEPF Authority. KFIN, is responsible to liaise with the claimants to ensure that proper documents as required as per the IEFP Authority Rules, are received. After verifying the authenticity of their claims, KFIN, will issue an entitlement letter, in favour of the claimant.
			        </div>
			      </div>
			      <div class="tab">
			        <input type="checkbox" id="chck13">
			        <label class="tab-label" for="chck13">Details of agreements entered into with the media companies and/or their associates, etc.</label>
			        <div class="tab-content">
			          BDIC Bank has not entered into any agreements with any media company and/or their associates.
			        </div>
			      </div>

			    </div>
			  </div>
			</div>
	</section>
<?php 
} 
if ($share == 'InvestorContacts'){
?>
	<section class="InvestorContacts">
		<h2>Details of Compliance Officer</h2>
		<div class="ojnsnn">
			<p>For Shareholders' complaints pursuant to Regulation 6 of SEBI (Listing Obligations & Disclosure Requirements) Regulations, 2015 - exclusive email IDs are :</p>
			<p>Email :shareholders@bdicbank.com <br>
			BDIC BANK , 01-10 MahaRani Complex Opposite of Lapinoz Pizza Near Sarthana JagatNaka, Sarthana Surat-395006</p>
		</div>

		<h2>Details of Nodal Officer</h2>
		<div class="ojnsnn">
			<p>Name of the Nodal Officer : <b>Mr. Sandeep Poddar</b><br>
					Designation :Company Secretary<br>
					Board No :+9122-000000<br>
					Email :shareholders@bdicbank.com</p>
		</div>
		<br>
		<div class="ojnsnn">
			<p>Name of the Nodal Officer : <b>Mr. Mahesh Chouhan</b><br>
					Designation :Deputy Vice President - Company Secretary Department<br>
					Board No :+9122-000000<br>
					Email :shareholders@bdicbank.com</p>
		</div>
		<br>
		<div class="ojnsnn">
			<p>Name of the Nodal Officer : <b>Mr. Amol Chitnavis</b><br>
					Designation :Deputy Vice President - Company Secretary Department<br>
					Board No :+9122-000000<br>
					Email :shareholders@bdicbank.com</p>
		</div>

		<h2>Details of Authorized Person</h2>
		<div class="ojnsnn">
			<p>Name of the Authorized  Officer : <b>Mr. Amitabh Chaudhry</b><br>
					Designation :MD & CEO<br>
					Board No :+9122-000000<br>
					Email :shareholders@bdicbank.com</p>
		</div>
	</section>
<?php } ?>

	<?php include "footer.php";?>
		<script>
var xValues1 = ["Rutvik Vasoya", "Aman Raj Sigh", "madan mohan", "Johan Doe", "Capital Venture"];
var yValues1 = [1.05, 3.25, 2.05, 0.9, 2.44];
var barColors = [
  "#354170",
  "#3d4c84",
  "#5065b1",
  "#5D678C",
  "#33394f"
];

new Chart("myChart1", {
  type: "pie",
  data: {
    labels: xValues1,
    datasets: [{
      backgroundColor: barColors,
      data: yValues1
    }]
  },
  options: {
    title: {
      display: true,
      text: "Promoters"
    }
  }
});
</script>

		<script>
		var xValues = ["Promoter", "Mutual Funds", "DII", "FII", "Retail"];
		var yValues = [9.69, 23.69, 8.57, 46.12, 11.94];
		var barColors = ["#5D678C", "#5D678C","#5D678C","#5D678C","#5D678C"];

		new Chart("myChart", {
		  type: "bar",
		  data: {
		    labels: xValues,
		    datasets: [{
		      backgroundColor: barColors,
		      data: yValues
		    }]
		  },
		  options: {
		    legend: {display: false},
		    title: {
		      display: true,
		      text: "Shareholding Pattern"
		    }
		  }
		});
		</script>
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