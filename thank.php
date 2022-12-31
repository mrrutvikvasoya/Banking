<?php
session_start();
include "database.php";

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

if(isset($_POST['submit'])){
  $cMobileNumber = $_POST['cMobileNumber'];
  $cemail = $_POST['cemail'];
  $cUser = $_POST['cUser'];
  $cWrite = $_POST['cWrite'];
  
  if($cUser == ""){
   $sql = "INSERT INTO `contactus` (mobile,email ,writeh) VALUES ($cMobileNumber, '$cemail','$cWrite')";
  }
  else{
   $sql = "INSERT INTO `contactus` (mobile,email ,userid,writeh) VALUES ($cMobileNumber, '$cemail',$cUser,'$cWrite')";
  }
   
   $new = $conn->query($sql);
    if($new){
  $email_to1 = "mailto:$cemail";
  $email_subject1 = "BDIC BANK Query Recived";
  $email_body1 = "Hello Sir/Madam \n \n    Your Contect Us Form Is submitted Successfully. \n    Your FormId is '$cMobileNumber', Our Teem review your Query and get tuch back soon! \n Your Query is '$cWrite' And We can solve as soon as possible\n \n \n If you haven’t done this transaction please click here OR Call us at 081132584, 9081-132-5208 and Press 0 to report. \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. \n Please do not reply to this mail as this is an automated mail service. \n ";

   $headers = ["MIME-Version: 1.0\r\n"];
   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

      $retval = mail($email_to1,$email_subject1,$email_body1,$headers);
      if($retval) {
          header('Location: contactus.php');
      }else {
           header('Location: 404.php');
      }
   }
}

if(isset($_POST['subbutton'])){
  $email = $_POST['subscribeemail'];
   $sql = "INSERT INTO `subemail` (email) VALUES ('$email')";
   $new = $conn->query($sql);
   if($new){
  $email_to1 = "mailto:$email";
  $email_subject1 = "BDIC BANK Email Letter";
  $email_body1 = "Hello Sir/Madam \n \n    You are subscribed for email letters on BDIC Bank, Now you received new Updates and Offers And any update form our bank.\n    Email - '$email' \n In above Email is we Recived for email letters\n \n If you haven’t done this transaction please click here OR Call us at 081132584, 9081-132-5208 and Press 0 to report. \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. \n Please do not reply to this mail as this is an automated mail service. \n";

   $headers = ["MIME-Version: 1.0\r\n"];
   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      
      $retval = mail($email_to1,$email_subject1,$email_body1,$headers);
      if($retval) {
          header('Location: index.php');
      }else {
           header('Location: 404.php');
      }
   }
}

if(!isset($_SESSION['userlogin'])){
    if(isset($_POST['loginnet'])){
        $UserID=$_POST['UserID'];
        $userPassword=$_POST['userPassword'];
        $sql ="SELECT * FROM account WHERE userid=$UserID and password = '$userPassword'" ;
        $result =$conn->query($sql);
        $row=$result->fetch_assoc();
        if ($row['password'] == $userPassword) {
             $_SESSION['userlogin']=true;
            $_SESSION['data']=$row['userid'];
            header("Location:netbanking.php");
        }
        else{
            header("Location:netlogin.php?error=Incorrect%20Value");
        }
        
    }else{
            header("Location:netlogin.php");
    }
}

