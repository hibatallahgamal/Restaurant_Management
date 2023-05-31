<?php 
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "admin_panel";

 // Create a connection 
 $conn = mysqli_connect($servername, $username, $password, $database);


if($conn) {
    echo "success"; 
} 
else {
    die("Error". mysqli_connect_error()); 
} 


if(isset($_POST['submit_u']))
{
   echo "btn works";
$showAlert = false; 
$showError = false; 
$exists=false;
   

   $username = $_POST['username'];
       echo $username;
       
   $email = $_POST['email'];
        echo   $email;
        $desc = $_POST['description'];
        echo   $email;
   $password = $_POST['password'];
       echo   $password;
   $cpassword = $_POST['cpassword'];
       echo   $cpassword;

   if($password == $cpassword ){
       echo "passwords ";
       
       $query = "INSERT INTO `sign_up`(`username`, `email`, `description`, `password`) VALUES ('$username','$email','$desc','$password')";
       $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
          
            $_SESSION['success'] = "user Profile Added";
            echo "done";
            header('Location:tables.php');
        
        }
        else
       {
        $_SESSION['status'] = "Admin Profile NOT Added";
        header('Location:form_user.php');
       }
   }
   else
   {
    $_SESSION['status'] = "Password and Confirmed Passord Does Not Matche";
    header('Location:form_user.php');
    
   }  



}
?>