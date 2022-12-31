<?php
include "../database.php";

if(isset($_POST['checkid']) && isset($_POST['id'])){
    $id=$_POST['id'];
    $sql ="SELECT * FROM account WHERE id='$id'";
    $result =$conn->query($sql);
    $row=$result->num_rows;
    if($row===1){
        $row=$result->fetch_assoc();
        echo json_encode($row);
    } else if($row === 0){
        echo json_encode($row);
    }
} 


if(isset($_POST['mycheckid']) && isset($_POST['id'])){
    $id=$_POST['id'];
    $sql ="SELECT * FROM cheqbook_req WHERE id='$id'";
    $result =$conn->query($sql);
    $row=$result->num_rows;
    if($row===1){
        $row=$result->fetch_assoc();
        echo json_encode($row);
    } else if($row === 0){
        echo json_encode($row);
    }
} 

if(isset($_POST['data']) && isset($_POST['id'])){
    $id=$_POST['id'];
    $sql ="SELECT * FROM contactus WHERE id='$id'";
    $result =$conn->query($sql);
    $row=$result->num_rows;
    if($row===1){
        $row=$result->fetch_assoc();
        echo json_encode($row);
    } else if($row === 0){
        echo json_encode($row);
    }
}

if(isset($_POST['loan_enquiry']) && isset($_POST['id'])){
    $id=$_POST['id'];
    $sql ="SELECT * FROM loan_enquiry WHERE id='$id'";
    $result =$conn->query($sql);
    $row=$result->num_rows;
    if($row===1){
        $row=$result->fetch_assoc();
        echo json_encode($row);
    } else if($row === 0){
        echo json_encode($row);
    }
}

