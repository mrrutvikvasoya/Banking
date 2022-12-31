<?php
include "../database.php";

if (isset($_POST['searchsubmit'])) {
$det = $_POST['search'];
header("Location:index.php?search=$det");
}

?>