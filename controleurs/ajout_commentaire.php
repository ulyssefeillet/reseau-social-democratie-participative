<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/commentaire.php");


    if(isset($_POST["texte"])) {
        $texte = $_POST["texte"];
        

        $coBd = new bd("test");
        $co = $coBd->connexion();
        $m = new Membre($co,$nom,$Prenom,$Mail,$login,$motdepasse);


        header('Location:../vues/formulaire_connexion.php');

    }
?>
