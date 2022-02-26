<?php 
            include('../vues/connect.php');

            $dataUser = 'SELECT id_prestaire,login,password,date_creation FROM prestataire  ORDER BY id_prestaire DESC';
            $reponse = $bdd->query($dataUser);
            // $reponse_Data = $reponse->fetch();
            $nombre=$reponse->rowCount();
            


?>