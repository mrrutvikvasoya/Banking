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
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/media.css">
  <title>Open New Account</title>
<style>
  body{
    background: #f0ecec;
  }
  .myfild{
    width: 245px;
    height: 25px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 4px!important;
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  }

  .empsearchbtn {
      text-decoration: none;
      color: white;
      background: #354170;
      border-radius: 6px;
      width: 100px;
      height: 43px;
      cursor: pointer;
      border: transparent;
      padding: 0;
      margin: 0 0 2px 10px;
  }
  #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  padding: 20px;
}

#customers tr:nth-child(even) {background-color: #ebebeb;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  color: black;
}
#customers td {
  text-align: center;
  font-size: 18px;
}

/* ************************************* pop up ********************************************* */

*
        {
          margin: 0px;
          padding: 0px;
          font-family: Arial, Helvetica, sans-serif;
        }
      .overlay
        {
          width: 100%;
          height: 100vh;
          position: fixed;
          top: 0%;
          background: rgba(0, 0, 0, 0.5);
          z-index: -1;
          opacity: 0;
          transition: 1s;
        }
      .showoverlay
        {
          opacity: 1;
          z-index: 1;
        }
      .useracc
        {
          width: 350px;
          padding: 30px 20px;
          background-color: whitesmoke;
          position: absolute;
          left: 50%;
          top: -50%;
          z-index: 9;
          box-shadow: 0px 0px 10px 3px #ccc;
          transform: translate(-50%,-50%);
          transition: 1s;
        }
      .showUserform
        {
          top: 50%;
        }
      .useracc input
        {
          width: 100%;
          margin-bottom: 15px;
          height: 35px;
        }
      .useracc button
        {
          background-color: black;
          color: white;
          padding: 10px 15px;
          cursor: pointer;
        }
      .useracc span
        {
          position: absolute;
          top: 0px;
          right: 0px;
          width: 30px;
          cursor: pointer;
          height: 30px;
          line-height: 30px;
          background-color: green;
          color: white;
          text-align: center;
        }
      .acholderdetails button
        {
          border-radius: 100px;
          border: none;
          background-color: #ebebeb;
        } 
      .acholderdetails button:hover
        {
          background-color: #ddd;
        }
      .nav-roll h3  
        {
          margin-top: 25px;
        }
      
/* ************************************************************************************************************** */

</style>
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
              <input class="myfild" type="text" name="search" placeholder="Search">
            <input class="empsearchbtn" type="submit" name="searchsubmit">
            </div>
          </form>
        </div>
    </div>
  </div>

  <div class="acholderdetails">
    <div class="linedetail">
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
            <button><i class="fa fa-pencil-square-o" id="btn-details" style="color: black"; aria-hidden="true" ></i></button>
          </td>
        </tr>
        <?php } ?>
      </table>

    </div>
  </div>


<!-- ******************************************************************************* -->


        <div class="overlay" onclick="closeModal()"></div>

        <div class="useracc">
          <span>&times;</span>
          <form action="">

            <div>
              <label for="username">Username</label>
              <input type="text" name="#" id="#">
            </div>

            <div>
              <label for="password">Password</label>
              <input type="password" name="#" id="#">
            </div>

            <button>Edit</button>
          </form>
        </div>

<!-- ****************************************************************************************************** -->


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
<script src="../js/myscripts.js"></script>
<script src="../js/card.js"></script>

<!-- ***************************************************************************************************** -->
<script>
            function showModal(){
              document.querySelector('.overlay').classList.add('showoverlay');
              document.querySelector('.useracc').classList.add('showUserform');
            }
            function closeModal(){
              document.querySelector('.overlay').classList.remove('showoverlay');
              document.querySelector('.useracc').classList.remove('showUserform');
            }


            var btndetail=document.querySelector("#btn-details");   //create variable for show pop up 
            btndetail.addEventListener("click",showModal)  // check 

            var close=document.querySelector("span");
            close.addEventListener("click",closeModal)

        </Script>
<!-- ***************************************************************************************************** -->

</body>
</html>