if(isset($_POST['updateacinfo'])){
      $Balance = $_POST['Balance'];
      $Loan = $_POST['Loan'];
      $UserId = $_POST['UserId'];
      $AccountNumber = $_POST['AccountNumber'];
      $MobileNumber = $_POST['MobileNumber'];
      $email = $_POST['email'];
      $FullName = $_POST['FullName'];
      $pan = $_POST['pan'];
      $aadhaar = $_POST['aadhaar'];
      $birthday = $_POST['birthday'];
      $marital = $_POST['marital'];
      $FatherName = $_POST['FatherName'];
      $MotherName = $_POST['MotherName'];
      $employment = $_POST['employment'];
      $Annualincome = $_POST['Annualincome'];
      $FlatNO = $_POST['FlatNO'];
      $RoadName = $_POST['RoadName'];
      $Landmark = $_POST['Landmark'];
      $ZipCode = $_POST['ZipCode'];
      $city1 = $_POST['city'];
      $State1 = $_POST['State'];
      $id = $_POST['id'];

      $Signature = $_FILES['Signature']['name'];
      $Signature_temp = $_FILES['Signature']['tmp_name'];
      $Signature_folder = '../proofs/' . $Signature;

      $Adharcard = $_FILES['Adharcard']['name'];
      $Adharcard_temp = $_FILES['Adharcard']['tmp_name'];
      $Adharcard_folder = '../proofs/' . $Adharcard;

      $PanCard = $_FILES['PanCard']['name'];
      $PanCard_temp = $_FILES['PanCard']['tmp_name'];
      $PanCard_folder = '../proofs/' . $PanCard;

    if ($Signature=="" && $Adharcard=="" && $PanCard=="") {
        $sql = "UPDATE account SET userid=$UserId, accountno=$AccountNumber, mobile=$MobileNumber, email='$email', pan='$pan', aadhaar='$aadhaar', name='$FullName', birthday='$birthday', merital='$marital', fathername='$FatherName', mothername='$MotherName', flatno='$FlatNO', roadname='$RoadName', landmark='$Landmark', zipcode=$ZipCode, city='$city1', state='$State1', employment='$employment', income=$Annualincome, fund=$Balance, loan=$Loan , status = 'Approved' WHERE id= $id";
    }else if ($Signature=="" && $Adharcard=="") {
        $sql = "UPDATE account SET userid=$UserId, accountno=$AccountNumber, mobile=$MobileNumber, email='$email', pan='$pan', aadhaar='$aadhaar', name='$FullName', birthday='$birthday', merital='$marital', fathername='$FatherName', mothername='$MotherName', flatno='$FlatNO', roadname='$RoadName', landmark='$Landmark', zipcode=$ZipCode, city='$city1', state='$State1', employment='$employment', income=$Annualincome, panphoto ='$PanCard', fund=$Balance, loan=$Loan , status = 'Approved' WHERE id= $id";
    }else  if ($Signature=="" && $PanCard=="") {
        $sql = "UPDATE account SET userid=$UserId, accountno=$AccountNumber, mobile=$MobileNumber, email='$email', pan='$pan', aadhaar='$aadhaar', name='$FullName', birthday='$birthday', merital='$marital', fathername='$FatherName', mothername='$MotherName', flatno='$FlatNO', roadname='$RoadName', landmark='$Landmark', zipcode=$ZipCode, city='$city1', state='$State1', employment='$employment', income=$Annualincome, adharphoto='$Adharcard', fund=$Balance, loan=$Loan , status = 'Approved' WHERE id= $id";
    }else if ($Adharcard=="" && $PanCard=="") {
            $sql = "UPDATE account SET userid=$UserId, accountno=$AccountNumber, mobile=$MobileNumber, email='$email', pan='$pan', aadhaar='$aadhaar', name='$FullName', birthday='$birthday', merital='$marital', fathername='$FatherName', mothername='$MotherName', flatno='$FlatNO', roadname='$RoadName', landmark='$Landmark', zipcode=$ZipCode, city='$city1', state='$State1', employment='$employment', income=$Annualincome, signphoto ='$Signature', fund=$Balance, loan=$Loan , status = 'Approved' WHERE id= $id";
    }else if ($Signature=="") {
        $sql = "UPDATE account SET userid=$UserId, accountno=$AccountNumber, mobile=$MobileNumber, email='$email', pan='$pan', aadhaar='$aadhaar', name='$FullName', birthday='$birthday', merital='$marital', fathername='$FatherName', mothername='$MotherName', flatno='$FlatNO', roadname='$RoadName', landmark='$Landmark', zipcode=$ZipCode, city='$city1', state='$State1', employment='$employment', income=$Annualincome, adharphoto='$Adharcard', panphoto ='$PanCard', fund=$Balance, loan=$Loan , status = 'Approved' WHERE id= $id";
    }else if ($Adharcard=="") {
        $sql = "UPDATE account SET userid=$UserId, accountno=$AccountNumber, mobile=$MobileNumber, email='$email', pan='$pan', aadhaar='$aadhaar', name='$FullName', birthday='$birthday', merital='$marital', fathername='$FatherName', mothername='$MotherName', flatno='$FlatNO', roadname='$RoadName', landmark='$Landmark', zipcode=$ZipCode, city='$city1', state='$State1', employment='$employment', income=$Annualincome, panphoto ='$PanCard', signphoto ='$Signature', fund=$Balance, loan=$Loan , status = 'Approved' WHERE id= $id";
    }else if ($PanCard=="") {
        $sql = "UPDATE account SET userid=$UserId, accountno=$AccountNumber, mobile=$MobileNumber, email='$email', pan='$pan', aadhaar='$aadhaar', name='$FullName', birthday='$birthday', merital='$marital', fathername='$FatherName', mothername='$MotherName', flatno='$FlatNO', roadname='$RoadName', landmark='$Landmark', zipcode=$ZipCode, city='$city1', state='$State1', employment='$employment', income=$Annualincome, adharphoto='$Adharcard', signphoto ='$Signature', fund=$Balance, loan=$Loan , status = 'Approved' WHERE id= $id";
    }else{
        $sql = "UPDATE account SET userid=$UserId, accountno=$AccountNumber, mobile=$MobileNumber, email='$email', pan='$pan', aadhaar='$aadhaar', name='$FullName', birthday='$birthday', merital='$marital', fathername='$FatherName', mothername='$MotherName', flatno='$FlatNO', roadname='$RoadName', landmark='$Landmark', zipcode=$ZipCode, city='$city1', state='$State1', employment='$employment', income=$Annualincome, adharphoto='$Adharcard', panphoto ='$PanCard', signphoto ='$Signature', fund=$Balance, loan=$Loan, status = 'Approved' WHERE id= $id";
    }
    $row = $conn->query($sql);

    if($row){   
    move_uploaded_file($Signature_temp, $Signature_folder);
    move_uploaded_file($Adharcard_temp, $Adharcard_folder);
    move_uploaded_file($PanCard_temp, $PanCard_folder);
        $email_to = "$email";
        $email_subject = "Update In Your Account";
        $email_body = "Hello $FullName \n Thanks for choosing BDICBANK \n Your Account Some Information Is Updated, If This Is not done by you Pls Contact Us \n YOUR ACCOUNT IS AS FOLLOW:\n -NAME: $FullName \n -AccountNumber: $AccountNumber \n -UserId : $UserId \n -Account Balance : $Balance \n 'First Time Your NetBanking password is Your PanCard Number , You can change Through NetBanking'\n \n \n If you haven’t done this transaction please click here OR Call us at 081132584, 9081-132-5208 and Press 0 to report. \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. \n Please do not reply to this mail as this is an automated mail service. \n";

        $headers = ["MIME-Version: 1.0\r\n"];
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $retval = mail($email_to,$email_subject,$email_body,$headers);
          if($retval) {
             header("Location: accounts.php");
          }else {
             header("Location: accounts.php?status=fail");
          }
    }
    else{
        header("Location: accounts.php?status=fail");
    }
}

