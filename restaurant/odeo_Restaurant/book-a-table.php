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


if(isset($_POST['book_table']))
{
    echo "btn works";

$showAlert = false; 
$showError = false; 
$exists=false;
    

    $username = $_POST['name'];
        echo $username;
        
    $email = $_POST['email'];
         echo   $email;
    $phone = $_POST['phone'];
        echo   $phone;
    $date = $_POST['r_date'];
        echo   $date;
    $time = $_POST['time'];
        echo   $time;
    $ppl = $_POST['nbr_ppl'];
        echo   $ppl;
    $msg = $_POST['msg'];
        echo   $msg;


  
        
        $query = "INSERT INTO `r_table`(`name`, `email`, `phone` ,`r_date`, `time`, `nbr_ppl` , `msg`) VALUES ('$username','$email','$phone' ,'$date' ,'$time' ,'$ppl' ,'$msg')";
        $query_run = mysqli_query($conn, $query);

         if($query_run)
         {
           
             $_SESSION['success'] = "table reservation checked";
             echo "done";
             header('Location:index.php');
         
         }
         else
        {
         $_SESSION['status'] = "resevation inturrapted";
         header('Location:index.php');
        }
   
 



} 
?>
