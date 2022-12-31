<?php
session_start();
session_destroy();
header("Location:netlogin.php");
?>