if(isset($_POST['ApplyNowcheq'])){
    $account = $_POST['account'];
    $name = $_POST['name'];
    $pincode = $_POST['pincode'];
    $cemail = $_POST['email'];

   $sql = "INSERT INTO `cheqbook_req` (account,name,pincode,email) VALUES ($account,'$name',$pincode,'$cemail')";
   $new = $conn->query($sql);
   try{
   if($new){
      $email_to1 = "mailto:$cemail";
      $email_subject1 = "BDIC Bank Cheque book request Recived";
      $email_body1 = "Hello $name \n \n We Have Recived Cheque-Book request For Account no - $account; \n We send Cheque-Book of 10 Pages On your Current resident address With Pincode Of '$pincode' \n If you can not received Your Cheque-Book Within 10 Working days Then Contect With Us\n \n \n If you haven’t done this transaction please click here OR Call us at 081132584, 9081-132-5208 and Press 0 to report. \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. \n Please do not reply to this mail as this is an automated mail service. \n";


       $headers = ["MIME-Version: 1.0\r\n"];
       $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
          
          $retval = mail($email_to1,$email_subject1,$email_body1,$headers);
          if($retval) {
              header('Location: netbanking.php');
          }else {
               header('Location: 404.php');
          }
   }
}finally{
    header('Location: netbanking.php');
}
}


if(isset($_POST['loanappsubmit'])){
    $userid = $_POST['userid'];
    $name = $_POST['name'];
    $fund = $_POST['fund'];
    $email = $_POST['email'];

   $sql = "INSERT INTO `loan_enquiry` (userid,name,balance,email) VALUES ($userid,'$name',$fund,'$email')";
   $new = $conn->query($sql);
   try{
   if($new){
      $email_to1 = "mailto:$email";
      $email_subject1 = "Apply For Loan";
      $email_body1 = "Hello $name \n We have Recived Your New Loan Request For Userid $userid\n    Our Teem Review your loan request , and also your account details than then further we decide your loan become is approved or declined \n All Update You Recived On $email, If this email is wrong Then Contect Us as soon as possible\n \n \n If you haven’t done this transaction please click here OR Call us at 081132584, 9081-132-5208 and Press 0 to report. \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. \n Please do not reply to this mail as this is an automated mail service. \n";
       $headers = ["MIME-Version: 1.0\r\n"];
       $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
          
          $retval = mail($email_to1,$email_subject1,$email_body1,$headers);
          if($retval) {
              header('Location: netbanking.php');
          }else {
               header('Location: netbanking.php');
          }
   }
   }finally{
    header('Location: netbanking.php');
}
}

if(isset($_POST['loanquery'])){
    $name = $_POST['name'];
    $userid = $_POST['userid'];
    $query = $_POST['query'];

    $sql = "INSERT INTO `loan_query` (userid,name,query) VALUES ($userid,'$name','$query')";
    $new = $conn->query($sql);
    if($new){
      header('Location: netbanking.php');
    }else{
        header('Location: netbanking.php');
   }
}


if(isset($_POST['passsubmit'])){
    $NewPass = $_POST['NewPass'];
    $OldPass = $_POST['OldPass'];
    $userid = $_POST['userid'];
    

    $sql = "SELECT * FROM account WHERE userid = $userid";
    $new = $conn->query($sql);
    $row=$new->fetch_assoc();
    if($OldPass == $row['password']){
            $sql1 = "UPDATE account SET password = '$NewPass' WHERE userid= $userid";
            $new = $conn->query($sql1);

              $email_to1 = "mailto:$email";
              $email_subject1 = "Apply For Loan";
              $email_body1 = "Hello Sir/Madam \n \n We detect some new changes on Your NETBANKING Password with user ID $userid \n    Now You Can Not Able To Login With Your Old password. \n All Update You Recived On $email, If this email is wrong Then Contect Us as soon as possible\n \n \n If you haven’t done this transaction please click here OR Call us at 081132584, 9081-132-5208 and Press 0 to report. \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof. \n Please do not reply to this mail as this is an automated mail service. \n";
               $headers = ["MIME-Version: 1.0\r\n"];
               $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
          
          $retval = mail($email_to1,$email_subject1,$email_body1,$headers);
          if($retval) {
              header('Location: netbanking.php');
          }else {
               header('Location: netbanking.php');
          }
    }else{
         header('Location: netbanking.php?status=LastChange:%20Password%20Change%20faild');
    }
}
?>


