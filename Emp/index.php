<?php
session_start();
session_destroy();
include "../database.php";
$search = '50100';
if (isset($_GET['search'])) {
  $search = $_GET['search'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="icon" type="image/x-icon" href="../img/fevicon.png">
  <link rel="stylesheet" type="text/css" href="emp.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

  <title>Employee</title>
</head>
<body oncontextmenu="return false">
  <div id="newac">
    <nav>
    <div class="nav-roll">
      <img src="../img/logo1.png" alt="logo" class="logo">
      <h3>Business Development & investment Corporation</h3>
    </div>
    <a href="logout.php" class="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
    </nav>
  </div>
  <div id="emp">
    <div class="empbar">
        <div class="empname">
            <p class="empnamep">Emp Id : <b>8855</b></p>
            <p class="empnamep">Hello' Rutvik Vasoya <small> (Casher) </small></p>
        </div>
        <div class="empother">
          <form method="POST" action="data.php">
            <div class="empformscl">  
              <input class="myfild" type="number" name="search" placeholder="Search" required>
            <input class="empsearchbtn" type="submit" name="searchsubmit">
            </div>
          </form>
        </div>
    </div>
  </div>

  <div class="acholderdetails">
    <div class="linedetail" style="    overflow-x: auto;">
      <table style="width: 100%;" id="customers">
        <tr>
          <th> User Id </th>
          <th> Account Number </th>
          <th> Balance </th>
          <th> Full Name </th>
          <th> Details </th>
        </tr>
        <?php
        $que = "SELECT * FROM `account` WHERE `userid` = $search OR `accountno` = $search OR `mobile` = $search ";
        $exe = $conn->query($que);
        while($row = $exe->fetch_assoc()){
        ?>
        <tr>
          <td> <?php echo $row['userid']; ?> </td>
          <td> <?php echo $row['accountno']; ?> </td>
          <td> <?php echo $row['fund']; ?> </td>
          <td> <?php echo $row['name']; ?> </td>
          <td>
            <i class="fa fa-pencil-square-o" style="color: black;" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#closeaccount"></i>
          </td>
        </tr>
        <?php } ?>
      </table>

    </div>
  </div>

<div class="modal fade" id="closeaccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Responce</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="query.php" method="POST" >
      <div class="modal-body">
        <div class="card-body">
           <div class="basic-form">
                 <div class="mb-3">
                    <h3>To close Account/Request</h3>
                    <input name="id1" type="hidden" class="form-control" value="" id="id1">
                    <input name="email" type="hidden" class="form-control" value="" id="email1">
                    <input name="name" type="hidden" class="form-control" value="" id="name1">
                    <input name="accountno" type="hidden" class="form-control" value="" id="accountno1">
                    <input name="fund" type="hidden" class="form-control" value="" id="fund1">
                    <input name="userid" type="hidden" class="form-control" value="" id="userid1">
                    <input name="reasoncloser" type="text" class="form-control" id="reasoncloser" placeholder="Reason" required>
                 </div>
           </div>
        </div>
      </div>
    <div class="modal-footer">
        <input type="submit" class="btnnext btnsub btn btn-primary" value="Confirm" name="deleteaccount"  >
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
<script src="../js/myscripts.js"></script>
<script src="../js/card.js"></script>
</body>
</html>