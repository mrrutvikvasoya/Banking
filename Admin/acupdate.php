<?php

  $Balance = $_POST['Balance'];
  $Loan = $_POST['Loan'];
  $UserId = $_POST['UserId'];
  $AccountNumber = $_POST['AccountNumber'];

  $MobileNumber = $_POST['MobileNumber'];
  $email = $_POST['email'];
  $FullName = $_POST['FullName'];

  $EnterPAN = $_POST['EnterPAN'];
  $EnterAadhaar = $_POST['EnterAadhaar'];
  $State = $_POST['State'];
  $City = $_POST['City'];
  $Branch = $_POST['Branch'];
  
  $birthday = $_POST['birthday'];
  $Gender = $_POST['Gender'];
  $marital = $_POST['marital'];

  $FatherName = $_POST['FatherName'];
  $MotherName = $_POST['MotherName'];

  $employment = $_POST['employment'];
  $Annualincome = $_POST['Annualincome'];

  $FlatNO = $_POST['FlatNO'];
  $RoadName = $_POST['RoadName'];
  $Landmark = $_POST['Landmark'];
  $ZipCode = $_POST['ZipCode'];
  $city1 = $_POST['city1'];
  $State1 = $_POST['State1'];

   $Signature = $_FILES['Signature']['name'];
   $Signature_temp = $_FILES['Signature']['tmp_name'];
   $Signature_folder = 'proofs/' . $Signature;

   $Adharcard = $_FILES['Adharcard']['name'];
   $Adharcard_temp = $_FILES['Adharcard']['tmp_name'];
   $Adharcard_folder = 'proofs/' . $Adharcard;
   
   $PanCard = $_FILES['PanCard']['name'];
   $PanCard_temp = $_FILES['PanCard']['tmp_name'];
   $PanCard_folder = 'proofs/' . $PanCard;
	
    include "database.php";
	 $sql = "UPDATE `account` SET `userid`=$UserId,`accountno`=$AccountNumber,`mobile`=$MobileNumber,`email`='$email',`pan`='$EnterPAN',`aadhaar`=$EnterAadhaar,`branch`='$Branch',`name`='$FullName',`birthday`='$birthday',`gender`='$Gender',`merital`='$marital',`fathername`='$FatherName',`mothername`='$MotherName',`flatno`='$FlatNO',`roadname`='$RoadName',`landmark`='$Landmark',`zipcode`=$ZipCode,`city`='$city1',`state`='$State1',`employment`='$employment',`income`=$Annualincome,`adharphoto`='$Adharcard_folder',`panphoto`='$PanCard_folder',`signphoto`='$Signature_folder',`fund`='$AddFund',`loan`=$Loan  WHERE `id`= ";


   $row = $conn->query($sql);
     move_uploaded_file($Signature_temp, $Signature_folder);
     move_uploaded_file($Adharcard_temp, $Adharcard_folder);
     move_uploaded_file($PanCard_temp, $PanCard_folder);

   if($row){
   	echo "State";
   }
   else{
   	echo "string";
   }

?>