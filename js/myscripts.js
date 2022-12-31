// let phoneno = /^([0-9]){10}$/;
// let emailvalidate = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
// let name = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
// let pan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}$/;
// let adhar = /^([0-9]){12}$/;



let MobileNumbers = document.getElementById('MobileNumber');
let email = document.getElementById('email');
let EnterPAN = document.getElementById('EnterPAN');
let EnterAadhaar = document.getElementById('EnterAadhaar');
let Privacy = document.getElementById('Privacy');

let State = document.getElementById('State');
let City = document.getElementById('City');
let Branch = document.getElementById('Branch');

let FullName = document.getElementById('FullName');
let acimg = document.getElementById('acimg');
let birthday = document.getElementById('birthday');
let Gender = document.getElementById('Gender');
let marital = document.getElementById('marital');
let FatherName = document.getElementById('FatherName');
let MotherName = document.getElementById('MotherName');

let FlatNO = document.getElementById('FlatNO');
let RoadName = document.getElementById('RoadName');
let Landmark = document.getElementById('Landmark');
let ZipCode = document.getElementById('ZipCode');
let city1 = document.getElementById('city1');
let State1 = document.getElementById('State1');
let Permanent = document.getElementById('Permanent');

let employment = document.getElementById('employment');
let Source = document.getElementById('Source');
let Annualincome = document.getElementById('Annualincome');

let Adharcard = document.getElementById('Adharcard');
let PanCard = document.getElementById('PanCard');
let AddressProof = document.getElementById('AddressProof');

let AddFund = document.getElementById('AddFund');
let Signature = document.getElementById('Signature');

const name = document.getElementById("name");
const cardnumber = document.getElementById("cardnumber");
const expirationdate = document.getElementById("expirationdate");
const securitycode = document.getElementById("securitycode");

let btn1 = document.getElementById('btn1');
let valid = document.getElementById('valid');

let cMobileNumber = document.getElementById('cMobileNumber');
let cemail = document.getElementById('cemail');
let cWrite = document.getElementById('cWrite');


