<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "odeo_restau";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$id=$_REQUEST['id'];
$query = "DELETE FROM `menu` WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: menu.php"); 
?>