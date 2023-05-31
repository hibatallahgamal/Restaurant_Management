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


if(isset($_POST['contact_btn']))
{
    echo "btn works";
$showAlert = false; 
$showError = false; 
$exists=false;
    

    $username = $_POST['name'];
        echo $username;
        
    $email = $_POST['email'];
         echo   $email;
    $subject = $_POST['subject'];
        echo   $subject;
    $message= $_POST['message'];
        echo   $message;

        
        $query = "INSERT INTO `contact_us`(`name`, `email`, `subject` ,`message`) VALUES ('$username','$email','$subject' ,'$message')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
          
            $_SESSION['success'] = "sent";
            echo "done";
            header('Location:index.php');
        
        }
        else
       {
        $_SESSION['status'] = "unsent";
        header('Location:index.php');
       }

}

?>