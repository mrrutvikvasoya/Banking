<?php
session_start();
if(isset($_SESSION['adminlogin'])){
        $data=$_SESSION['admindata'];
    }else{
      header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BDIC Employee</title>
    <link rel="icon" type="image/x-icon" href="img/fevicon.png">
	<link rel="stylesheet" href="assest/vendor/chartist/css/chartist.min.css">
    <link href="assest/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="assest/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assest/css/style.css" rel="stylesheet">

    <link href="assest/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
    #example3 td, #example3 th{
        text-align: center!important;
    }
</style>
</head>
<body>

 

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="show">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img src="img/logo1.png" style="width: 40%" alt="Logo">
                <h2 class="brand-title" width="103" height="31">BDIC</h2>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		

		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard   
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="index.php" role="button" data-bs-toggle="dropdown">
									<div class="header-info">
										<span>Rutvik Vasoya</span>
										<small>Super Admin</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <!--**********************************
            Sidebar Start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                     <li class="">
                    	<a  href="index.php" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">Applications</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="accounts.php">Account</a></li>
                        </ul>
                    </li>
                    <li><a href="cont.php" aria-expanded="false">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">Support</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Requests</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="cheqbook.php">Cheque Book</a></li>
                            <li><a href="loaninq.php">Loan Inquery</a></li>
                            <li><a href="loanfeed.php">Loan Feedback</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-internet"></i>
                            <span class="nav-text">Email</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Email.php">Email To</a></li>
                            <li><a href="emailletters.php">Email Letter</a></li>
                        </ul>
                    </li>
                </ul>
			</div>
        </div>
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">