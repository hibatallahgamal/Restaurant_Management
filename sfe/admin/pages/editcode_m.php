<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "odeo_restau";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$id=$_REQUEST['id'];




if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$ing =$_REQUEST['ingrediants'];
$price =$_REQUEST['price'];

$update="update `menu` set name='".$name."', ingrediants='".$ing."', price='".$price."' where id=".$id."";



mysqli_query($conn, $update) or die( mysqli_error());
header('Location:menu.php');


}
  
        
?>