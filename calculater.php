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
	<title>Calculaters </title>
<style>

@import url("https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap");

:root {
  --background-color: white;
  --vigo-color: #5367ff;
  --input-number-color: #ebebeb;
}



form {
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Roboto", sans-serif;
  background-color: var(--background-color);
  color: #222;
}

h1 {
  text-align: center;
  margin-left: 0.2em;
  margin-right: 0.2em;
  margin-bottom: 0.9em;
}


#amountLabel {
  width: 210px;
}

.sip-calculator {
  border: 5px solid white;
  -moz-box-shadow: 0px 0px 5px hsl(15, 2%, 55%);
  -webkit-box-shadow: 0px 0px 5px hsl(15, 2%, 55%);
  box-shadow: 0px 0px 10px hsl(0, 0%, 73.9%);
  padding: 3em;
  margin: 1em;
  width: 530px;
  background-color: white;
}

.sip-calculator-amount,
.sip-calculator-year,
.sip-calculator-roi {
  margin-bottom: 2.2em;
  width: 100%;
}

.amount-slider,
.year-slider,
.roi-slider {
  width: 100%;
  height: 1px;
  border-radius: 10px;
  background: var(--slider-color);
  outline: none;
}

input[type="range"] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  cursor: pointer;
}

input[type="range"]:focus {
  outline: none;
}

input[type="range"]::-ms-track {
  width: 100%;
  cursor: pointer;
}

input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  border: 2.5px solid var(--vigo-color);
  height: 20px;
  width: 20px;
  border-radius: 40px;
  background: white;
  cursor: pointer;
  margin-top: 0px;
}

input[type="range"]::-moz-range-thumb {
  border: 2.5px solid var(--vigo-color);
  height: 20px;
  width: 20px;
  border-radius: 40px;
  background: white;
  cursor: pointer;
}

input[type="range"]::-ms-thumb {
  border: 2.5px solid var(--vigo-color);
  height: 20px;
  width: 20px;
  border-radius: 40px;
  background: white;
  cursor: pointer;
}

input[type="number"] {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
  background: var(--input-number-color);
  border-style: none;
  height: 30px;
  margin-left: 20px;
  margin-right: 10px;
  text-align: right;
  padding-right: 5px;
  font-family: "Roboto", sans-serif;
  font-size: 1.5em;
  border-radius: 4px;
  /* float: right; */
}

input[type="number"]:focus {
  outline: none;
  border: 1px solid #3197ee;
}

/* For radio */
.radio {
  margin: 0.5rem;
  text-align: center;
}

.radio input[type="radio"] {
  position: absolute;
  opacity: 0;
}

.radio input[type="radio"] + .radio-label:before {
  content: "";
  background: #f4f4f4;
  border-radius: 100%;
  border: 1px solid #b4b4b4;
  display: inline-block;
  width: 1.4em;
  height: 1.4em;
  position: relative;
  top: -0.2em;
  margin-right: 1em;
  vertical-align: top;
  cursor: pointer;
  text-align: center;
  transition: all 250ms ease;
}

.radio input[type="radio"]:checked + .radio-label:before {
  background-color: #5367ff;
  box-shadow: inset 0 0 0 4px #f4f4f4;
}

.radio input[type="radio"]:focus + .radio-label:before {
  outline: none;
  border-color: #3197ee;
}

.radio input[type="radio"]:disabled + .radio-label:before {
  box-shadow: inset 0 0 0 4px #f4f4f4;
  border-color: #b4b4b4;
  background: #b4b4b4;
}

.radio input[type="radio"] + .radio-label:empty:before {
  margin-right: 0;
}

/* Radio End */

@media only screen and (max-width: 325px) {
  .sip-calculator {
    height: 560px;
  }

  h1 {
    font-size: 1.5em;
  }
}

@media (max-width: 576px) {
  body {
    font-size: smaller;
  }

  .sip-calculator {
    width: 75%;
    padding: 2em;
    margin: 0.1em;
  }
}
@media only screen and (max-width: 767px) {.holediv {
    display: flex;
    flex-direction: column;
}}


