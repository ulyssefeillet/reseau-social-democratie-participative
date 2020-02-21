<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/membre.php");


    if(isset($_POST["nom"]) && isset($_POST["Prenom"])&& isset($_POST["motdepasse"]) && isset($_POST["Mail"])&& isset($_POST["login"])) {
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
