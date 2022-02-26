
<?php 
                              
                                $statut_creation="";
                                $error_nom="";
                                $error_commentaire="";
                                $date_error="";
                           if(isset($_POST['nom']) && isset($_POST['commentaires'])){

                            if(isset($_POST['nom']) && !empty($_POST['nom']) &&
                            isset($_POST['commentaires']) && !empty($_POST['commentaires']) 
                             && isset($_POST['datet']) && !empty($_POST['datet']))
                                 {
                                          
                       
                                             $bdd= new PDO('mysql:host=localhost;port=3306;dbname=sport;','root','');
                                             $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
                                             $creer=$bdd->prepare('INSERT INTO categories (nom_categorie,commentaire,dateCreation) VALUES(:nom_categorie,:commentaire,:dateCreation)');
                                             $creer->bindValue(':nom_categorie',$_POST['nom']);
                                             $creer->bindValue(':commentaire',$_POST['commentaires']);
                                             $creer->bindValue(':dateCreation',$_POST['datet']);
                                             $creer->execute();
                                             $statut_creation="categorie crée avec success";
                                             header('Location: ../vues/categorie.php');
                                 } else if (strlen(trim($_POST['nom']))){
                                                     $error_nom="champ categorie mal remplit";

                                 } else if (strlen(trim($_POST['commentaires']))){
                                         $error_commentaire="champ commentaire mal remplit";
                                      } else if (strlen(trim($_POST['nom']))<4 && strlen(trim($_POST['commentaires']))<4){
                                    $error_nom="champ nom mal remplit";
                                    $error_commentaire="champ commentaire mal remplit";
                                

     
                                 }
                           }
                                
                
                ?> 