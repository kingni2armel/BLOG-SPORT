<?php 
             
            // verification du formulaire de souscription au newslwetter
            $message_error='';
            include('connect.php');
            //  declaration de la variable qui va contenir l'heure de l'envoie du newsletter
            $date =  date('Y-m-d h:i:s a',time()); 
            
            //condition de verification et d'envoie des donnees dans la bd
        if(isset($_POST['login']) && isset($_POST['password'])){
                $login_suscribe=trim($_POST['login']);
               $login_valide=strlen($login_suscribe);
              $password_suscribe=trim($_POST['password']);
              $password_valide = strlen($password_suscribe);
            if(!empty($_POST['login']) && !empty($_POST['password'])){
                if($login_valide>4 && $password_valide>4){
                    $req=$bdd->prepare('INSERT INTO prestataire (login,password,date_creation) VALUES (:login,:password,:date_creation)');
                    $req->bindValue('login',$_POST['login']);
                    $req->bindValue('password',$_POST['password']);
                    $req->bindValue('date_creation',$date);
                    $req->execute();
                        
                } else{
                    $message_error="formulaire mal  remplit";
                }
            }
                       
        }  
?>