if(isset($_POST['deleteaccount'])){
    $id = $_POST['id1'];
    $reasoncloser = $_POST['reasoncloser'];
    $userid = $_POST['userid'];
    $fund = $_POST['fund'];
    $name = $_POST['name'];
    $accountno = $_POST['accountno'];
    $email = $_POST['email'];
    
    $sql = "UPDATE account SET status = 'Closed' WHERE id= $id";
    $row = $conn->query($sql);
    if($row){   
        $email_to = "$email";
        $email_subject = "BDIC Account Close";
        $email_body = "Hello $name\n \n    We Had Recived Account Closing Request For Account no - $accountno and We already Closed Your Bank account \n    your outstanding balance $fund (If any) Is credited In Your other bank account link with your addhar card\n thanks for choosing BDICBANK Your\n    Your Reason is '$reasoncloser' we are Working For best experience for user\n \n NOTE: 'If This request is not by you Pls contact Us now ' \n \n \n If you haven’t done this transaction please click here OR Call us at 081132584, 9081-132-5208 and Press 0 to report. \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. \n Please do not reply to this mail as this is an automated mail service. \n ";
        $headers = ["MIME-Version: 1.0\r\n"];
   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $retval = mail($email_to,$email_subject,$email_body,$headers);
          if($retval) {
             header("Location: accounts.php");
          }else {
             header("Location: accounts.php?status=fail");
          }
    }
    else{
        header("Location: accounts.php?status=fail");
    }
}


if(isset($_POST['acceptnewrequest'])){
    $id = $_POST['id1'];
    $Orderid = $_POST['Orderid'];
    $email1 = $_POST['email1'];
    $name1 = $_POST['name1'];

    $sql = "UPDATE cheqbook_req SET status = 'Processed', Orderid = $Orderid WHERE id= $id";
    $row = $conn->query($sql);
    if($row){   
            $email_to = "$email1";
        $email_subject = "BDIC BANK cheqbook Request";
        $email_body = "Hello $name1 \n \n  We have already Dispatch Your Cheque-Book With Shiping Partner BLUEDART, Your Orderid is  $Orderid . you can also track your cheqbook. \n \n \n If you haven’t done this transaction please click here OR Call us at 081132584, 9081-132-5208 and Press 0 to report. \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. \n Please do not reply to this mail as this is an automated mail service. \n";
        $headers = ["MIME-Version: 1.0\r\n"];
   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $retval = mail($email_to,$email_subject,$email_body,$headers);
          if($retval) {
             header("Location: cont.php");
          }else {
             header("Location: cont.php?status=failEmail");
          }
           header("Location: cont.php?status=fail");
    }
    else{
        header("Location: cheqbook.php?status=fail");
    }
}

if(isset($_POST['contmail'])){
      $contid = $_POST['contid'];
      $name1 = $_POST['name1'];
      $email1 = $_POST['email1'];
      $conttextarea = $_POST['conttextarea'];

    $sql = "UPDATE contactus SET status = 'Solved' WHERE id= $contid";
    $row = $conn->query($sql);
    if($row){ 
        $email_to = "$email1";
        $email_subject = "BDIC BANK Replay";
        $email_body = "Hello $name1 \n \n    $conttextarea   \n \n \n If you haven’t done this transaction please click here OR Call us at 081132584, 9081-132-5208 and Press 0 to report. \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. \n Please do not reply to this mail as this is an automated mail service. \n";
        $headers = ["MIME-Version: 1.0\r\n"];
   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $retval = mail($email_to,$email_subject,$email_body,$headers);
          if($retval) {
             header("Location: cont.php");
          }else {
             header("Location: cont.php?status=failEmail");
          }
           header("Location: cont.php?status=fail");
    }
    else{
        header("Location: cont.php?status=fail");
    }
}

