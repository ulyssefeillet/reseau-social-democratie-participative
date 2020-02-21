<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/commentaire.php");


    if(isset($_POST["nom"])) {
        $nom = $_POST["nom"];
        $Prenom = $_POST["Prenom"];
        $Mail = $_POST["Mail"];
        $motdepasse = $_POST["motdepasse"];
        $login = $_POST["login"];

        $coBd = new bd("test");
        $co = $coBd->connexion();
        $m = new Membre($co,$nom,$Prenom,$Mail,$login,$motdepasse);


        header('Location:../vues/formulaire_connexion.php');

    }
?>
