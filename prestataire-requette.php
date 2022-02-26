<?php

            
            include('vues/connect.php');

                            
                            //requette qui permet de selectionner toute les categories de la base de donnee //
                            $message_alert="";
             
                            $req=$bdd->query('SELECT * FROM categories');
                            $bdd= new PDO('mysql:host=localhost;port=3306;dbname=sport;','root','');
                           //requette qui permet de selectionner toute les categories de la base de donnee //
                            $req=$bdd->query('SELECT * FROM categories ORDER BY id_categorie DESC');

                            // requette qui verifie l'image et l'envoie dans la base de donnee`
                         
                            if (isset($_POST['description']) && isset($_POST['selectCategorie']) && isset($_POST['dates'])) {
                                //___On verifie si le champs sont vide
                                if (!empty($_POST['description']) && !empty($_POST['selectCategorie']) && !empty($_POST['dates'])) {
                                        // verification du fichier
                                    if(!empty($_FILES)){
                                        $file_name= $_FILES['fichier']['name'];
                                        $file_extension= strrchr($file_name,".");
                                        $file_tmp_name= $_FILES['fichier']['tmp_name'];
                                        $file_dest= "../image_prestataire/".$file_name;
                                        $extension_autorise = array('.png','.PNG','.jpeg','.JPEG','.jpg','.JPG');
                                        if(in_array($file_extension,$extension_autorise)) 
                                        {
                                                if(move_uploaded_file($file_tmp_name,$file_dest)){
                                                    $select='SELECT id_prestaire FROM prestataire WHERE login="'.$_SESSION['login'].' " and password ="'.$_SESSION['password'].'"';
                                                        $reponse=$bdd->query($select);
                                                        $requette= $reponse->fetch();
                                                    $id_prestaire = $requette['id_prestaire'];    
                                                    $description = $_POST['description'];
                                                    $id_categorie = $_POST['selectCategorie'];
                                                    $date = $_POST['dates']; 
                                                    $login=$_SESSION['login'];
                                                    $req=$bdd->prepare('INSERT INTO publication_prestataire(id_categorie,id_prestaire,nom_prestataire,description,datePublication,name,file_url) values (?,?,?,?,?,?,?)');
                                                    $req->execute(array($id_categorie,$id_prestaire,$login,$description,$date,$file_name,$file_dest));
                                                    $message_alert= " votre publication a  reussit.......";

                                                }  else{
                                                    echo 'une erreur est arrive lors de lenvoie du fichier';
                                                    $message_alert = "votre publication n'a pas été effectué";
                                                }
        
                                        } else{
                                                echo "l'extension n'est pas permis"; 
                                        }
        
        
        
                                    }
                                   

                                }
                                //___Si les champs sont remplie...On procede a l'enregistrement dans la base de donnees
                            }
                      
            ?>                

                      
