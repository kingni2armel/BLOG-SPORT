<?php
                            
                            $bdd= new PDO('mysql:host=localhost;port=3306;dbname=sport;','root','');
                            //requette qui permet de selectionner toute les categories de la base de donnee //
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
                                        $file_dest= "../files/".$file_name;
                                        $extension_autorise = array('.png','.PNG','.jpeg','.JPEG','.jpg','.JPG');
                                        if(in_array($file_extension,$extension_autorise)) 
                                        {
                                                if(move_uploaded_file($file_tmp_name,$file_dest)){
                                                    $reqs=$bdd->prepare('INSERT INTO image(name,file_url) values (?,?)');
                                                    $description = $_POST['description'];
                                                    $id_categorie = $_POST['selectCategorie'];
                                                    $date = $_POST['dates']; 
                                                    $req=$bdd->prepare('INSERT INTO publication(id_categorie,description,datePublication,name,file_url) values (?,?,?,?,?)');
                                                    $req->execute(array($id_categorie,$description,$date,$file_name,$file_dest));
                                                    $reqs->execute(array($file_name,$file_dest));
                                                    echo  'fichier envoye avec succes';
                                                }  else{
                                                    echo 'une erreur est arrive lors de lenvoie du fichier';
                                                }
        
                                        } else{
                                                echo "l'extension n'est pas permis"; 
                                        }
        
        
        
                                    }
                                   

                                }
                                //___Si les champs sont remplie...On procede a l'enregistrement dans la base de donnees
                            }
                      
            ?>                
