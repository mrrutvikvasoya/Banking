$(document).ready(function(){
var dataId = $("#loginid").attr("data-id");
    $.ajax({
        url: "thank.php",
        method: "POST",
        data: {
            checkid: "checkid",
            id: dataId,
        },
        success: function (data) {
        const data1 = JSON.parse(data); 
        var aadhaar=data1['aadhaar'];
        var accountno=data1['accountno'];
        var birthday=data1['birthday'];
        var city=data1['city'];
        var email=data1['email'];
        var employment=data1['employment'];
        var fathername=data1['fathername'];
        var flatno=data1['flatno'];
        var fund=data1['fund'];
        var gender=data1['gender'];
        var id=data1['id'];
        var income=data1['income'];
        var landmark=data1['landmark'];
        var loan=data1['loan'];
        var merital=data1['merital'];
        var mobile=data1['mobile'];
        var mothername=data1['mothername'];
        var name=data1['name'];
        var pan=data1['pan'];
        var roadname=data1['roadname'];
        var state=data1['state'];
        var userid=data1['userid'];
        var zipcode=data1['zipcode'];
        
        $('.id').text(id);
        $('.userid').text(userid);
        $('.fund').html(fund);
        $('.loan').text(loan);
        $('.accountno').text(accountno);
        $('.name').text(name);
        $('.mobile').text(mobile);
        $('.email').text(email);
        $('.birthday').text(birthday);
        $('.gender').text(gender);
        $('.merital').text(merital);
        $('.fathername').text(fathername);
        $('.mothername').text(mothername);
        $('.employment').text(employment);
        $('.income').text(income);
        $('.flatno').text(flatno);
        $('.roadname').text(roadname);
        $('.landmark').text(landmark);
        $('.zipcode').text(zipcode);
        $('.city').text(city);
        $('.state').text(state);
        $('.aadhaar').text(aadhaar);
        $('.pan').text(pan);
        },
    });
});