function proform(step) {
      if(step == "step01"){
            let valmn = MobileNumbers.value;
            let valemail = email.value;
            let valpan = EnterPAN.value;
            let valadhar = EnterAadhaar.value;
            
            let checkemail = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/.test(valemail);
            let checkpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}$/.test(valpan);
            let checkadhar = /^([0-9])$/.test(valadhar);
            if($("#MobileNumber").val() == "" || valmn.length != 10 || $("#email").val() == "" || !isNaN(valemail) || !checkemail || $("#EnterPAN").val() == "" || !isNaN(valpan) || !checkpan || $("#EnterAadhaar").val() == "" || valadhar.length != 12 || $("#Privacy").is(":not(:checked)")){
                  if($("#MobileNumber").val() == ""|| valmn.length != 10){
                        $("#MobileNumber").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#MobileNumber", function () {
                       $("#MobileNumber").removeClass("fail") 
                        $(".spanred").hide() 
                  });

                  if($("#email").val() == "" || !isNaN(valemail) || !checkemail){
                        $("#email").addClass("fail")
                         $(".spanred").show()   
                  }
                  $(document).on("focusin", "#email", function () {
                       $("#email").removeClass("fail") 
                        $(".spanred").hide() 
                  });

                  if($("#EnterPAN").val() == "" || !isNaN(valpan) || !checkpan){
                        $("#EnterPAN").addClass("fail")
                         $(".spanred").show()   
                  }
                  $(document).on("focusin", "#EnterPAN", function () {
                       $("#EnterPAN").removeClass("fail") 
                        $(".spanred").hide() 
                  });

                  if($("#EnterAadhaar").val() == "" || valadhar.length != 12){
                        $("#EnterAadhaar").addClass("fail")
                         $(".spanred").show()   
                  }
                  $(document).on("focusin", "#EnterAadhaar", function () {
                       $("#EnterAadhaar").removeClass("fail")
                        $(".spanred").hide()

                  });
                  if($("#Privacy").is(":not(:checked)")){
                        myFunctions()
                  }
            }else{
                  $("#email").removeClass("fail") 
                  $("#MobileNumber").removeClass("fail")
                  $("#EnterPAN").removeClass("fail") 
                  $("#EnterAadhaar").removeClass("fail")
                  $(".spanred").hide()
                  $(".step1").hide()
                  $(".step2").show()
            }
      }
      if(step == "step02"){
            var radioValue = $("input[name='Account']:checked").val();
              if(!State.value || !City.value || !Branch.value) {
                  if(!$('#State').val()){
                        $("#State").addClass("fail");
                        $(".spanred").show(); 
                  }
                  $(document).on("focusin", "#State", function () {
                       $("#State").removeClass("fail"); 
                        $(".spanred").hide(); 
                  });
                  if(!$('#City').val()){
                        $("#City").addClass("fail");
                        $(".spanred").show(); 
                  }
                  $(document).on("focusin", "#City", function () {
                       $("#City").removeClass("fail"); 
                        $(".spanred").hide(); 
                  });
                  if(!$('#Branch').val()){
                        $("#Branch").addClass("fail");
                        $(".spanred").show(); 
                  }
                  $(document).on("focusin", "#Branch", function () {
                       $("#Branch").removeClass("fail"); 
                        $(".spanred").hide(); 
                  });
            }else{
                   $("#State").removeClass("fail");
                   $("#City").removeClass("fail");
                   $("#Branch").removeClass("fail");
                   $(".spanred").hide();
                   $(".step2").hide();
                   $(".step3").show();
            }
      }
      if(step == "step03"){
            let valFullName = FullName.value;
            let valeacimg = acimg.value;
            let valbirthday = birthday.value;
            let valFatherName = FatherName.value;
            let valMotherName = MotherName.value;
            dob = new Date(valbirthday);
            let today = new Date();
            let age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            $('#age').html(age+' years old');
            let checkFullName = /^[a-zA-Z]$/.test(valFullName);
            let checkFatherName = /^[a-zA-Z]$/.test(valFatherName);
            let checkMotherName = /^[a-zA-Z]$/.test(valMotherName);

            if($("#FullName").val() == "" || valFullName.length < 7 || valFullName.length > 30 || $("#acimg").val() == "" ||  $("#birthday").val() == "" || !Gender.value || !marital.value || $("#FatherName").val() == "" ||  $("#MotherName").val() == "" || valFatherName.length < 7 || valFatherName.length > 30 || valMotherName.length < 7 || valMotherName.length > 30 || age <= 18) {
                  
                  if($("#FullName").val() == "" || valFullName.length < 7 || valFullName.length > 30){
                        $("#FullName").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#FullName", function () {
                       $("#FullName").removeClass("fail") 
                        $(".spanred").hide() 
                  });
                  
                  if($("#acimg").val() == ""){
                        $("#acimg").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#acimg", function () {
                       $("#acimg").removeClass("fail") 
                        $(".spanred").hide() 
                  });

                  if($("#birthday").val() == "" || age <= 18){

                        $("#birthday").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#birthday", function () {
                       $("#birthday").removeClass("fail") 
                        $(".spanred").hide() 
                  });

                  if(!$('#Gender').val()){
                        $("#Gender").addClass("fail");
                        $(".spanred").show(); 
                  }
                  $(document).on("focusin", "#Gender", function () {
                       $("#Gender").removeClass("fail"); 
                        $(".spanred").hide(); 
                  });

                  if(!$('#marital').val()){
                        $("#marital").addClass("fail");
                        $(".spanred").show(); 
                  }
                  $(document).on("focusin", "#marital", function () {
                       $("#marital").removeClass("fail"); 
                        $(".spanred").hide(); 
                  });

                  if($("#FatherName").val() == "" || valFatherName.length < 7 || valFatherName.length > 30){
                        $("#FatherName").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#FatherName", function () {
                       $("#FatherName").removeClass("fail") 
                        $(".spanred").hide() 
                  });
                  if($("#MotherName").val() == "" || valMotherName.length < 7 || valMotherName.length > 30){
                        $("#MotherName").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#MotherName", function () {
                       $("#MotherName").removeClass("fail") 
                        $(".spanred").hide() 
                  });
            }
            else{
                   
                   $("#FullName").removeClass("fail");
                   $("#acimg").removeClass("fail");
                   $("#birthday").removeClass("fail");
                   $("#Gender").removeClass("fail");
                   $("#marital").removeClass("fail");
                   $("#FatherName").removeClass("fail");
                   $("#MotherName").removeClass("fail");

                   $(".spanred").hide();
                   $(".step3").hide();
                   $(".step4").show();
            }
      }
      if(step == "step04"){
            let valFlatNO = FlatNO.value;
            let valRoadName = RoadName.value;
            let valLandmark = Landmark.value;
            let valZipCode = ZipCode.value;

            let checkFlatNO = /^[a-zA-Z0-9]$/.test(valFlatNO);
            let checkRoadName = /^[a-zA-Z]$/.test(valRoadName);
            let checkLandmark = /^[a-zA-Z]$/.test(valLandmark);
            let checkZipCode = /^[0-9]$/.test(valZipCode);

            if($("#FlatNO").val() == "" || valFlatNO.length < 1 || valFlatNO.length > 6 || $("#RoadName").val() == "" || valRoadName.length < 6 || valRoadName.length > 20 || $("#Landmark").val() == "" || valLandmark.length < 6 || valLandmark.length > 20 || $("#ZipCode").val() == ""|| valZipCode.length != 6 || !State1.value || !city1.value){

                  if($("#FlatNO").val() == "" || valFlatNO.length < 1 || valFlatNO.length > 6 ){
                        $("#FlatNO").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#FlatNO", function () {
                       $("#FlatNO").removeClass("fail") 
                        $(".spanred").hide() 
                  });

                  if($("#RoadName").val() == "" || valRoadName.length < 6 || valRoadName.length > 20){
                        $("#RoadName").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#RoadName", function () {
                       $("#RoadName").removeClass("fail") 
                        $(".spanred").hide() 
                  });

                  if($("#Landmark").val() == "" || valLandmark.length < 6 || valLandmark.length > 20){
                        $("#Landmark").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#Landmark", function () {
                       $("#Landmark").removeClass("fail") 
                        $(".spanred").hide() 
                  });

                   if($("#ZipCode").val() == "" || valZipCode.length != 6){
                        $("#ZipCode").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#ZipCode", function () {
                       $("#ZipCode").removeClass("fail") 
                        $(".spanred").hide() 
                  });

                  if(!$('#State1').val()){
                        $("#State1").addClass("fail");
                        $(".spanred").show(); 
                  }
                  $(document).on("focusin", "#State1", function () {
                       $("#State1").removeClass("fail"); 
                        $(".spanred").hide(); 
                  });
                  if(!$('#city1').val()){
                        $("#city1").addClass("fail");
                        $(".spanred").show(); 
                  }
                  $(document).on("focusin", "#city1", function () {
                       $("#city1").removeClass("fail"); 
                        $(".spanred").hide(); 
                  });
            }
            else{
                   $("#FlatNO").removeClass("fail");
                   $("#RoadName").removeClass("fail");
                   $("#Landmark").removeClass("fail");
                   $("#ZipCode").removeClass("fail");
                   $("#State1").removeClass("fail");
                   $("#city1").removeClass("fail");
                   $(".spanred").hide();
                   $(".step4").hide();
                   $(".step5").show();
            }
      }
      if(step == "step05"){
            let valAnnualincome = Annualincome.value;
            let checkAnnualincome = /^[0-9]$/.test(valAnnualincome);

             if(!employment.value || !Source.value || $("#Annualincome").val() == "") {
                  if(!$('#employment').val()){
                        $("#employment").addClass("fail");
                        $(".spanred").show(); 
                  }
                  $(document).on("focusin", "#employment", function () {
                       $("#employment").removeClass("fail"); 
                        $(".spanred").hide(); 
                  });
                  if(!$('#Source').val()){
                        $("#Source").addClass("fail");
                        $(".spanred").show(); 
                  }
                  $(document).on("focusin", "#Source", function () {
                       $("#Source").removeClass("fail"); 
                        $(".spanred").hide(); 
                  });
                  if(!$('#Annualincome').val() || $("#Annualincome").val() == ""){
                        $("#Annualincome").addClass("fail");
                        $(".spanred").show(); 
                  }
                  $(document).on("focusin", "#Annualincome", function () {
                       $("#Annualincome").removeClass("fail"); 
                        $(".spanred").hide(); 
                  });
            }
            else{
                   $("#employment").removeClass("fail");
                   $("#Source").removeClass("fail");
                   $("#Annualincome").removeClass("fail");
                   $(".spanred").hide();
                   $(".step5").hide();
                   $(".step6").show();
            }
      }
      if(step == "step06"){
            let valAdharcard = Adharcard.value;
            let valPanCard = PanCard.value;
            let valAddressProof = AddressProof.value;
            let response = grecaptcha.getResponse();

            if($("#Adharcard").val() == "" || $("#PanCard").val() == "" ||  $("#AddressProof").val() == "" || response.length == 0){
                  if($("#Adharcard").val() == ""){
                        $("#Adharcard").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#Adharcard", function () {
                       $("#Adharcard").removeClass("fail") 
                        $(".spanred").hide() 
                  });
                  if($("#PanCard").val() == ""){
                        $("#PanCard").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#PanCard", function () {
                       $("#PanCard").removeClass("fail") 
                        $(".spanred").hide() 
                  });
                  if($("#AddressProof").val() == ""){
                        $("#AddressProof").addClass("fail")
                        $(".spanred").show() 
                  }
                  $(document).on("focusin", "#AddressProof", function () {
                       $("#AddressProof").removeClass("fail") 
                        $(".spanred").hide() 
                  });
                  if(response.length == 0){
                        $(".spanred").show() 
                  }

            }else{
                  $("#Adharcard").removeClass("fail");
                   $("#PanCard").removeClass("fail");
                   $("#AddressProof").removeClass("fail");
                   $(".spanred").hide();
                   $(".step6").hide()
                   $(".step1other").hide();
                   $(".step7").show();
            }
      }
      if(step == "AddFundmet"){
            let valAddFund = AddFund.value;
            let valSignature = Signature.value;
            if(valAddFund == "" || valAddFund.length > 5 || valAddFund.length < 4 || valSignature == ""){
            if(valAddFund == "" || valAddFund.length > 5 || valAddFund.length < 4){
             $(".el-find").show(); 
            }
            $(document).on("focusin", "#Signature", function () {
                       $(".el-find").hide(); 
            });
            if(valSignature == ""){
             $(".el-finds").show(); 
            }
            $(document).on("focusin", "#AddFund", function () {
                       $(".el-finds").hide(); 
                  });
            }
            else{
                  $(".add-fun").show();
                   $(".el-find").hide(); 
                   $(".el-finds").hide(); 
            }     
      }
      if(step == "paynow"){
            let valname = name.value;
            let valcardnumber = cardnumber.value;
            let valexpirationdate = expirationdate.value;
            let valsecuritycode = securitycode.value;

            let checkcardnumber = /^([0-9])$/.test(valcardnumber);
            let checkname = /^[a-zA-Z]$/.test(valname);

            if($("#cardnumber").val() == ""|| valcardnumber.length != 19 || $("#name").val() == "" || $("#securitycode").val() == "" || valexpirationdate.length != 5 || $("#expirationdate").val() == "" || valsecuritycode.length < 3 || valsecuritycode.length > 4){
                   if($("#cardnumber").val() == "" || valcardnumber.length != 19){
                       $(".el-findos").show();
                  }
                  $(document).on("focusin", "#cardnumber", function () {
                       $(".el-findos").hide();
                  });
                  if($("#name").val() == ""){
                       $(".el-findos").show();
                  }
                  $(document).on("focusin", "#name", function () {
                       $(".el-findos").hide();
                  });
                  if($("#expirationdate").val() == "" || valexpirationdate.length != 5 ){
                       $(".el-findos").show();
                  }
                  $(document).on("focusin", "#expirationdate", function () {
                       $(".el-findos").hide();
                  });
                  if($("#securitycode").val() == "" || valsecuritycode.length < 3 || valsecuritycode.length > 4){
                       $(".el-findos").show();
                  }
                  $(document).on("focusin", "#securitycode", function () {
                       $(".el-findos").hide();
                  });
            }
            else{
                  $(".end-ac").delay(100).hide()
                  $(".pay-status").delay(200).show(200);
                  $(".pay-status").delay(4500).hide(200);
                  $(".pay-status-c").delay(5000).show(200);
                  $(".ac-com").delay(5500).show(50);
                 
                  
            }
      }
          
}


$(document).ready(function(){
    $('input').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
});

function myFunctions(){
    if(confirm("Accept Privacy Policy")==true){
      $("#Privacy").prop("checked", true);
} else {
     $("#Privacy").prop("checked", false);
}
}

$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});

$(".my-kyc-method").click(function(){
  $(this).css("background", "#354170");
  $(".my-kyc-method1").css("background", "#717A9A");
});

$(".my-kyc-method1").click(function(){
  $(this).css("background", "#354170");
  $(".my-kyc-method").css("background", "#717A9A"); 
});



// document.onkeydown = function(e) {
//   if(event.keyCode == 123) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
//      return false;
//   }
// }