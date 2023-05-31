<?php
function ajouter($image, $nom, $prix, $description)
{
        if(require("connexion.php"))
    {
            $req = $access->prepare("INSERT INTO produit (image, nom, prix, description) VALUES ($image, $nom, $prix ,$description)");

            $req->execute(array($image, $nom, $prix, $description));

            $req->closeCursor();
    }

function afficher()
{
        if(require("connexion.php"))
    {
            $req=Saccess->prepare("SELECT * FROM produit ORDER BY id DESC");

            $req->execute();

            $data = $req->fetchAll(PDO::FETCH_OBJ);

            return $data;

            $req->closeCursor();
    }
}


function supprimer($id)
{
    if(require("connexion.php"))
    {
        $req=$access->prepare("DELETE * FROM produit WHERE id=?");

        $req->execute(array($id));
    }
}

?>


