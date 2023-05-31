  <!-- tester si l'utilisateur est connecté -->
  <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:sign_in.php");
                   }
                }
                else if($_SESSION['email'] !== ""){
                    $user = $_SESSION['email'];
                    // afficher un message
                    echo "<br>Bonjour $user, vous êtes connectés";
                }
            ?>