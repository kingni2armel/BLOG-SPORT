     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/aos.css">
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="../styles/dropdown.css">
    <!-- ----------------------------  Navigation ---------------------------------------------- -->
    <?php 
           
           //connexion au fichier de la bd0
             include('connect.php');
             include('../requette/categorie-requette.php'); 
             //requette qui permet de recuperer toute les categories
            $req=$bdd->query('SELECT * FROM categories ORDER BY id_categorie DESC');
            //requette qui permet de recuperer le password et le login de l'admnistrateur
            $requette= 'SELECT login,password FROM admin';
            $reponse=$bdd->query($requette);
            $identifiant=$reponse->fetch();
            $loginAdmin= $identifiant['login'];
            $passwordAdmin = $identifiant['password'];
            //requette qui permet de recuperer les accees des prestataires
            $data='SELECT login,password FROM prestataire';
            $reponse_data=$bdd->query($data);
            $access=$reponse_data->fetch();
?>
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">Sport News</a>
          
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>

                <ul class="nav-items">
                    
                    <?php 
                                        $route ="vues/seePub.php?id=";
                                        $space="../";
                                       while($resultat=$req->fetch()){
                                        ?>  
                                                    <li class="nav-link">
                                                    
                                                        <a  name="" value="<?=  $resultat['id_categorie'];?>>" href=" <?= $space. $route.$resultat['id_categorie']  ?>"><?= $resultat['nom_categorie']; ?></a>
                                                     <li>
                                        <?php
                                       
                                    }
                        ?>
                  
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <?php
                            
                          
                            // if($_SESSION['password']=$passwordAdmin){
                            //     echo "pancho";
                            // }
                           
                                    if(isset($_SESSION['login']) && isset($_SESSION['password'])){
                                            if($_SESSION['login']==$loginAdmin && $_SESSION['password']=$passwordAdmin){
                                               ?>
                                               <div class="dropdown">
                                        <button class="dropbtn">Dahboard</button>
                                        <div class="dropdown-content" style="">
                                            <a href="categorie.php" class="data">Categorie</a>
                                            <a href="publication.php" class="data">Publication</a>
                                            <a href="add-user.php" class="data">Add-User</a>
                                            <a href="message.php" class="data">Message</a>
                                            <a href="pub-user.php" class="data">Pub User</a>
                                            <form action="../index.php" method="POST">
                                                        <button type="submit" name="deconnexion" value="Deconnexion">Deconnexion</button>
                                                     
                                            </form>
                                         

                                          

                                        </div>
                                        </div>
                                               <?php



                                }
                                    } 
                                    
                            
                 ?>
            </div>
        </div>
    </nav>
