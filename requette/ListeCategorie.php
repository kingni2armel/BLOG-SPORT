<?php 
            include('../vues/connect.php');

            $req='SELECT * FROM categories ORDER BY id_categorie DESC';
            $resultat=$bdd->query($req);
              


?>