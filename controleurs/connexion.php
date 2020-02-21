<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/membre.php");

    session_start();

    if(isset($_POST["login"]) && isset($_POST["motdepasse"])) {
        $login = $_POST["login"];
        $motdepasse = $_POST["motdepasse"];

        $coBd = new bd("test");
        $co = $coBd->connexion() or die("erreur connexion");

        $result = mysqli_query($co, "SELECT * FROM membre WHERE login='$login' AND motdepasse = '$motdepasse'") or die ("erreur requete marche pas");
        

        if(mysqli_num_rows($result) == 1) {
            $m = new Membre($co,$login,$motdepasse);
            $m->connexion();
            header('Location:../vues/espace_membre.php');

        }
        else {
            header('Location:../vues/formulaire_inscription.php');
        }
    }
?>
