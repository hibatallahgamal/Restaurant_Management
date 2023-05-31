<?php
$servername = "localhost"; 
 $username = "root"; 
 $password = "";
 $database = "odeo_restau";

  // Create a connection 
  $conn = mysqli_connect($servername, $username, $password, $database);


 if($conn) {
     echo "success"; 
 } 
 else {
     die("Error". mysqli_connect_error()); 
 } 


if(isset($_POST['submit_c']))
{
    echo "btn works";
$showAlert = false; 
$showError = false; 
$exists=false;
    

    $username = $_POST['name'];
        echo $username;
        
    $email = $_POST['email'];
         echo   $email;
    $password = $_POST['password'];
        echo   $password;
    $cpassword = $_POST['re_password'];
        echo   $cpassword;

    if($password == $cpassword ){
        echo "passwords ";
        
        $query = "INSERT INTO `sign_up_client`(`name`, `email`, `password`) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($conn, $query);

         if($query_run)
         {
           
             $_SESSION['success'] = "Admin Profile Added";
             echo "done";
             header('Location:sign_in_client.php');
         
         }
         else
        {
         $_SESSION['status'] = "Admin Profile NOT Added";
         header('Location:sign_up_client.php');
        }
    }
    else
    {
     $_SESSION['status'] = "Password and Confirmed Passord Does Not Matche";
     header('Location:sign_up_client.php');
     
    }  



}

?>