.holediv{
	display: flex;
	margin-top: 30px;
}
.holep{
    line-height: 25px;
    word-spacing: 5px;
    letter-spacing: 1px;
    width: 85%;
    margin: 0 auto;
}
</style>
</head>
<body>
	<?php include "nav.php";?>
	<div class="holediv">
		<form name="sipForm">
	        <div class="sip-calculator">
	            <h3 id="heading" style="margin-bottom: 1.5em; text-align: center;">SIP & PPF Calculator</h3>
	           
	            <div class="sip-calculator-amount">
	                <p style="margin-top: 1.8em;">
	                    <label id="amountLabel"> Monthly Investment</label>
	                    <input name="Amount" id="inputAmount" type="number" step="500" value="5000" min="500" max="100000"
	                        oninput="showValAmount(this.value)" />
	                    <span id="amount"></span> Rs.
	                </p>
	                <input class="amount-slider" name="realAmount" id="myAmount" type="range" step="500" min="500" max="100000"
	                    value="5000" />
	            </div>
	            <div class="sip-calculator-year">
	                <p style="margin-top: 1.8em;">
	                    Number of Years
	                    <input name="Years" id="inputYears" type="number" value="10" min="1" max="30"
	                        oninput="showValYears(this.value)" />
	                    <span id="years"></span> Yr
	                </p>
	                <input class="year-slider" name="realYears" id="myYears" type="range" min="1" max="30" value="10">
	            </div>
	            <div class="sip-calculator-roi">
	                <p style="margin-top: 1.8em;">
	                    Returns
	                    <input name="Retunrs" id="inputRoi" type="number" value="15" min="5" max="22"
	                        oninput="showValRoi(this.value)" />
	                    <span id="roi"></span> %
	                </p>
	                <input class="roi-slider" name="realRoi" id="myRoi" type="range" min="5" max="22" value="15">
	            </div>
	            <p style="margin-top: 1em;font-size: 1.2em; background: #f1f2f3; border-radius: 7px; padding: 20px;">
	                <strong>Your Wealth:</strong>
	                <span id="yourWealth" style="font-size: 1.2em;margin-left: 8px;"></span>
	            </p>
	        </div>
	    </form>
	    <div>
			<h1>Sip Calculator</h1>
			<p class="holep">Prospective investors can think that SIPs and mutual funds are the same. However, SIPs are merely a method of investing in mutual funds, the other method being a lump sum. A SIP calculator is a tool that helps you determine the returns you can avail when parking your funds in such investment tools. Systematic Investment Plan or SIP is a process of investing a fixed sum of money in mutual funds at regular intervals. SIPs usually allow you to invest weekly, quarterly, or monthly.</p>
			<br>
			<h1>What is a Systematic Investment Plan (SIP)?</h1>
			<p class="holep">Before delving deeper into the uses of Axis Bank mutual fund calculator, it’s imperative to have an idea of what SIP actually is. A Systematic Investment Plan is a method of investment under which you can invest a fixed amount of money in any mutual fund scheme at regular intervals (monthly or quarterly basis). It is quite similar to a Recurring Deposit (RD) in a bank; the only difference is that the money will be invested in a mutual fund scheme, which may be invested in the equity markets or debt instruments.</p>
		</div>
	</div>
	<?php include "footer.php";?>

<script>
	        'use strict';
        var amountSlider = document.getElementById("myAmount");
        var amountOutput = document.getElementById("inputAmount");
        var roiSlider = document.getElementById("myRoi");
        var roiOutput = document.getElementById("inputRoi");
        var yearSlider = document.getElementById("myYears");
        var yearOutput = document.getElementById("inputYears");

        amountOutput.innerHTML = amountSlider.value;
        roiOutput.innerHTML = roiSlider.value;
        yearOutput.innerHTML = yearSlider.value;

        amountSlider.oninput = function () {
            amountOutput.innerHTML = this.value;
        }
        roiSlider.oninput = function () {
            roiOutput.innerHTML = this.value;
        }
        yearSlider.oninput = function () {
            yearOutput.innerHTML = this.value;
        }

        function showValAmount(newVal) {
            amountSlider.value = newVal;
            calculateIt();
        };
        function showValRoi(newVal) {
            roiSlider.value = newVal;
            calculateIt();
        };
        function showValYears(newVal) {
            yearSlider.value = newVal;
            calculateIt();
        };

        amountSlider.addEventListener("input", updateValueAmount);
        roiSlider.addEventListener("input", updateValueRoi);
        yearSlider.addEventListener("input", updateValueYears);

        function updateValueAmount(e) {
            amountOutput.value = e.srcElement.value;
            calculateIt();
        }
        function updateValueRoi(e) {
            roiOutput.value = e.srcElement.value;
            calculateIt();
        }
        function updateValueYears(e) {
            yearOutput.value = e.srcElement.value;
            calculateIt();
        }

        var calculatorMode = 'sip';
        var heading = document.getElementById("heading");
        var amountLabel = document.getElementById("amountLabel");

        function changeMode(mode){
            calculatorMode = mode;
            heading.innerHTML = mode === 'sip' ? 'SIP Calculator' : 'Lumpsum Calculator';
            amountLabel.innerHTML = mode === 'sip' ? 'Monthly Investment :' : 'Total Investment :';
            calculateIt();
        }

        function calculateIt() {
            var wealthOutput = document.getElementById("yourWealth");
            var A = document.sipForm.realAmount.value;
            var R = document.sipForm.realRoi.value;
            var N = document.sipForm.realYears.value;
            var sip = Math.round((Math.pow((1 + (Math.pow((1 + R / 100), (1 / 12)) - 1)), (N * 12)) - 1) / (Math.pow((1 + R / 100), (1 / 12)) - 1) * A);
            var lumpsum = Math.round(Math.pow((1 + R / 100), N) * A);
            var finalOutput = calculatorMode === 'sip' ? sip : lumpsum;
            wealthOutput.innerHTML = "Rs. " + finalOutput; // Print BMI
        }
        calculateIt();
</script>

<script src="js/myscripts.js"></script>
</body>
</html>