// page1
$(document).ready(function(){
  $("#Summary").click(function(){
    var dataId = $("#loginid").attr("data-id");
    $.ajax({
        url: "thank.php",
        method: "POST",
        data: {
            checkid: "checkid",
            id: dataId,
        },
        success: function (data) {
        const data1 = JSON.parse(data); 
        var accountno=data1['accountno'];
        var fund=data1['fund'];
        var id=data1['id'];
        var name=data1['name'];
        
        $('.id').text(id);
        $('.fund').html(fund);
        $('.accountno').text(accountno);
        $('.name').text(name);
        },
    });

      $("#content").html('<div class="hideAccount"> <h2 class="mainhessd">Account Summary</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Saving Account</h3> <div class="firacdi"><h3>Available Balance:</h3><span class="fund"></span> </div></div><div class="firdivop1"> <div class="firacdiv"><h4>Account No:</h4><span class="accountno"></span></div><div class="firacdiv"><h4>Name:</h4><span class="name"></span></div><div class="firacdiv"><h4>IFSC Code:</h4><span>BDIC009300</span></div></div></div><p class="quilin">See Detailed Statement</p><div class="preoffer"> <img src="img/preapp.jpg" class="allimgnow" alt="poster2"> </div></div>');
      $("#Summary").addClass("activelink");
      $("#Statement").removeClass("activelink");
      $("#Book").removeClass("activelink");
      $("#Card").removeClass("activelink");
    });

    $("#Statement").click(function(){
      $("#content").html('<div class="hideStatement"> <h2 class="mainhessd">Statement</h2> <table id="Statementdetails"> <tr> <th>Date</th> <th>Details</th> <th>Amount</th> <th>Total</th> </tr><tr> <td>12/05/2022</td><td>Upi/201125894 Maganbhai palasana</td><td>2000</td><td>20000</td></tr></table> </div>');
      $("#Statement").addClass("activelink");
      $("#Summary").removeClass("activelink");
      $("#Book").removeClass("activelink");
      $("#Card").removeClass("activelink");
    });

   $(".quilin").click(function(){
      $("#content").html('<div class="hideStatement"> <h2 class="mainhessd">Statement</h2> <table id="Statementdetails"> <tr> <th>Date</th> <th>Details</th> <th>Amount</th> <th>Total</th> </tr><tr> <td>12/05/2022</td><td>Upi/201125894 Maganbhai palasana</td><td>2000</td><td>20000</td></tr></table> </div>');
      $("#Statement").addClass("activelink");
      $("#Summary").removeClass("activelink");
      $("#Book").removeClass("activelink");
      $("#Card").removeClass("activelink");
    });

    $("#Book").click(function(){
      var dataId = $("#loginid").attr("data-id");
        $.ajax({
        url: "thank.php",
        method: "POST",
        data: {
            checkid: "checkid",
            id: dataId,
        },
        success: function (data) {
        const data1 = JSON.parse(data); 
        var city=data1['city'];
        var email=data1['email'];
        var flatno=data1['flatno'];
        var landmark=data1['landmark'];
        var roadname=data1['roadname'];
        var state=data1['state'];
        var zipcode=data1['zipcode'];
        var accountno=data1['accountno'];
        var name=data1['name'];

        $('.accountno').val(accountno);
        $('.name').val(name);
        $('.mypin').val(zipcode);
        $('.flatno').html(flatno);
        $('.roadname').html(roadname);
        $('.landmark').html(landmark);
        $('.zipcode').html(zipcode);
        $('.city').html(city);
        $('.state').html(state);

        var email=data1['email'];
        $('.email').val(email);
        },
    });
      $("#content").html('<div class="hideCheque"> <h2 class="mainhessd">Cheque Book</h2> <div class="AccountDetais"> <p class="quilin" style="text-align:center;">*you not have any cheque book</p></div><div class="AccountDetais"> <div class="addofuser"> <p class="quilin" style="text-align:center;">Confirm Your Address</p><ul class="addul"> <div class="addofulli"> <li>Flat NO :</li><span class="flatno"></span> </div><div class="addofulli"> <li>Road Name :</li><span class="roadname"></span> </div><div class="addofulli"> <li>Landmark :</li><span class="landmark"></span> </div><div class="addofulli"> <li>Zip Code :</li><span class="zipcode"></span> </div><div class="addofulli"> <li>City :</li><span class="city"></span> </div><div class="addofulli"> <li>State :</li><span class="state"></span> </div></ul> </div></div><p class="quilin" style="text-align:left;">* To Apply For New Cheque Book Confirm Your Addtess Then Click To apply if address is wrong then first change Address , We review details and Dispatch Cheque Book As soon as possible</p><div class="mychequeapply"> <form action="thank.php" method="POST" ><input name="account" type="hidden" class="form-control accountno" value=""> <input name="name" type="hidden" class="form-control name" value=""> <input name="email" type="hidden" class="form-control email" value=""> <input name="pincode" type="hidden" class="form-control mypin" value=""> <input type="submit" class="chequeapply" value="Submit" name="ApplyNowcheq"> </form> </div></div>');
      $("#Statement").removeClass("activelink");
      $("#Summary").removeClass("activelink");
      $("#Book").addClass("activelink");
      $("#Card").removeClass("activelink");
    });


    $("#Card").click(function(){
      $("#content").html('<div class="hideDebit"><h2 class="mainhessd">E Debit Card</h2><div class="center"> <div class="card"> <div class="flip"> <div class="front"> <div class="strip-bottom"></div><div class="strip-top"></div><svg class="logo" width="40" height="40" viewbox="0 0 17.5 16.2"><img class="debitimg" src="img/logo1.png"> </svg> <div class="investor">Debit</div><div class="chip"> <div class="chip-line"></div><div class="chip-line"></div><div class="chip-line"></div><div class="chip-line"></div><div class="chip-main"></div></div><svg class="wave" viewBox="0 3.71 26.959 38.787" width="26.959" height="38.787" fill="white"> <path d="M19.709 3.719c.266.043.5.187.656.406 4.125 5.207 6.594 11.781 6.594 18.938 0 7.156-2.469 13.73-6.594 18.937-.195.336-.57.531-.957.492a.9946.9946 0 0 1-.851-.66c-.129-.367-.035-.777.246-1.051 3.855-4.867 6.156-11.023 6.156-17.718 0-6.696-2.301-12.852-6.156-17.719-.262-.317-.301-.762-.102-1.121.204-.36.602-.559 1.008-.504z"></path> <path d="M13.74 7.563c.231.039.442.164.594.343 3.508 4.059 5.625 9.371 5.625 15.157 0 5.785-2.113 11.097-5.625 15.156-.363.422-1 .472-1.422.109-.422-.363-.472-1-.109-1.422 3.211-3.711 5.156-8.551 5.156-13.843 0-5.293-1.949-10.133-5.156-13.844-.27-.309-.324-.75-.141-1.114.188-.367.578-.582.985-.542h.093z"></path> <path d="M7.584 11.438c.227.031.438.144.594.312 2.953 2.863 4.781 6.875 4.781 11.313 0 4.433-1.828 8.449-4.781 11.312-.398.387-1.035.383-1.422-.016-.387-.398-.383-1.035.016-1.421 2.582-2.504 4.187-5.993 4.187-9.875 0-3.883-1.605-7.372-4.187-9.875-.321-.282-.426-.739-.266-1.133.164-.395.559-.641.984-.617h.094zM1.178 15.531c.121.02.238.063.344.125 2.633 1.414 4.437 4.215 4.437 7.407 0 3.195-1.797 5.996-4.437 7.406-.492.258-1.102.07-1.36-.422-.257-.492-.07-1.102.422-1.359 2.012-1.075 3.375-3.176 3.375-5.625 0-2.446-1.371-4.551-3.375-5.625-.441-.204-.676-.692-.551-1.165.122-.468.567-.785 1.051-.742h.094z"></path> </svg> <div class="card-number"> <div class="section">5453</div><div class="section">2000</div><div class="section">2215</div><div class="section">4841</div></div><div class="end"><span class="end-text">exp. end:</span><span class="end-date"> 11/27</span></div><div class="card-holder"></div><div class="master"> <div class="circle master-red"></div><div class="circle master-yellow"></div></div></div><div class="back"> <div class="strip-black"></div><div class="ccv"> <label>ccv</label> <div>658</div></div></div></div></div></div></div>');
      $("#Statement").removeClass("activelink");
      $("#Summary").removeClass("activelink");
      $("#Book").removeClass("activelink");
      $("#Card").addClass("activelink");
    });
});


