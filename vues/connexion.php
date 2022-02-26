<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/requette.css">
    <title>Document</title>
</head>
<body>

<?php 
include('header.php');
// include('../requette/connexion-prestataire.php');
 include('../requette/connect-requette.php');

?>

                                            <div class="hh" style="height:50px"></div>
<div class="conteiner">

                                        
                    <div class="conteiner_items see">
                                    <img class="image" src="../images/bg.jpg" alt="">
                    </div>
                    <div class="conteiner_items">
                                <div class="conteiner_input">

                                <h1 class="title" style="text-align:center">Connexion</h1>
                                <form action="" method="POST">
                                          <input type="text" name="login" placeholder="Login" class="data-input"><br>
                                          <p class="p_items" style="margin-left:18px"><?php echo $error_login;?></p>

                                           <input type="password" placeholder="Mot de passe" name="password" class="data-input"><br>
                                           <p class="p_items" style="margin-left:18px"><?php echo $error_password;?></p>
                                            <button type="submit" class="data-input items">Se connecter</button>
                                            <button type="reset" style="background-color:red" class="data-input">Annuler</button>

                                     </form>
                               
                                </div>

                    </div>
</div>         
                   


</div>  

<style>
    .p_items{
        color:red;
        font-size:15px;

    }
</style>
</body>
</html>                                                                 