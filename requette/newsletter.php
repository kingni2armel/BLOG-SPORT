<?php 
            // verification du formulaire de souscription au newslwetter
            $bdd=new PDO('mysql:host=localhost;dbname=sport','root','');
            $message_error='';
            
            $emailvalide=strlen(trim($_POST['email']));
            $messagevalide = strlen(trim($_POST['message']));
        if(isset($_POST['email']) && isset($_POST['message'])){
                if($messagevalide>4 && $emailvalide>4){
                        $req=$bdd->prepare('INSERT INTO newsletter (email,message) VALUES(:email,:message)');
                        $req->bindValue('email',$_POST['email']);
                        $req->bindValue('message',$_POST['message']);
                        $req->execute();
                }
        }



?>