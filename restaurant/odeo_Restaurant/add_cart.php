<?php 
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "odeo_restau";

 // Create a connection 
 $conn = mysqli_connect($servername, $username, $password, $database);


if($conn) {
    echo "success db"; 
} 
else {
    die("Error". mysqli_connect_error()); 
} 

$id = $_GET["id"];

mysqli_query($conn,"INSERT INTO `cart` Values ('','$id')");

header("Location: index.php");
?>