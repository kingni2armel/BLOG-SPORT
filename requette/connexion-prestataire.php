<?php 
                include('../connect.php');  
                $bdd= new PDO('mysql:host=localhost;dbname=sport;','root','');           
                $error_connection="";
                $error_password="";
                $error_login="";
                function getUser($login,$password){
                     $req = 'SELECT * FROM prestataire WHERE login="'.$login.'" and password ="'.$password.'"';
                    $reponse=$bdd->query($req);
                    return $reponse->rowCount();
                }
                if(isset($_POST['login']) && isset($_POST['password'])){
                    if(getUser($_POST['login'],$_POST['password'])==1){
                            session_start();
                            $_SESSION['login']= $_POST['login'];
                            $_SESSION['password']=$_POST['password'];
                            header('Location:prestataire.php');
                            // session_destroy();
            } else {
                    echo "vous n'etes pas un utilisateur";
            }
                }   

?>