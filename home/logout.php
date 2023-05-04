<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "education");
if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
session_unset();
session_destroy();
header('location:../user.php ');
?>