if(isset($_POST['adminlogin'])){
    $AdminId=$_POST['AdminId'];
    $password=$_POST['password'];
    $inpass = md5($password);
    $sql ="SELECT * FROM admin WHERE Adminid='$AdminId' and password = '$inpass'";
    $result =$conn->query($sql);
    $row=$result->fetch_assoc();
      if ($row['password'] == $inpass) {
            session_start();
            $_SESSION['adminlogin']=true;
            $_SESSION['admindata']=$row['Adminid'];
            header("Location:index.php");
        }
        else{
            header("Location:login.php");
        }
}

if(isset($_POST['loancloend'])){
    $id = $_POST['id1'];
    $email1 = $_POST['email1'];
    $userid = $_POST['userid'];
    $name = $_POST['name'];
    $closeloanreq1 = $_POST['closeloanreq1'];

    $sql = "UPDATE loan_enquiry SET status = 'Rejected' WHERE id= $id";
    $row = $conn->query($sql);
    if($row){   
        $email_to = "$email1";
        $email_subject = "BDIC Bank Loan Is Rejected";
        $email_body = "Hello $name \n \n ---- LOAN REJECTED ---- \n    We are received loan request from userid = $userid, Our Loan Team Reveiew Your request But Currently you are not eligible for Loan \n    We are Working in Best Offers For You Wait For A moment ,We notify You when you eligible For loan\n \n \n If you haven’t done this transaction please click here OR Call us at 081132584, 9081-132-5208 and Press 0 to report. \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. \n Please do not reply to this mail as this is an automated mail service. \n";
        $headers = ["MIME-Version: 1.0\r\n"];
   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $retval = mail($email_to,$email_subject,$email_body,$headers);
          if($retval) {
             header("Location: loaninq.php");
          }else {
             header("Location: loaninq.php?status=fail");
          }
    }
    else{
        header("Location: loaninq.php?status=fail");
    }
}


if(isset($_POST['Approvedloan'])){
      $id = $_POST['id'];
    $email1 = $_POST['email1'];
    $name = $_POST['name'];
     $UserId = $_POST['UserId'];
      $Loanamounta = $_POST['Loanamounta']; 

    $sql = "UPDATE loan_enquiry SET loanamount = $Loanamounta , status = 'Approved' WHERE id=$id";
    $sql1 = "UPDATE account SET loan = $Loanamounta  WHERE userid=$UserId";
    $row = $conn->query($sql);
    $row1 = $conn->query($sql1);
    if($row && $row1){
        $email_to = "$email1";
        $email_subject = "BDIC BANK Loan Is Approved";
        $email_body = "Hello $name \n \n ---- LOAN APPROVED ---- \n    congratulations we want to know you your loan Request is Approved  \n    Your LOAN Approved With Amount Of '$Loanamounta' \n    We are Working in Best Offers For You Wait For A moment ,We notify You when you eligible For loan\n \n \n If you haven’t done this transaction please click here OR Call us at 081132584, 9081-132-5208 and Press 0 to report. \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. \n Please do not reply to this mail as this is an automated mail service. \n";
        $headers = ["MIME-Version: 1.0\r\n"];
   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $retval = mail($email_to,$email_subject,$email_body,$headers);
          if($retval) {
             header("Location: loaninq.php");
          }else {
             header("Location: loaninq.php?status=fail");
          }
    }
    else{
        header("Location: loaninq.php?status=fail");
    }
}

if(isset($_POST['Sendemail'])){
  $toemail = $_POST['toemail'];
  $emailbody = $_POST['emailbody'];
  $emailcontent = $_POST['emailcontent'];

    $email_to = "mailto:$toemail";
    $email_subject = "$emailbody";
    $email_body = "Hello This Email From BDIC Bank \n \n $emailcontent \n \n If This email is not suitable to you , not able to read , any harmful content or any other pls First Contact To the bank";
    $From = "noreplay@bdicbank.ac.com";

    $headers = ["MIME-Version: 1.0\r\n", "$From"];
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $retval = mail($email_to,$email_subject,$email_body,$headers);
      if($retval) {
         header('Location: Email.php');
      }else {
         header('Location: index.php');
      }
}
?>