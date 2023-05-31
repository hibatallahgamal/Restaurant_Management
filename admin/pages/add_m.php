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


if(isset($_POST['submit_m']))
{
   echo "btn works";
$showAlert = false; 
$showError = false; 
$exists=false;
   

   $id = $_POST['id'];
       echo $username;
       
   $name = $_POST['name'];
        echo   $email;
    $ing = $_POST['ingrediants'];
        echo   $email;
   $price = $_POST['price'];
       echo   $password;
  

   if($password == $cpassword ){
       echo "passwords ";
       
       $query = "INSERT INTO `menu`(`id`, `name`, `ingrediants`, `price`) VALUES ('$id','$name','$ing','$price')";
       $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
          
            $_SESSION['success'] = "dish Added";
            echo "done";
            header('Location:menu.php');
        
        }
        else
       {
        $_SESSION['status'] = "dish NOT Added";
        header('Location:menu_form.php');
       }
   }
   



}
?>