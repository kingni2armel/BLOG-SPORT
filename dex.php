
<?php 
            include('connect.php');
            $req=$bdd->query('SELECT * FROM categories ORDER BY id_categorie DESC');
?>
                    <form action="" method="GET">
                    <?php 
                                        $route ="vues/seePub.php?id=";
                                       while($resultat=$req->fetch()){
                                        ?>  
                                                        <a name="" value="<?= $resultat['id_categorie'];?>>" href="<?= $route.$resultat['id_categorie']  ?>"><?= $resultat['nom_categorie']; ?></a>

                                        <?php
                                       
                                    }
                        ?>

                    </form>

