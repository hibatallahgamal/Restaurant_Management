<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'admin_panel';
    $db_host     = 'odeo_restau';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM sign_up_client where 
              email = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['email'] = $username;
           header('Location: ../odeo_Restaurant/cart.php');
        }
        else
        {
           header('Location: sign_in_client.php?erreur=1'); 
           echo utilisateur ou mot de passe incorrect ;
        }
    }
    else
    {
       header('Location: sign_in_client.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: sign_in_client.php');
}
mysqli_close($db); // fermer la connexion
?>