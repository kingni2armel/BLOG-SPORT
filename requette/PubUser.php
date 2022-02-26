<?php
            include('connect.php');

        // cette requette permet de selectionner toute les  publications dans la table de publication des prestataires
            $req='SELECT * FROM publication_prestataire ORDER BY id_publication_prestataire DESC'; 
            $data=$bdd->query($req);
            $datas=$data->rowCount();
          
            if($datas<=0){
                    ?> 
                            <p>Aucune publication pour l'instant</p>
                    <?php
            } 


            

    



?>