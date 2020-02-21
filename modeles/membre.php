<?php
    class Membre{

        private $numMembre;
        private $nom;
        private $prenom;
        private $mail;
        private $login;
        private $motdepasse;
        private $co;


        public function __construct(){

            $cpt=func_num_args();
            $args=func_get_args();

            switch($cpt)
            {
              case 3 :
                $co=$args[0];
                $login=$args[1];
                $motdepasse=$args[2];

                $result=mysqli_query($co,"SELECT numMembre, nomMembre, Prenom, login
                                          FROM membre
                                          WHERE login='$login'
                                          AND motdepasse='$motdepasse'") or die ("Erreur requete t existe pas");

                while($row=mysqli_fetch_assoc($result)){
                    $this->co=$co;

                    $this->num=$row["numMembre"];
                    $this->mail=$mail;
                    $this->motdepasse=$motdepasse;
                    $this->nom=$row["nomMembre"];
                    $this->prenom=$row["Prenom"];
                    $this->login=$row["login"];
                }
                break;


              case 6:
                        $co=$args[0];
                        $nom=$args[1];
                        $prenom=$args[2];
                        $mail=$args[3];
                        $motdepasse=$args[4];
                        $login=$args[5];


                        $result=mysqli_query($co,"INSERT INTO membre (nomMembre,Prenom,Mail,login,motdepasse) VALUES ('$nom','$prenom','$mail','$login','$motdepasse')")
                        or die ("Erreur insertion");

                        $result=mysqli_query($co,"SELECT *
                                                  FROM Membre
                                                  WHERE login='$login'
                                                  AND motdepasse='$motdepasse'");

                            while($row=mysqli_fetch_assoc($result)){
                              $this->co=$co;

                              $this->num=$row["numMembre"];
                              $this->mail=$mail;
                              $this->nom=$nom;
                              $this->prenom=$prenom;
                              $this->motdepasse=$motdepasse;
                              $this->login= $row["login"];
                          }
                          break;

           }
       }

        public function connexion(){
            session_start();
            $_SESSION["mail"]=$this->mail;
        }

        public function deconnexion(){
            session_destroy();
            mysqli_close($this->co);
        }

        /*public function modif_mdp($mdp){
            $id=$this->id;
            $this->mdp=mdp;
            mysqli_query($co,"UPDATE membre SET mdp='$mdp' WHERE numUser='$numUser'")
             or die ("Erreur modif mdp");
        }*/

    }
?>

