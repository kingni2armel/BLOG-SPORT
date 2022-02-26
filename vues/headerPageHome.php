<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <!-- <link rel="stylesheet" href="./css/Style.css"> -->
    <link rel="stylesheet" href="./css/aos.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/dropdown.css">

    <title></title>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->
    <?php 
           
           //connexion au fichier de la bd
             include('connect.php');
             include('requette/categorie-requette.php'); 
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
                <a href="../index.php" class="text-gray">Sport News</a>
          
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
                                       while($resultat=$req->fetch()){
                                        ?>  
                                                    <li class="nav-link">
                                                        <a  name="" value="<?= $resultat['id_categorie'];?>>" href=" <?= $route.$resultat['id_categorie']  ?>"><?= $resultat['nom_categorie']; ?></a>
                                                     <li>
                                        <?php
                                       
                                    }
                        ?>
                  
                </ul>
            </div>
            <div class="social text-gray" style="margin-top:-10px">
               
                <?php
                            
                                    if(isset($_SESSION['login']) && isset($_SESSION['password'])){
                                            if($_SESSION['login']==$loginAdmin && $_SESSION['password']==$passwordAdmin){
                                                  
                                               ?>
                                               <div class="dropdown">
                                        <button class="dropbtn">Dahboard</button>
                                        <div class="dropdown-content" style="">
                                            <a href="vues/categorie.php" class="data">Categorie</a>
                                            <a href="vues/publication.php" class="data">Publication</a>
                                            <a href="vues/add-user.php" class="data">Add-User</a>
                                            <a href="vues/message.php" class="data">Message</a>
                                            <a href="vues/pub-user.php" class="data">Pub User</a>
                                            <form action="index.php" method="POST">
                                                        <button type="submit" name="deconne" value="Deconnexion">Deconnexion</button>
                                            </form>

                                          

                                        </div>
                                        </div>
                                               <?php

                                    }
                                      
                                    } 
                                    
                            
                 ?>

                 <?php
                                if(isset($_SESSION['login']) && isset($_SESSION['password'])){
                                  
                                        if ($_SESSION['login'] != $loginAdmin && $_SESSION['password'] !=$passwordAdmin){
                                                    if($_SESSION['login']=$access['login'] && $_SESSION['password']=$access['password']){
                                                                 echo "pantouro";
                                                    }
                                        }
                                }  
                                
                                

                                if(isset($_POST['deconne'])){
                                                unset($_SESSION['login']);
                                                unset($_SESSION['password']);

                                                header('Location:index.php');
                                }
                 ?>
                 
             
            </div>
         
        </div>
    </nav>
