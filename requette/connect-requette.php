<?php
                $error_login="";
                $error_password="";

              
             function getUser($login,$password){
                include('../vues/connect.php');
                $req = 'SELECT login,password FROM prestataire WHERE login="'.$login.'" and password ="'.$password.'"';
                $reponse=$bdd->query($req);
                return $reponse->rowCount();
            }
            
            function InsertUser($firstname,$lastname, $telephone,$localisation,$password,$password_confirm){

                            $insert=$bdd->prepare('INSERT INTO utilisateur (firstname,lastname,telephone,localisation,password,password_confirm) values (:firstname,:lastname,:telephone,:localisation,:password,:password_confirm)');
                            $insert->bindValue('firstname',$firstname);
                            $insert->bindValue('lastname',$lastname);
                            $insert->bindValue('telephone',$telephone);
                            $insert->bindValue('localisation',$localisation);
                            $insert->bindValue('password',$password);
                            $insert->bindValue('password_confirm',$password_confirm);
                            // $insert->execute();


            }

            function updateUser($newfirstname,$newlastname,$newtelephone,$newlocalistaion,$newpassword,$newpassword_confirm){
                        $req= 'UPDATE utilisateur SET name= "'.$newfirstname.'" , lastname = " '. $newlastname.' ", telephone = "'.$newtelephone.'", localisation= "'.$newlocalistaion.'" , password = "'.$newpassword.'", password_confirm="'.$newpassword_confirm.'" WHERE  login = "'.$login.'';
                        $dataUpdate= $bdd->prepare($req);
                        $dataUpdate->execute();
            }

                    $loginadmin="admin";
                    $password_admin="1234";
            if(isset($_POST['login']) && isset($_POST['password'])){
                    if($_POST['login']==$loginadmin && $_POST['password']==$password_admin){
                            session_start();
                            $_SESSION['login']= $_POST['login'];
                            $_SESSION['password']=$_POST['password'];
                            header('Location:../index.php');
                    }   else{
                               
                        $error_login="login introuvable";
                        $error_password="password introublable";
                    }
                        
            }  
            if(isset($_POST['login']) && isset($_POST['password'])){
                include('../vues/connect.php');
                if(getUser($_POST['login'],$_POST['password'])==1){
                        session_start();
                        $_SESSION['login']= $_POST['login'];
                        $_SESSION['password']=$_POST['password'];
                        header('Location:prestataire.php');
                        // session_destroy();
        } else {
                        $error_login="login introuvable";
                        $error_password="password introublable";
        }
            } 
    
            if(isset($_POST['login']) && isset($_POST['password'])){
                        if(strlen($_POST['login'])<=4){
                                    $error_login=" le login doit etre superieur a 4 caracteres ";
                        }
            }


                if(isset($_POST['login']) && isset($_POST['password'])){

                    $login_valid = trim($_POST['login']);
                  $password_valid=trim($_POST['password']);
                    if(strlen($login_valid)<=4 && strlen($password_valid)<=4){
                        $error_login="le login ne doit pas contenir les espaces";
                        $error_password="le password ne doit pas contenir les espaces";
                    }

             }
?>