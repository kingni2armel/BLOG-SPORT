<?php
    
        include('../vues/connect.php');
        //requette qui selection l'id de l'utilisateur dont la session est en coure
            $getId='SELECT id_prestaire FROM prestataire WHERE login= "'.$_SESSION['login'].'" AND password = "'. $_SESSION['password'].'" ';
            $reponse_id=$bdd->query($getId);
            $reponse=$reponse_id->fetch();
         
            // selection de toute les publication faitent par l'utilisateur encoure d'utilisation
            $requette = 'SELECT * FROM publication_prestataire WHERE id_prestaire="'.$reponse['id_prestaire'].'" ORDER BY id_publication_prestataire DESC';

            $reponse_data=$bdd->query($requette);
            $nombre = $reponse_data->rowCount();
?>