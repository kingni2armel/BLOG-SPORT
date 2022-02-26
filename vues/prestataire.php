
<?php
        //  session_start();
        include('layout/header-prestataire.php');
        include('../prestataire-requette.php');
       

?>
<link rel="stylesheet" href="../styles/publication.css">

<div class="conteiner" style="margin-top: 30px;">    
                           
                        <div class="conteiner_items see">
                                        <img class="image" src="../images/woman-6396875_1920.jpg" alt="">
                        </div>
                        <div class="conteiner_items" style="margin-top:45px">
                                <div class="conteiner_input" >
                                                       <div class="conteiner_title">   

                                                                <div class="conteiner_title_items">
                                                                        <h1 class="title">publication</h1>

                                                                </div>
                                                                
                                                        </div>
                                                
                                                        <p><?=  $message_alert;?></p>
                                                        <form action="prestataire.php" method="POST" enctype="multipart/form-data">
                                                        <select class="data-input" name="selectCategorie" id="">              
                                                       
                                                                        <?php 
                                                                                        // ici je charge dans le select toute les categories disponibles dans la base de domnne
                                                                                        while($categorie = $req->fetch()){
                                                                                                ?>
                                                                                <!--option value="<?= $categorie['nom_categorie']; ?>"><?= $categorie ['nom_categorie']; ?></option-->
                                                                                <option value="<?= $categorie['id_categorie']?>"><?= $categorie['nom_categorie']; ?></option>
                                                                        <?php

                                                                                        }
                                                                        ?> 
                                                        </select>
                                                                <textarea name="description" class="data-input">

                                                                </textarea> <br>       
                                                                <input type="file" name="fichier" class="data-input">
                                                                                
                                                                <input type="date" name="dates" class="data-input"><br>
                                                                <button type="submit" class="data-input items">Publier</button>
                                                                <button type="reset" style="background-color:red" class="data-input">Annuler</button>

                                                        </form>
                                
                                </div>
                        </div>
</div>
<div class=""></div>
<style>
.conteiner_input{
margin-top:15px;
}
.title{
font-size:20px !important;
margin-left:20px !important
}
a{
text-decoration:none;
margin-left:20px !important

}

@media all and (min-width:0px) and (max-width:800px){
.see{
display: none;
}
.data-input{
width: ;
}
.conteiner{

}
}
@media all and (min-width:801px) and (max-width:150000px){
.conteiner_input{
margin-top: -25px;
}
.conteiner{
margin-left:55px;
}
}

@media all and (min-width:0px) and (max-width:800px){
.title{
margin-left:55px !important;
}
a{
margin-left:55px !important;
}
}
</style>

<!-- <?php 
                  echo $_SESSION['login'];
                  echo $_SESSION['password'];
                  echo  $_SESSION['id_prestaire'];
?> -->