<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_panel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$id=$_REQUEST['id'];




if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['username'];
$email =$_REQUEST['email'];
$desc =$_REQUEST['description'];

$update="update `sign_up` set username='".$name."', email='".$email."', description='".$desc."' where id=".$id."";



mysqli_query($conn, $update) or die( mysqli_error());
header('Location:tables.php');


}
  
        
?>