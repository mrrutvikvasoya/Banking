<!DOCTYPE html>
<html lang="en">
 
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
    <title>Loan Calculater </title>
</head>
<style>
main {
        display: flex;
    margin: 30px;
    flex-direction: column;
}
 
 
#main-box {
    display: flex;
    justify-content: center;
}
 
 
input.input-item {
    padding: 12px 23px;
    border: 1px solid;
    border-radius: 0.3rem;
    border-color: #4444442e;
}
 
.btn-block{
    background: #1d86ff;
    border: 1px solid transparent;
    font-size: 16px;
    padding: 6px 20px;
    color: white;
    border-radius: 5px;
    width: 270px;
    height: 41px;
    cursor: pointer;
}
 
.btn-block:active {
    transform: scale(.95)
}
 
#reset-btn {
    display: none;
}
 
#result {
    border-collapse: collapse;
    width: 50%;
    display: none;
}
 
#result th,
#result tr,
#result td {
    border: 1px solid;
    border-color: #4444442e;
    padding: .3rem .5rem;
}
 
 
/* forms */
 
 
/* Custom Spinner */
 
@keyframes loader-spinner {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
#main-box{ 
    border: 1px solid #ada9b1;
    padding: 20px;
    border-radius: 8px;
}

@media only screen and (max-width: 767px) {
input.input-item {
    padding: 12px 0px;
    border: 1px solid;
    border-radius: 0.3rem;
    border-color: #4444442e;
}
.btn-block {
    width: 100%;
}
#main-box {
    display: flex;
    justify-content: center;
        flex-direction: column;

}
#result {
    border-collapse: collapse;
    width: 100%;
    display: none;
}
}
</style>
 
<body>
        <?php include "nav.php";?>
    <main>
        <div id="loader-holder">
            <div class="loader-spinner"></div>
            <div>
                <center><small>Please wait...</small></center>
            </div>
        </div>
        <h1>Loan Calculater </h1>
        <div id="form-holder">
            <div id="main-box">
                <form action="" id="calculate-loan-form">
                    <div class="form-item">
                        <label for="loan-amount"><b>Enter Loan Amount INR</b></label>
                        <input type="number" step="any" min="0" name="loan-amount" id="loan-amount" placeholder="xxxxx" class="input-item text-right" required>
                    </div>
                    <div class="form-item">
                        <label for="loan-interest"><b>Enter Loan Interest</b> <small>(%)</small></label>
                        <input type="number" step="any" name="loan-interest" id="loan-interest" placeholder="x" class="input-item text-right" required>
                    </div>
                    <div class="form-item">
                        <label for="loan-years"><b>Enter Years Pay<small>(only year)</small>
                        </b></label>
                        <input type="number" step="any" min="1" name="loan-years" id="loan-years" placeholder="x" class="input-item text-right" required>
                    </div>
                    <div class="form-item">
                        <button class="btn-block" id="calculate-btn" type="submit">Calucate</button>
                        <button class="btn-block" style="background: red; margin-top:10px; margin-bottom: 10px;" id="reset-btn" type="reset">Reset</button>
                    </div>
                </form>
                <table id="result">
                    <colgroup>
                        <col width="50%">
                        <col width="50%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td class=""><b>Principal</b></td>
                            <td class="text-right" id="principal"></td>
                        </tr>
                        <tr>
                            <td class=""><b>Annual Rate</b></td>
                            <td class="text-right" id="annual-interest"></td>
                        </tr>
                        <tr>
                            <td class=""><b>Loan Terms</b></td>
                            <td class="text-right" id="loan-terms"></td>
                        </tr>
                        <tr>
                            <td class=""><b>Monthly Payable</b></td>
                            <td class="text-right" id="monthly-pay"></td>
                        </tr>
                        <tr>
                            <td class=""><b>Total Cost</b></td>
                            <td class="text-right" id="total-pay"></td>
                        </tr>
                        <tr>
                            <td class=""><b>Total Interest</b></td>
                            <td class="text-right" id="total-interest"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

<?php include "footer.php";?>
<script type="text/javascript">
        window.start_loader = function() {
    const loader = document.getElementById('loader-holder')
    loader.style.display = 'flex';
}
window.end_loader = function() {
    const loader = document.getElementById('loader-holder')
    loader.style.display = 'none';
}
 
window.onload = function() {
    setTimeout(() => {
        end_loader()
    }, 500)
 
    const loanForm = document.getElementById('calculate-loan-form')
    loanForm.addEventListener('submit', function(e) {
        e.preventDefault()
        start_loader();
        const principalAmount = document.getElementById('loan-amount').value;
        const interest = document.getElementById('loan-interest').value;
        const PayableYears = document.getElementById('loan-years').value;
        var monthly = 0,
            pmt = 0,
            total = 0,
            totalInterest = 0,
            monthlyInterest = 0;
        monthlyInterest = (parseFloat(principalAmount) * (parseFloat(interest) / 100)) / 12;
        pmt = parseFloat(monthlyInterest) / (1 - Math.pow(1 + ((parseFloat(interest) / 100) / 12), -12 * parseFloat(PayableYears)));
        total = parseFloat(pmt) * Math.floor(parseFloat(PayableYears) * 12);
        totalInterest = parseFloat(total) - parseFloat(principalAmount);
        setTimeout(() => {
            document.getElementById('principal').textContent = parseFloat(principalAmount).toLocaleString("en-US", { style: "decimal", maximumFractionDigits: 2 })
            document.getElementById('annual-interest').textContent = parseFloat(interest).toLocaleString("en-US", { style: "decimal", maximumFractionDigits: 2 }) + "%";
            document.getElementById('loan-terms').textContent = parseFloat(PayableYears).toLocaleString("en-US", { style: "decimal", maximumFractionDigits: 2 }) + (PayableYears > 1 ? " Yrs." : "")
            document.getElementById('monthly-pay').textContent = parseFloat(pmt).toLocaleString("en-US", { style: "decimal", maximumFractionDigits: 2 })
            document.getElementById('total-pay').textContent = parseFloat(total).toLocaleString("en-US", { style: "decimal", maximumFractionDigits: 2 })
            document.getElementById('total-interest').textContent = parseFloat(totalInterest).toLocaleString("en-US", { style: "decimal", maximumFractionDigits: 2 })
            document.getElementById('result').style.display = 'table';
            document.getElementById('reset-btn').style.display = 'block';
            end_loader()
        }, 500)
 
    })
    loanForm.addEventListener('reset', function(e) {
        start_loader();
        setTimeout(() => {
            document.getElementById('principal').textContent = ""
            document.getElementById('annual-interest').textContent = ""
            document.getElementById('loan-terms').textContent = ""
            document.getElementById('monthly-pay').textContent = ""
            document.getElementById('total-pay').textContent = ""
            document.getElementById('total-interest').textContent = ""
            document.getElementById('result').style.display = 'none';
            document.getElementById('reset-btn').style.display = 'none';
            end_loader()
        }, 500)
    })
}
    </script>
</body>
</html>