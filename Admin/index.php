<?php include 'header.php'; ?>


<?php
include "../database.php";
$sql = "SELECT  SUM(fund) from account";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)){
?>
	<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="me-3 bgl-success text-success">
						<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text text-success">
							<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
							<polyline points="14 2 14 8 20 8"></polyline>
							<line x1="16" y1="13" x2="8" y2="13"></line>
							<line x1="16" y1="17" x2="8" y2="17"></line>
							<polyline points="10 9 9 9 8 9"></polyline>
						</svg>
					</span>
					<div class="media-body">
						<p class="mb-1">Total Funds</p>
						<h4 class="mb-0"><?php echo $row['SUM(fund)'] ?> ₹</h4>
					</div>
				</div>
			</div>
		</div>
    </div>
<?php } ?>
<?php
include "../database.php";
$sql = "SELECT  SUM(loan) from account";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)){
?>
	<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card">
			<div class="card-body  p-4">
				<div class="media ai-icon">
					<span class="me-3 bgl-danger text-danger">
						<svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
							<line x1="12" y1="1" x2="12" y2="23"></line>
							<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
						</svg>
					</span>
					<div class="media-body">
						<p class="mb-1">Loans</p>
						<h4 class="mb-0"><?php echo $row['SUM(loan)'] ?> ₹</h4>
					</div>
				</div>
			</div>
		</div>
    </div>
<?php } ?>

<?php
include "../database.php";
$sql = "SELECT count(*) FROM account WHERE status = 'Approved'";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)){
?>
	<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
		<div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="me-3 bgl-primary text-primary">
						<!-- <i class="ti-user"></i> -->
						<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
							<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
							<circle cx="12" cy="7" r="4"></circle>
						</svg>
					</span>
					<div class="media-body">
						<p class="mb-1">Total Account Holders</p>
						<h4 class="mb-0"><?php echo $row['count(*)'] ?></h4>
					</div>
				</div>
			</div>
		</div>
    </div>
<?php } ?>

<?php
include "../database.php";
$sql = "SELECT count(*) FROM account WHERE status = 'pending'";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)){
?>
	<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="me-3 bgl-warning text-warning">
						<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database text-warning">
							<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
							<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
							<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
						</svg>
					</span>
					<div class="media-body">
						<p class="mb-1">Pending Account Requestes</p>
						<h4 class="mb-0"><?php echo $row['count(*)'] ?></h4>
					</div>
				</div>
			</div>
		</div>
    </div>
 <?php } ?>


<?php
include "../database.php";
$sql = "SELECT count(*) FROM contactus WHERE status = 'Pending'";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)){
?>
	<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
		<div class="widget-stat card bg-info">
			<div class="card-body p-4">
				<div class="media">
					<span class="me-3">
						<i class="flaticon-381-heart"></i>
					</span>
					<div class="media-body text-white text-end">
						<p class="mb-1">Support Requestes</p>
						<h3 class="text-white"><?php echo $row['count(*)'] ?></h3>
					</div>
				</div>
			</div>
		</div>
    </div>
 <?php } ?>

<?php
include "../database.php";
$sql = "SELECT count(*) FROM subemail";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)){
?>
 	<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
		<div class="widget-stat card bg-primary">
			<div class="card-body p-4">
				<div class="media">
					<span class="me-3">
						<i class="flaticon-381-user-7"></i>
					</span>
					<div class="media-body text-white text-end">
						<p class="mb-1">Email Letter Members</p>
						<h3 class="text-white"><?php echo $row['count(*)'] ?></h3>
					</div>
				</div>
			</div>
		</div>
    </div>
  <?php } ?>
<?php include 'footer.php'; ?>

