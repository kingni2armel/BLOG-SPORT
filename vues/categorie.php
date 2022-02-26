<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/requette.css">
    <link rel="stylesheet" href="../styles/headerAdmin.css">
    <link rel="stylesheet" href="../styles/footerAdmin.css">
    <link rel="stylesheet" href="../styles/traitement.css">


    <title>Document</title>
</head>
<body>


            <?php
           
            include('../requette/categorie-requette.php');?>
              <?php include('layout/headerAdmin.php');
             
            ?>

<div class="conteiner">
                                        
                    <div class="conteiner_items see">
                                    <img class="image" src="../images/laptop-3087585_1920.jpg" alt="">
                    </div>
                    <div class="conteiner_items">
                                <div class="conteiner_input">
                                                <div class="conteiner_title">
                                                                <div class="conteiner_title_items" >
                                                                     <h1 class="title" >add categorie</h1>
                                                                     <p style="color:red;">
                                                                     <?=$statut_creation;?>
                                                                    </p>
                                                                </div>
                                                                
                                                </div>

                                               <form action="categorie.php" method="POST">
                                                
                                                      <input type="text" name="nom" placeholder="Nom categorie" class="data-input"><br>
                                                      <p style="color:red;"><?php  echo $error_nom; ?></p>
                                                        <textarea name="commentaires" class="data-input">
                            
                                                        </textarea> <br>
                                                        <p style="color:red"><?php echo $error_commentaire ?></p>
                                    
                                                        <input type="date" name="datet" class="data-input"><br>
                                                        <button type="submit" class="data-input items">Creer</button>
                                                        <button type="reset" style="background-color:red" class="data-input">Annuler</button>

                                                </form>
                               
                                </div>
                    </div>
</div>  
 
                   
 <?php 
                include('layout/footerAdmin.php');
 ?>

  
</body>
</html>                                                                 