$(document).ready(function(){
  $(".linkAccounts").click(function(){
     var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var accountno=data1['accountno'];
              var fund=data1['fund'];
              var id=data1['id'];
              var name=data1['name'];
              
              $('.id').text(id);
              $('.fund').html(fund);
              $('.accountno').text(accountno);
              $('.name').text(name);
              },
          });
    $("#data-cont").html('<div class="sub_nav_net" id="mainAccounts"> <div class="sub_navmain_div"> <div class="menu-drop"> <ul class="ac"> <li class="Account activelink" id="Summary">Account Summary</li><li class="Statement" id="Statement">Statement</li><li class="Cheque" id="Book">Cheque Book</li><li class="Debit" id="Card">Debit Card</li></ul> </div></div><div class="sub_main_div" id="content"> <div class="hideAccount"> <h2 class="mainhessd">Account Summary</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Saving Account</h3> <div class="firacdi"><h3>Available Balance:</h3><span class="fund"></span> </div></div><div class="firdivop1"> <div class="firacdiv"><h4>Account No:</h4><span class="accountno"></span></div><div class="firacdiv"><h4>Name:</h4><span class="name"></span></div><div class="firacdiv"><h4>IFSC Code:</h4><span>BDIC000000</span></div></div></div><p class="quilin">See Detailed Statement</p><div class="preoffer"> <img src="img/preapp.jpg" class="allimgnow" alt="poster2"> </div></div></div></div>');
        $(".linkAccounts").addClass("activemylink");
        $(".linkFundTransfer").removeClass("activemylink");
        $(".linkCards").removeClass("activemylink");
        $(".linkLoans").removeClass("activemylink");
        $(".linkOffers").removeClass("activemylink");


          $("#Summary").click(function(){
            var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var accountno=data1['accountno'];
              var fund=data1['fund'];
              var id=data1['id'];
              var name=data1['name'];
              
              $('.id').text(id);
              $('.fund').html(fund);
              $('.accountno').text(accountno);
              $('.name').text(name);
              },
          });
          $("#content").html('<div class="hideAccount"> <h2 class="mainhessd">Account Summary</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Saving Account</h3> <div class="firacdi"><h3>Available Balance:</h3><span class="fund"></span> </div></div><div class="firdivop1"> <div class="firacdiv"><h4>Account No:</h4><span class="accountno"></span></div><div class="firacdiv"><h4>Name:</h4><span class="name"></span></div><div class="firacdiv"><h4>IFSC Code:</h4><span>BDIC009300</span></div></div></div><p class="quilin">See Detailed Statement</p><div class="preoffer"> <img src="img/preapp.jpg" class="allimgnow" alt="poster2"> </div></div>');
          $("#Summary").addClass("activelink");
          $("#Statement").removeClass("activelink");
          $("#Book").removeClass("activelink");
          $("#Card").removeClass("activelink");

        });
        $("#Statement").click(function(){
          $("#content").html('<div class="hideStatement"> <h2 class="mainhessd">Statement</h2> <table id="Statementdetails"> <tr> <th>Date</th> <th>Details</th> <th>Amount</th> <th>Total</th> </tr><tr> <td>12/05/2022</td><td>Upi/201125894 Maganbhai palasana</td><td>2000</td><td>20000</td></tr></table> </div>');
          $("#Statement").addClass("activelink");
          $("#Summary").removeClass("activelink");
          $("#Book").removeClass("activelink");
          $("#Card").removeClass("activelink");
        });
        $("#Book").click(function(){
          var dataId = $("#loginid").attr("data-id");
        $.ajax({
        url: "thank.php",
        method: "POST",
        data: {
            checkid: "checkid",
            id: dataId,
        },
        success: function (data) {
        const data1 = JSON.parse(data); 
        var city=data1['city'];
        var email=data1['email'];
        var flatno=data1['flatno'];
        var landmark=data1['landmark'];
        var roadname=data1['roadname'];
        var state=data1['state'];
        var zipcode=data1['zipcode'];
        var accountno=data1['accountno'];
        var name=data1['name'];

        $('.accountno').val(accountno);
        $('.name').val(name);
        $('.mypin').val(zipcode);
        $('.flatno').html(flatno);
        $('.roadname').html(roadname);
        $('.landmark').html(landmark);
        $('.zipcode').html(zipcode);
        $('.city').html(city);
        $('.state').html(state);

        var email=data1['email'];
        $('.email').val(email);
        },
      });
          $("#content").html('<div class="hideCheque"> <h2 class="mainhessd">Cheque Book</h2> <div class="AccountDetais"> <p class="quilin" style="text-align:center;">*you not have any cheque book</p></div><div class="AccountDetais"> <div class="addofuser"> <p class="quilin" style="text-align:center;">Confirm Your Address</p><ul class="addul"> <div class="addofulli"> <li>Flat NO :</li><span class="flatno"></span> </div><div class="addofulli"> <li>Road Name :</li><span class="roadname"></span> </div><div class="addofulli"> <li>Landmark :</li><span class="landmark"></span> </div><div class="addofulli"> <li>Zip Code :</li><span class="zipcode"></span> </div><div class="addofulli"> <li>City :</li><span class="city"></span> </div><div class="addofulli"> <li>State :</li><span class="state"></span> </div></ul> </div></div><p class="quilin" style="text-align:left;">* To Apply For New Cheque Book Confirm Your Addtess Then Click To apply if address is wrong then first change Address , We review details and Dispatch Cheque Book As soon as possible</p><div class="mychequeapply"> <form action="thank.php" method="POST" ><input name="account" type="hidden" class="form-control accountno" value=""> <input name="email" type="hidden" class="form-control email" value=""> <input name="name" type="hidden" class="form-control name" value=""> <input name="pincode" type="hidden" class="form-control mypin" value=""> <input type="submit" class="chequeapply" value="Submit" name="ApplyNowcheq"> </form> </div></div>');
          $("#Statement").removeClass("activelink");
          $("#Summary").removeClass("activelink");
          $("#Book").addClass("activelink");
          $("#Card").removeClass("activelink");
        });

        $("#Card").click(function(){
          $("#content").html('<div class="hideDebit"><h2 class="mainhessd">E Debit Card</h2><div class="center"> <div class="card"> <div class="flip"> <div class="front"> <div class="strip-bottom"></div><div class="strip-top"></div><svg class="logo" width="40" height="40" viewbox="0 0 17.5 16.2"><img class="debitimg" src="img/logo1.png"> </svg> <div class="investor">Debit</div><div class="chip"> <div class="chip-line"></div><div class="chip-line"></div><div class="chip-line"></div><div class="chip-line"></div><div class="chip-main"></div></div><svg class="wave" viewBox="0 3.71 26.959 38.787" width="26.959" height="38.787" fill="white"> <path d="M19.709 3.719c.266.043.5.187.656.406 4.125 5.207 6.594 11.781 6.594 18.938 0 7.156-2.469 13.73-6.594 18.937-.195.336-.57.531-.957.492a.9946.9946 0 0 1-.851-.66c-.129-.367-.035-.777.246-1.051 3.855-4.867 6.156-11.023 6.156-17.718 0-6.696-2.301-12.852-6.156-17.719-.262-.317-.301-.762-.102-1.121.204-.36.602-.559 1.008-.504z"></path> <path d="M13.74 7.563c.231.039.442.164.594.343 3.508 4.059 5.625 9.371 5.625 15.157 0 5.785-2.113 11.097-5.625 15.156-.363.422-1 .472-1.422.109-.422-.363-.472-1-.109-1.422 3.211-3.711 5.156-8.551 5.156-13.843 0-5.293-1.949-10.133-5.156-13.844-.27-.309-.324-.75-.141-1.114.188-.367.578-.582.985-.542h.093z"></path> <path d="M7.584 11.438c.227.031.438.144.594.312 2.953 2.863 4.781 6.875 4.781 11.313 0 4.433-1.828 8.449-4.781 11.312-.398.387-1.035.383-1.422-.016-.387-.398-.383-1.035.016-1.421 2.582-2.504 4.187-5.993 4.187-9.875 0-3.883-1.605-7.372-4.187-9.875-.321-.282-.426-.739-.266-1.133.164-.395.559-.641.984-.617h.094zM1.178 15.531c.121.02.238.063.344.125 2.633 1.414 4.437 4.215 4.437 7.407 0 3.195-1.797 5.996-4.437 7.406-.492.258-1.102.07-1.36-.422-.257-.492-.07-1.102.422-1.359 2.012-1.075 3.375-3.176 3.375-5.625 0-2.446-1.371-4.551-3.375-5.625-.441-.204-.676-.692-.551-1.165.122-.468.567-.785 1.051-.742h.094z"></path> </svg> <div class="card-number"> <div class="section">5453</div><div class="section">2000</div><div class="section">2215</div><div class="section">4841</div></div><div class="end"><span class="end-text">exp. end:</span><span class="end-date"> 11/27</span></div><div class="card-holder"></div><div class="master"> <div class="circle master-red"></div><div class="circle master-yellow"></div></div></div><div class="back"> <div class="strip-black"></div><div class="ccv"> <label>ccv</label> <div>658</div></div></div></div></div></div></div>');
          $("#Statement").removeClass("activelink");
          $("#Summary").removeClass("activelink");
          $("#Book").removeClass("activelink");
          $("#Card").addClass("activelink");
        });
  });

  $(".linkFundTransfer").click(function(){
    var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var accountno=data1['accountno'];
              var fund=data1['fund'];
              
              $('.fund').html(fund);
              $('.accountno').text(accountno);
              },
          });
    $("#data-cont").html('<div class="sub_nav_net" id="mainFundTransfer"> <div class="sub_navmain_div"> <div class="menu-drop"> <ul class="ac"> <li class="Account activelink" id="linkFund">Fund Transfer</li>  <li class="Statement1" id="linkTerms">Terms</li> </ul> </div> </div> <div class="sub_main_div" id="content1"> <div class="hideFund"> <h2 class="mainhessd">Transfer Fund</h2> <div class="tblopt"> <td class="bgBox"> <table border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="padTop10" height="45px"><img alt="Transfer within the bank" src="img/neft.png"></td> </tr> <tr> <td><span class="tptBlue15 block"><p class="quilin">Transfer with NEFT BDIC</p></span></td> </tr> <tr> <td class="btnsubscaa"><p class="traptag">Transfer</p></td> </tr> </tbody> </table> </td> <td class="bgBox"> <table border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="padTop10" height="45px"><img alt="Transfer within the bank" src="img/neft1.png"></td> </tr> <tr> <td><span class="tptBlue15 block"><p class="quilin">Transfer within the bank</p></span></td> </tr> <tr> <td class="btnsubscaa"><p class="traptag">Transfer</p></td> </tr> </tbody> </table> </td> </div> <div class="AccountDetais frmtrass" id="trasferformmain" style="display:none"> <form action="" method="POST" id="trasferform" novalidate> <div class="d-f"> <label for="traFullName">Full Name</label> <input class="form-control" type="text" id="traFullName" name="traFullName" required> </div> <div class="d-f"> <label for="traAccountnumber">Account Number</label> <input class="form-control" type="number" id="traAccountnumber" name="traAccountnumber" required> </div> <div class="d-f"> <label for="traIfsc">Ifsc code</label> <input class="form-control" type="text" id="traIfsc" name="traIfsc" required> </div> <input type="submit" class="trabtn" value="Submit" name="submit"> </form> <div> <p class="quilin">Your A/C No: <span class="detfunoftra accountno"></span></p> <p class="quilin">Ifsc Code: <span class="detfunoftra">BDIC0009300</span></p> <p class="quilin">Balance: <span class="detfunoftra fund"></span></p> </div> </div> <div class="preoffer"> <img src="img/goldlon.jpg" class="allimgnow" alt="poster2"> </div> </div> </div> </div>');
            $(".linkAccounts").removeClass("activemylink");
            $(".linkFundTransfer").addClass("activemylink");
            $(".linkCards").removeClass("activemylink");
            $(".linkLoans").removeClass("activemylink");
            $(".linkOffers").removeClass("activemylink");

        $("#linkFund").click(function(){
          var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var accountno=data1['accountno'];
              var fund=data1['fund'];
              
              $('.fund').html(fund);
              $('.accountno').text(accountno);
              },
          });
        $("#content1").html('<div class="hideFund"> <h2 class="mainhessd">Transfer Fund</h2> <div class="tblopt"> <td class="bgBox"> <table border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="padTop10" height="45px"><img alt="Transfer within the bank" src="img/neft.png"></td> </tr> <tr> <td><span class="tptBlue15 block"><p class="quilin">Transfer with NEFT BDIC</p></span></td> </tr> <tr> <td class="btnsubscaa"><p class="traptag">Transfer</p></td> </tr> </tbody> </table> </td> <td class="bgBox"> <table border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="padTop10" height="45px"><img alt="Transfer within the bank" src="img/neft1.png"></td> </tr> <tr> <td><span class="tptBlue15 block"><p class="quilin">Transfer within the bank</p></span></td> </tr> <tr> <td class="btnsubscaa"><p class="traptag">Transfer</p></td> </tr> </tbody> </table> </td> </div> <div class="AccountDetais frmtrass" id="trasferformmain" style="display:none"> <form action="" method="POST" id="trasferform" novalidate> <div class="d-f"> <label for="traFullName">Full Name</label> <input class="form-control" type="text" id="traFullName" name="traFullName" required> </div> <div class="d-f"> <label for="traAccountnumber">Account Number</label> <input class="form-control" type="number" id="traAccountnumber" name="traAccountnumber" required> </div> <div class="d-f"> <label for="traIfsc">Ifsc code</label> <input class="form-control" type="text" id="traIfsc" name="traIfsc" required> </div> <input type="submit" class="trabtn" value="Submit" name="submit"> </form> <div> <p class="quilin">Your A/C No: <span class="detfunoftra accountno"></span></p> <p class="quilin">Ifsc Code: <span class="detfunoftra">BDIC0009300</span></p> <p class="quilin">Balance: <span class="detfunoftra fund"></span></p> </div> </div> <div class="preoffer"> <img src="img/goldlon.jpg" class="allimgnow" alt="poster2"> </div> </div>');
         $("#linkFund").addClass("activelink");
        $("#linkTerms").removeClass("activelink");
         $(".traptag").click(function(event){
          event.preventDefault();
          $(".frmtrass").show()
      });
        $(".trabtn").click(function(event){
          event.preventDefault();
          $(".frmtrass").hide()
      });
      });
        $(".traptag").click(function(event){
          event.preventDefault();
          $(".frmtrass").show()
      });
        $(".trabtn").click(function(event){
          event.preventDefault();
          $(".frmtrass").hide()
      });
      $("#linkTerms").click(function(){
        $("#content1").html('<div class="hideTerms"> <h2 class="mainhessd">Terms of Fund Transfer </h2> <div class="AccountDetais"> <div class="tblterms"> <p class="firpter">Quick & paperless</p><p class="twopter">Avoid delays due to cheques or demand drafts</p> </div> <div class="tblterms"> <p class="firpter">Transaction charges for NEFT done through BDIC Bank branches</p><p class="twopter">Rs 10 + Applicable GST</p> </div> <div class="tblterms"> <p class="firpter">Online Transaction Timings:</p><p class="twopter">available 24*7, 365 days</p> </div> <div class="tblterms"> <p class="firpter">Branch Transfer(During branch working hours)</p><p class="twopter">As per customer requirement</p> </div> </div> </div>');
            $("#linkFund").removeClass("activelink");
        $("#linkTerms").addClass("activelink");
      });
  });

  $(".linkCards").click(function(){
    var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var name=data1['name'];
              $('.name').text(name);
              },
          });
    $("#data-cont").html('<div class="sub_nav_net" id="mainCards"> <div class="sub_navmain_div"> <div class="menu-drop"> <ul class="ac"> <li class="Account activelink"id="alinDebit">Debit Card Status</li> <li class="Statement1" id="alinPin">Pin Generation</li> <li class="Statement1" id="alinManage">Manage</li> <li class="Statement1" id="alinHotlisted">Hotlisted Cards</li> <li class="Statement1" id="alinCashBack">CashBack</li> </ul> </div> </div> <div class="sub_main_div" id="content2"> <div class="hideDebitCardStatus"> <h2 class="mainhessd">Card Status</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Debit card</h3> <div class="firacdi"><h3>Active</h3><span><img src="img/success.png"></span> </div> </div> <div class="firdivop1"> <div class="firacdiv"><h4>Debit card No:</h4><span>5453-XXXX-XXXX-4841</span></div> <div class="firacdiv"><h4>Name:</h4><span class="name"></span></div> <div class="firacdiv"><h4>limit</h4><span>3,00,000</span></div> </div> </div> <div class="preoffer"> <img src="img/helth.jpg" class="allimgnow" alt="poster2"> </div> </div></div>');

      $(document).ready(function(){
        $("#alinDebit").click(function(){
          var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var name=data1['name'];
              $('.name').text(name);
              },
          });
          $("#content2").html('<div class="hideDebitCardStatus"> <h2 class="mainhessd">Card Status</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Debit card</h3> <div class="firacdi"><h3>Active</h3><span><img src="img/success.png"></span> </div> </div> <div class="firdivop1"> <div class="firacdiv"><h4>Debit card No:</h4><span>5453-XXXX-XXXX-4841</span></div> <div class="firacdiv"><h4>Name:</h4><span class="name"></span></div> <div class="firacdiv"><h4>limit</h4><span>3,00,000</span></div> </div> </div> <div class="preoffer"> <img src="img/helth.jpg" class="allimgnow" alt="poster2"> </div> </div>');
           $("#alinDebit").addClass("activelink");
              $("#alinPin").removeClass("activelink");
              $("#alinManage").removeClass("activelink");
              $("#alinHotlisted").removeClass("activelink");
              $("#alinCashBack").removeClass("activelink");
        });
        $("#alinPin").click(function(){
          $("#content2").html('<div class="hidePin"> <h2 class="mainhessd">Pin Change/ Pin Generation</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Pin Change For</h3> <div class="firacdiv"><h4>Debit card No:</h4><span>5453-XXXX-XXXX-4841</span></div> </div> <div class="chpin"> <form action="" method="POST" id="newpinform"> <div class="d-f"> <label for="NewPin">New pin : </label> <input class="form-control" type="password" id="NewPin" name="NewPin" minlength="4" maxlength="4" required> </div> <div class="d-f"> <label for="reNewPin">Re enter NewPin : </label> <input class="form-control" type="password" id="reNewPin" name="reNewPin" minlength="4" maxlength="4" required> </div> <div class="d-f"> <label for="netpass">Enter NetBnking Password : </label> <input class="form-control" type="password" id="netpass" name="netpass" required> </div> <div class="d-f"> <input type="submit" class="trabtn" value="Submit" name="submit"> </div> </form> </div> </div> </div>');
           $("#alinDebit").removeClass("activelink");
              $("#alinPin").addClass("activelink");
              $("#alinManage").removeClass("activelink");
              $("#alinHotlisted").removeClass("activelink");
              $("#alinCashBack").removeClass("activelink");
        });
        $("#alinManage").click(function(){
          $("#content2").html('<div class="hideManage"> <h2 class="mainhessd">Set DebitCard limit</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Change limit For</h3> <div class="firacdiv"><h4>Debit card No:</h4><span>5453-XXXX-XXXX-4841</span></div> </div> <div class="chpin"> <form action="" method="POST" id="newpinform"> <h4>Daily Domestic Usage/Limits</h4> <div class="d-f"> <label for="DATM">ATM Usage: </label> <input class="form-control" type="number" id="DATM" name="DATM" min="0" max="30000" required> </div> <div class="d-f"> <label for="DMerchant">Merchant Outlet Usage : </label> <input class="form-control" type="number" id="DMerchant" name="DMerchant" min="0" max="300000" required> </div> <div class="d-f"> <label for="DOnline">Online Usage : </label> <input class="form-control" type="number" id="DOnline" name="DOnline" min="0" max="300000" required> </div> <div class="d-f"> <label for="DContactless">Contactless Usage : </label> <input class="form-control" type="number" id="DContactless" name="DContactless" min="0" max="2000" required> </div> <h4>Daily International Usage/Limits</h4> <div class="d-f"> <label for="IATM">ATM Usage: </label> <input class="form-control" type="number" id="IATM" name="IATM" min="0" max="20000" required> </div> <div class="d-f"> <label for="IMerchant">Merchant Outlet Usage : </label> <input class="form-control" type="number" id="IMerchant" name="IMerchant" min="0" max="300000" required> </div> <div class="d-f"> <label for="IOnline">Online Usage : </label> <input class="form-control" type="number" id="IOnline" name="IOnline" min="0" max="300000" required> </div> <div class="d-f"> <label for="IContactless">Contactless Usage : </label> <input class="form-control" type="number" id="IContactless" name="IContactless" min="0" max="2000" required> </div> <div class="d-f"> <input type="submit" class="trabtn" value="Submit" name="submit"> </div> </form> </div> </div> </div>');
          $("#alinDebit").removeClass("activelink");
              $("#alinPin").removeClass("activelink");
              $("#alinManage").addClass("activelink");
              $("#alinHotlisted").removeClass("activelink");
              $("#alinCashBack").removeClass("activelink");
        });
        $("#alinHotlisted").click(function(){
          $("#content2").html('<div class="hideHotlistedCards"> <h2 class="mainhessd">Hotlisted Cards</h2> <div class="AccountDetais"> <p class="quilin" style="text-align:center;">* This facility is not available for you, currently we are working on it</p> </div>');
                   $("#alinDebit").removeClass("activelink");
              $("#alinPin").removeClass("activelink");
              $("#alinManage").removeClass("activelink");
              $("#alinHotlisted").addClass("activelink");
              $("#alinCashBack").removeClass("activelink");
        });
        $("#alinCashBack").click(function(){
          $("#content2").html(' <div class="hideCashBack"> <h2 class="mainhessd">Debit Card CashBack</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Debit card</h3> <div class="firacdiv"><h4>Debit card No:</h4><span>5453-XXXX-XXXX-4841</span></div> </div> <div class="firdivop1"> <div class="firacdiv"><h4>CashBack Earned</h4><span>0</span></div> <div class="firacdiv"><h4>Reward Points</h4><span>0</span></div> </div> </div> </div>');
               $("#alinDebit").removeClass("activelink");
              $("#alinPin").removeClass("activelink");
              $("#alinManage").removeClass("activelink");
              $("#alinHotlisted").removeClass("activelink");
              $("#alinCashBack").addClass("activelink");
        });
      });

    $(".linkAccounts").removeClass("activemylink");
    $(".linkFundTransfer").removeClass("activemylink");
    $(".linkCards").addClass("activemylink");
    $(".linkLoans").removeClass("activemylink");
    $(".linkOffers").removeClass("activemylink");
  });

  $(".linkLoans").click(function(){
      var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var accountno=data1['accountno'];
              $('.accountno').html(accountno);

              var loan=data1['loan'];
              $('.loan').html(loan);

              var userid=data1['userid'];
              $('.userid').html(userid);

              var loan=data1['loan'];
              $('.loan').html(loan);

              }
          });
    $("#data-cont").html('<div class="sub_nav_net" id="mainLoan"><div class="sub_navmain_div"> <div class="menu-drop"> <ul class="ac"> <li class="Account activelink" id="linkLoanSummary">Loan Summary</li><li class="Statement" id="linkApplyLoan">Apply For Loan</li><li class="Cheque" id="linkQuery">Query/Feedback</li><li class="Debit" id="linkOnline">Online Transaction History</li><li class="Debit" id="linkInterest">Interest Rate Changes</li></ul> </div></div><div class="sub_main_div" id="content4"> <div class="hideLoan"> <h2 class="mainhessd">Loan Summary</h2> <div class="AccountDetais"><div class="firdivop"><h3>Loan Account</h3><div class="firacdi"><h3>Loan Balance:</h3><span class="loan"></span></div></div><div class="firdivop1"><div class="firacdiv"><h4>User Id</h4><span class="userid"></span></div><div class="firacdiv"><h4>Credited Account Number</h4><span span class="accountno"></span></div></div></div><div class="tblopt tblloans"> <table border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="padTop10" height="45px"><img alt="Transfer within the bank" src="img/loan1.png"></td></tr><tr> <td> <span class="tptBlue15 block"><p class="quilin">Personal Loan</p></span> </td></tr><tr> <td class="btnsubscaa"><p class="traptag">ApplyNow</p></td></tr></tbody> </table> <table border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="padTop10" height="45px"><img alt="Transfer within the bank" src="img/loan2.png"></td></tr><tr> <td> <span class="tptBlue15 block"><p class="quilin">Auto Loan</p></span> </td></tr><tr> <td class="btnsubscaa"><p class="traptag">ApplyNow</p></td></tr></tbody> </table> <table border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="padTop10" height="45px"><img alt="Transfer within the bank" src="img/loan3.png"></td></tr><tr> <td> <span class="tptBlue15 block"><p class="quilin">2 Wheeler Loan</p></span> </td></tr><tr> <td class="btnsubscaa"><p class="traptag">ApplyNow</p></td></tr></tbody> </table></div></div></div></div>');

      $(document).ready(function(){
        $("#linkLoanSummary").click(function(){
          var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var accountno=data1['accountno'];
              $('.accountno').html(accountno);

              var loan=data1['loan'];
              $('.loan').html(loan);

              var userid=data1['userid'];
              $('.userid').html(userid);

              var loan=data1['loan'];
              $('.loan').html(loan);

              },
          });
          $("#content4").html('<div class="hideLoan"> <h2 class="mainhessd">Loan Summary</h2> <div class="AccountDetais"><div class="firdivop"><h3>Loan Account</h3><div class="firacdi"><h3>Loan Balance:</h3><span class="loan"></span></div></div><div class="firdivop1"><div class="firacdiv"><h4>User Id</h4><span class="userid"></span></div><div class="firacdiv"><h4>Credited Account Number</h4><span span class="accountno"></span></div></div></div><div class="tblopt tblloans"> <table border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="padTop10" height="45px"><img alt="Transfer within the bank" src="img/loan1.png"></td></tr><tr> <td> <span class="tptBlue15 block"><p class="quilin">Personal Loan</p></span> </td></tr><tr> <td class="btnsubscaa"><p class="traptag">ApplyNow</p></td></tr></tbody> </table> <table border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="padTop10" height="45px"><img alt="Transfer within the bank" src="img/loan2.png"></td></tr><tr> <td> <span class="tptBlue15 block"><p class="quilin">Auto Loan</p></span> </td></tr><tr> <td class="btnsubscaa"><p class="traptag">ApplyNow</p></td></tr></tbody> </table> <table border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="padTop10" height="45px"><img alt="Transfer within the bank" src="img/loan3.png"></td></tr><tr> <td> <span class="tptBlue15 block"><p class="quilin">2 Wheeler Loan</p></span> </td></tr><tr> <td class="btnsubscaa"><p class="traptag">ApplyNow</p></td></tr></tbody> </table></div></div>');
          $("#linkLoanSummary").addClass("activelink");
          $("#linkApplyLoan").removeClass("activelink");
          $("#linkQuery").removeClass("activelink");
          $("#linkOnline").removeClass("activelink");
          $("#linkInterest").removeClass("activelink");
        });
        $(".traptag").click(function(){
          var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var accountno=data1['accountno'];
              $('.accountno').html(accountno);

              var name=data1['name'];
              $('.name').val(name);

              var userid=data1['userid'];
              $('.userid').val(userid);

              var fund=data1['fund'];
              $('.fund').val(fund);

              var email=data1['email'];
              $('.email').val(email);
              },
          });
          $("#content4").html(' <div class="hideApplyLoan"> <div class="hidePin"> <h2 class="mainhessd">Apply For Loan</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Loan Apply in</h3> <div class="firacdiv"> <h4>Account No:</h4> <span class="accountno"></span> </div></div><div class="chpin"> <form action="thank.php" method="POST" id="newloanform"> <div class="d-f"><label for="netpass">Enter User Id</label> <input class="form-control userid" type="text" id="netpass" name="userid" readonly/></div><input class="form-control userid" type="hidden" name="userid" readonly/> <input class="form-control name" type="hidden" name="name" readonly/> <input class="form-control email" type="hidden" name="email" readonly/> <input class="form-control fund" type="hidden" name="fund" readonly/> <div class="d-f"><input type="submit" class="trabtn" value="Submit" name="loanappsubmit"/></div></form> </div></div></div></div>');
          $("#linkLoanSummary").removeClass("activelink");
          $("#linkApplyLoan").addClass("activelink");
          $("#linkQuery").removeClass("activelink");
          $("#linkOnline").removeClass("activelink");
          $("#linkInterest").removeClass("activelink");
        });
        $("#linkApplyLoan").click(function(){
          var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var accountno=data1['accountno'];
              $('.accountno').html(accountno);

              var userid=data1['userid'];
              $('.userid').val(userid);

              var fund=data1['fund'];
              $('.fund').val(fund);
              var name=data1['name'];
              $('.name').val(name);
              var email=data1['email'];
              $('.email').val(email);
              },
          });
          $("#content4").html(' <div class="hideApplyLoan"> <div class="hidePin"> <h2 class="mainhessd">Apply For Loan</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Loan Apply in</h3> <div class="firacdiv"> <h4>Account No:</h4> <span class="accountno"></span> </div></div><div class="chpin"> <form action="thank.php" method="POST" id="newloanform"> <div class="d-f"><label for="netpass">Enter User Id</label> <input class="form-control userid" type="text" id="netpass" name="userid" readonly/></div><input class="form-control userid" type="hidden" name="userid" readonly/> <input class="form-control name" type="hidden" name="name" readonly/> <input class="form-control email" type="hidden" name="email" readonly/> <input class="form-control fund" type="hidden" name="fund" readonly/> <div class="d-f"><input type="submit" class="trabtn" value="Submit" name="loanappsubmit"/></div></form> </div></div></div></div>');
          $("#linkLoanSummary").removeClass("activelink");
          $("#linkApplyLoan").addClass("activelink");
          $("#linkQuery").removeClass("activelink");
          $("#linkOnline").removeClass("activelink");
          $("#linkInterest").removeClass("activelink");
        });
        $("#linkQuery").click(function(){
          var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var accountno=data1['accountno'];
              $('.accountno').text(accountno);
              var userid=data1['userid'];
              $('.userid').val(userid);
              var name=data1['name'];
              $('.name').val(name);
              },
          });
         $("#content4").html(' <div class="hideQuery"> <div class="hideManage"> <h2 class="mainhessd">Query/Feedback Form</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Query/Feedback AC for</h3> <div class="firacdiv"> <h4>Account No:</h4> <span class="accountno"></span> </div></div><div class="chpin"> <form action="thank.php" method="POST" id="newqueryform"> <h4>Enter Your Query</h4> <div class="d-f" style="margin: 20px 10px;"><input class="form-control userid" type="hidden" name="userid" readonly/> <input class="form-control name" type="hidden" name="name" readonly/><textarea id="query" name="query" rows="5" cols="33"></textarea></div><div class="d-f"><input type="submit" class="trabtn" value="Submit" name="loanquery"/></div></form> </div></div></div></div>');
          $("#linkLoanSummary").removeClass("activelink");
          $("#linkApplyLoan").removeClass("activelink");
          $("#linkQuery").addClass("activelink");
          $("#linkOnline").removeClass("activelink");
          $("#linkInterest").removeClass("activelink");
        });
        $("#linkOnline").click(function(){
          $("#content4").html('<div class="hideOnlineHistory"> <div class="hideStatement"> <h2 class="mainhessd">Statement Of Loan</h2> <table id="loanStatementdetails"> <tbody> <tr> <th>Date</th> <th>Details</th> <th>Amount</th> <th>Status</th> </tr><tr> <td>N/A</td><td>N/A</td><td>0</td><td>None</td></tr></tbody> </table></div></div>');
          $("#linkLoanSummary").removeClass("activelink");
          $("#linkApplyLoan").removeClass("activelink");
          $("#linkQuery").removeClass("activelink");
          $("#linkOnline").addClass("activelink");
          $("#linkInterest").removeClass("activelink");
        });
        $("#linkInterest").click(function(){
          $("#content4").html('<div class="hideInterestChanges"> <div class="hideStatement"> <h2 class="mainhessd">Interest Rate Changes</h2> <table id="loanchargedetails"> <tbody> <tr> <th>Fee</th> <th>Amount to be paid</th> </tr><tr> <td>Rack Interest Rate</td><td>Salaried- 11.00% to 21.00%</td></tr><tr> <td>Processing fee</td><td> Rs 4999/- </td></tr><tr> <td>Stamp Duty & Other Statutory Charges</td><td>As per applicable laws of the state</td></tr></tbody> </table></div><div class="hideStatement"> <table id="loanchargedetails"> <tbody> <tr> <td>Overdue EMI interest</td><td>2% per month on EMI / Principal Overdue</td></tr><tr> <td>Repayment mode change charges</td><td>₹ 500/-</td></tr><tr> <td>Repayment Schedule Charges</td><td>₹ 50/- Per Instance</td></tr><tr> <td>EMI / Payment Return Charges</td><td>₹ 450/- </td></tr><tr> <td>Loan Cancellation Charges & Rebooking Charges</td><td>₹ 1000/- for rebooking the loan. </td></tr><tr> <td>Pre-payment in Part or Full</td><td>No pre-payment in Part </td></tr><tr> <td>Pre-payment Charges</td><td>4% of principal outstanding</td></tr></tbody> </table></div></div>');
            $("#linkLoanSummary").removeClass("activelink");
            $("#linkApplyLoan").removeClass("activelink");
            $("#linkQuery").removeClass("activelink");
            $("#linkOnline").removeClass("activelink");
            $("#linkInterest").addClass("activelink");
        });
      });
   $(".linkAccounts").removeClass("activemylink");
    $(".linkFundTransfer").removeClass("activemylink");
    $(".linkCards").removeClass("activemylink");
    $(".linkLoans").addClass("activemylink");
    $(".linkOffers").removeClass("activemylink");
  });
  
  $(".linkOffers").click(function(){
      $("#data-cont").html('<div class="sub_nav_net" id="mainOffers"><div class="sub_navmain_div"> <div class="menu-drop"> <ul class="ac"> <li class="Account activelink" id="Summary">Offers</li></ul> </div></div> <div class="offerimg"> <div class="marokh"><img src="img/goldlon.jpg" class="allimgnow" alt="poster2"></div><div class="marokh"><img src="img/bickloan.jpg" class="allimgnow" alt="poster2"></div><div class="marokh"><img src="img/helth.jpg" class="allimgnow" alt="poster2"></div><div class="marokh"><img src="img/netposter1.jpg" class="allimgnow" alt="poster2"></div></div></div>');
      $(".linkAccounts").removeClass("activemylink");
      $(".linkFundTransfer").removeClass("activemylink");
      $(".linkCards").removeClass("activemylink");
      $(".linkLoans").removeClass("activemylink");
      $(".linkOffers").addClass("activemylink");
  });

  $(".ChangePassword").click(function(){
    var dataId = $("#loginid").attr("data-id");
          $.ajax({
              url: "thank.php",
              method: "POST",
              data: {
                  checkid: "checkid",
                  id: dataId,
              },
              success: function (data) {
              const data1 = JSON.parse(data); 
              var accountno=data1['accountno'];
              $('.accountno').text(accountno);
              var userid=data1['userid'];
              $('.userid').val(userid);
              var email=data1['email'];
              $('.email').val(email);
              },
          });
    $("#data-cont").html('<div class="sub_nav_net" id="mainpasschange"> <div class="passgen"> <h2 class="mainhessd">Change NetBanking Password</h2> <div class="AccountDetais"> <div class="firdivop"> <h3>Password Change For</h3> <div class="firacdiv"> <h4>Acount No:</h4> <span class="accountno"></span> </div></div><div class="chpin"> <form action="thank.php" method="POST" id="newpinform"> <div class="d-f"> <label for="OldPass">Old Password : </label> <input class="form-control" type="password" id="OldPass" name="OldPass" minlength="8" maxlength="20" required> </div><div class="d-f"> <label for="NewPass">New Password : </label> <input class="form-control" type="password" id="NewPass" name="NewPass" minlength="8" maxlength="20" required> <input name="userid" type="hidden" class="form-control userid" value=""> <input name="email" type="hidden" class="form-control email" value=""> </div><div class="d-f"> <input type="submit" class="trabtn" value="Submit" name="passsubmit"> </div></form> </div></div></div></div>');
    $(".linkAccounts").removeClass("activemylink");
    $(".linkFundTransfer").removeClass("activemylink");
    $(".linkCards").removeClass("activemylink");
    $(".linkLoans").removeClass("activemylink");
    $(".linkOffers").removeClass("activemylink");
  });
});




$('body').on('click tap', '.button#menu-toggle', function(){
  $('header').addClass('active');
});

$('body').click(function(e){
  if(!$(e.target).is('.button#menu-toggle')) {
    $('header').removeClass('active');
      $('div.menu-panel').removeClass('is-active');
   }
});

$('nav.slide-out-menu').click(function(e){
  e.stopPropagation();
});

$('.button.menu-link').click(function(){
    $('div.menu-panel').removeClass('is-active');

  if ($(this).data('ref')) {
    var targetRef = $(this).data('ref');
    var $target = $('div.menu-panel[data-menu="' + targetRef + '"]');
    
      $target.addClass('is-active');
  }
});


$(".menu-link").click(function(){
  $("header").removeClass("active");
});

$('.modal-toggle').on('click', function(e) {
  e.preventDefault();
  $('.modal').toggleClass('is-visible');
});

document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}