<link rel="stylesheet" href="../styles/headerAdmin.css">
<link rel="stylesheet" href="../styles/message.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<?php 
         
         include('../requette/Liste-User.php');
         include('layout/headerAdmin.php');
?>
<?php
if($nombre<=0){
            ?>
                      <h1 style="text-align:center;color:#104F55">Aucun utilisateur crée par vous </h1>
            <?php
        } else{
        
              ?>
                           <div class="conteiner_liste_message" style="margin-top:15px;">
                              <div class="conteinrg" style="display:flex;justify-content:center;">
                                  <div class="sc" style="border:1px solid black;height:300px;overflow:scroll;">
                                                  <table>
                                                          <tr>
                                                              <th>Nom Utilisateur</th>
                                                              <th>Date De Creation</th>
                                                              <th>Mot de Passe</th>
                                                              <th>Operation</th>
                                                          </tr>
                                                          
                                                                <?php  while($requette=$reponse->fetch()){
                                                                  ?>
                                                                  <tr>
                                                                      <td><?= $requette['login']; ?></td>
                                                                      <td><?= $requette['date_creation']; ?></td>
                                                                      <td><?= $requette['password']; ?></td>
                                                                      <td>

                                                                            <form  action="" method="POST">
                                                                                <?php
                                                                                    $var = $requette['id_prestaire']; 
                                                                                
                                                                                ?>
                                                                                    <button name="delete" value ="<?php echo $var;?>"type="submit">Supprimer</button>
                                                                            </form>
                                                                      </td>

                                                                     
                                                                  </tr>
                                                                  

                                                                  <?php
                                                                } ?>
                                                                
                                                              
                                                          
                                                    </table>
                                                              </div>
                                                              </div>
                        </div>
              <?php 
        }
    
  ?>

  <?php 
        if(isset($_POST['delete'])){
                $req='DELETE FROM prestataire WHERE id_prestaire = "'. $var.'"';
                echo $var;
                $req_data=$bdd->prepare($req);
                $req_data->execute();

                echo "yo";
        }
                // if(isset($_POST['delete'])){
                //             $req=$bdd->prepare('DELETE FROM prestataire WHERE login = "'. $var.'"');
                //             $req->execute();
                //             echo " to";
                // } else {
                //         echo "echoue";
                // }
  ?>

<style>
    table{
      width:50%;
    }
    @media all and (min-width:0px)  and (max-width:400px){
      .sc{
        width:300px !important;
      }
      .conteinrg{
        justify-content:flex-start !important;
        margin-left:10vw;
      }
}
@media all and (min-width:401px)  and (max-width:600px){
      .sc{
        width:300px !important;
      }
      .conteinrg{
        justify-content:flex-start !important;
        margin-left:20vw;
      }
}
@media all and (min-width:700px)  and (max-width:50000000px){
        .sc{
          width:70vw!important;
          height:400px !important;
        }
        table{
           
            width: 70vw !important

        }
}
</style>