<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/groupe.php");


    if(isset($_POST["libelle"])) {

        $coBd = new bd("test");
        $co = $coBd->connexion();

        $libelle = $_POST["libelle"];
        $g = new Groupe($co,$libelle);



        header('Location:../vues/affiche_proposition.php');

    }
?>
