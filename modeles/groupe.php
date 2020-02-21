<?php
    class groupe{

        private $nomGroupe;
        private $co;



        public function __construct(){
            session_start();
              $args=func_get_args();
                        $co=$args[0];
                        $nomGroupe=$args[1];

                        $num = $_SESSION['numMembre'];
                        $result=mysqli_query($co,"INSERT INTO groupe (nomGroupe,numMembre) VALUES ('$nomGroupe','$num')")
                        or die ("Erreur insertion");

           }

    }
?>
