<link rel="stylesheet" href="../styles/headerAdmin.css">
<link rel="stylesheet" href="../styles/message.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<?php 
         include('layout/headerAdmin.php');
         include('../requette/PubUser.php');

?>
<?php
if($datas<=0){
            ?>
                      <h1 style="text-align:center;color:#104F55">Aucun message pour vous </h1>
            <?php
        } else{
        
              ?>
                        <div class="conteiner_liste_message" style="margin-top:15px;">
                              <div class="conteinrg" style="display:flex;justify-content:center;">
                                  <div class="sc" style="border:1px solid black;height:300px;overflow:scroll;">
                                                  <table>
                                                          <tr>
                                                              <th>Nom du Prestataire</th>
                                                              <th>Description</th>
                                                              <th>Date De Publication</th>
                                                              <th>Image</th>
                                                              <th>Operation</th>
                                                          </tr>
                                                          
                                                                <?php  while($requette=$data->fetch()){
                                                                  ?>
                                                                  <tr>
                                                                      <td><?= $requette['nom_prestataire']; ?></td>
                                                                      <td><?= $requette['description']; ?></td>
                                                                      <td><?= $requette['datePublication']; ?></td>
                                                                      <td><img style="height:80px;width:150px"src="<?php echo $requette['file_url']; ?>" alt=""></td>
                                                                      <form action="pub-user.php" method ="POST">
                                                                          <td><button value= "<?php echo $requette['id_publication_prestataire']; ?>">Publier</button>
                                                                                <p><?php echo $requette['id_publication_prestataire'];?></p>
                                                                              <button style="margin-top:5px">Annuler</button>
                                                                        </td>
                                                                      </form>

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
              <?php $statement =$bdd->prepare('DELETE publication_prestataire  WHERE id_publication_prestataire=:id_publication_prestataire');
                      $statement->execute(
                              [
                                  "id_publication_prestataire" =>$requette['id_publication_prestation']
                              ]
                              );
                              echo "suppression reussit";
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