<?php

include "database.php";

if(isset($_POST['submit'])){
  $MobileNumber = $_POST['MobileNumber'];
  $email = $_POST['email'];
  $EnterPAN = $_POST['EnterPAN'];
  $EnterAadhaar = $_POST['EnterAadhaar'];
  $State = $_POST['State'];
  $City = $_POST['City'];
  $Branch = $_POST['Branch'];
  $FullName = $_POST['FullName'];
  $birthday = $_POST['birthday'];
  $Gender = $_POST['Gender'];
  $marital = $_POST['marital'];
  $FatherName = $_POST['FatherName'];
  $MotherName = $_POST['MotherName'];
  $FlatNO = $_POST['FlatNO'];
  $RoadName = $_POST['RoadName'];
  $Landmark = $_POST['Landmark'];
  $ZipCode = $_POST['ZipCode'];
  $city1 = $_POST['city1'];
  $State1 = $_POST['State1'];
  $employment = $_POST['employment'];
  $Source = $_POST['Source'];
  $Annualincome = $_POST['Annualincome'];
  $AddressProof = $_POST['AddressProof'];
  $AddFund = $_POST['AddFund'];

   $Signature = $_FILES['Signature']['name'];
   $Signature_temp = $_FILES['Signature']['tmp_name'];
   $Signature_folder = 'proofs/' . $Signature;

   $Adharcard = $_FILES['Adharcard']['name'];
   $Adharcard_temp = $_FILES['Adharcard']['tmp_name'];
   $Adharcard_folder = 'proofs/' . $Adharcard;
   
   $PanCard = $_FILES['PanCard']['name'];
   $PanCard_temp = $_FILES['PanCard']['tmp_name'];
   $PanCard_folder = 'proofs/' . $PanCard;

   $acimg = $_FILES['acimg']['name'];
   $acimg_temp = $_FILES['acimg']['tmp_name'];
   $acimg_folder = 'proofs/' . $acimg;




  $sql = "INSERT INTO `account` (`mobile`, `email`, `pan`, `aadhaar`, `branch`, `name`, `birthday`, `gender`, `merital`, `fathername`, `mothername`, `flatno`, `roadname`, `landmark`, `zipcode`, `city`, `state`, `employment`, `income`, `profilephoto`, `adharphoto`, `panphoto`, `signphoto`, `fund`,`password`) VALUES ($MobileNumber,'$email','$EnterPAN','$EnterAadhaar', '$Branch','$FullName','$birthday','$Gender','$marital','$FatherName','$MotherName','$FlatNO','$RoadName','$Landmark',$ZipCode,'$city1','$State1','$employment',$Annualincome,'$acimg_folder','$Adharcard','$PanCard','$Signature','$AddFund','$EnterPAN')";

   $row = $conn->query($sql);
     move_uploaded_file($Signature_temp, $Signature_folder);
     move_uploaded_file($Adharcard_temp, $Adharcard_folder);
     move_uploaded_file($PanCard_temp, $PanCard_folder);
     move_uploaded_file($acimg_temp, $acimg_folder);

     try{
   if($row){
        $email_to = "mailto:mrrutvikvasoya1@gmail.com";
        $email_subject = "New Account Request";
        $email_body = "MobileNumber: $MobileNumber\n email: $email\nEnterPAN: $EnterPAN\nEnterAadhaa: $EnterAadhaar \nState: $State\nCity: $City\nBranch: $Branch\nFullName: $FullName \nbirthday: $birthday\nGender: $Gender\nmarital: $marital\nFatherName: $FatherName\nMotherName: $MotherName\nFlatNO: $FlatNO\nRoadName: $RoadName\nLandmark: $Landmark\nZipCode: $ZipCode\ncity1: $city1\nState1: $State1\nemployment: $employment\nSource: $Source\nAnnualincome: $Annualincome\n Signature: $Signature.\n AddFund: $AddFund.\n";
         
        $email_to1 = "mailto:$email";
        $email_subject1 = "New Account Request Recived by BDICBank";
        $email_body1 = "Hello $FullName \n Welcome to the BDIC BANK famaily \nYour New Digital Saving Account Open Request received for PanCard No ' $EnterPAN ', Bank process your request within 24 hours pls wait untile your request processed \n \n Your Added Amount is' $AddFund 'rs that will reflect in your account within 24 hours \n \n (*) First Time Your Netbanking PassWord Is Your pancard number, When You can get your user id after you can logain  and also change password\n \nNOTE: 'in any case, if your account is not opened then our agent will call you, and your fund transferred to your other bank account' \n \n IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof.";

         $headers = ["MIME-Version: 1.0\r\n"];
         $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      

      $retval = mail($email_to,$email_subject,$email_body,$headers);
      if($retval) {
         header('Location: index.php');
      }else {
         header('Location: 404.php');
      }
      
      $retval = mail($email_to1,$email_subject1,$email_body1,$headers);
      if($retval) {
         header('Location: index.php');
      }else {
           header('Location: 404.php');
      }
   }
}finally{
    header('Location: index.php');
}
}
?>