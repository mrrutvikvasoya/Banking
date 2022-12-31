<?php
$conn = new mysqli("localhost","root","","bdicbank");
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
?>
