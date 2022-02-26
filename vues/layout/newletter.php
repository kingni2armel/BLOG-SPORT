<link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/newsletter.css">
               
   <?php 
       
            // verification du formulaire de souscription au newslwetter
            $bdd=new PDO('mysql:host=localhost;dbname=sport','root','');
            $message_error='';
            //  declaration de la variable qui va contenir l'heure de l'envoie du newsletter
            $date =  date('Y-m-d h:i:s a',time());
            // $date_inscription =$_SESSION['date_inscription'];
            // $intervale= $date_inscription - $date;
            // if($intevale<30){
                        
            // } else if($intervale>=30){


            // }
            
            //condition de verification et d'envoie des donnees dans la bd
        if(isset($_POST['email']) && isset($_POST['message'])){
                $email_suscribe=trim($_POST['email']);
               $emailvalide=strlen($email_suscribe);
              $message_suscribe=trim($_POST['message']);
              $messagevalide = strlen($message_suscribe);
            if(!empty($_POST['email']) && !empty($_POST['message'])){
                if($emailvalide>4 && $messagevalide>4){
                    $req=$bdd->prepare('INSERT INTO newsletter (email,message,date) VALUES(:email,:message,:date)');
                    $req->bindValue(':email',$_POST['email']);
                    $req->bindValue(':message',$_POST['message']);
                    $req->bindValue(':date',$date);
                    $req->execute();
                } else{
                    $message_error="formulaire mal  remplit";
                }
            }
                       
        }  
?>
   <h2 style="margin-left:35px">Newsletter</h2>
                        <div class="form-element">
                                <form action="index.php" method='POST'>
                                    <p><?php echo $message_error; ?></p>
                                    <label for="" class="label-items">Email</label><br>
                                   <input type="text" class="input-element input-items"name="email">
                                   <label for="" class="label-items">Message</label><br>
                                    <textarea class="input-element input-items" name="message" style="margin-top:5px"></textarea>
                                    <button style="margin-left:5px"type="submit"class="btn form-btn input-items">Envoyer</button>
                                </form>
                        </div>