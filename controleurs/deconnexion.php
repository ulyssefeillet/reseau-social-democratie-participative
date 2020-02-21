<?php
    require_once("../modeles/bd.php");
    require_once("../modeles/membre.php");

    session_start();

    if(isset($_POST["deconnec"]) && isset($_POST["mdpasse"])) {

        $coBd = new BD("espace_membres");
        $co = $coBd->connexion();
        $nom = $_SESSION["pseudo"];

        $result = mysqli_query($co, "SELECT * FROM membres WHERE pseudo='$nom' AND mdpasse = '$mdpasse'") or ide ("erreur requete");
        

        while($row = mysql_fetch_assoc($result)) {
            $mdpasse = $row["mdpasse"];
            $m = new Membre($co,$nom,$pwd);
            $m->deconnexion();
        }
        else {
            header('Location:../vues/formulaire_inscription.php');
        }
    }
?>
