<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_panel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$id=$_REQUEST['id'];
$query = "DELETE FROM `sign_up` WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: tables.php"); 
?>