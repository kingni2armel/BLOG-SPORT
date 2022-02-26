<!-- chargement des fichiers css -->
<link rel="stylesheet" href="../css/all.css">
<!-- --------- Owl-Carousel ------------------->
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<!-- ------------ AOS Library ------------------------- -->
<link rel="stylesheet" href="../css/aos.css">
<!-- Custom Style   -->
<link rel="stylesheet" href="../css/Style.css">
<link rel="stylesheet" href="../styles/message.css">
<?php  include('layout/headerAdmin.php');
    include('connect.php');
?>

  <?php

       
                
        $req=$bdd->query('SELECT email,message,date  FROM newsletter   ORDER BY id_news DESC ');
        
          // declaration de la variable qui prend en compte le nombre de message trouve
          $reponse=$req->rowCount();
          // condition pour verifier le nombre de message et afficher un contenue en fonction de la  reponse dela condition 
        if($reponse<=0){
            ?>
                      <h1 style="text-align:center;color:#104F55">Aucun message pour vous </h1>
            <?php
        } else{
              ?>
                        <div class=""style="margin-top:-15px">
                                  <table>
                                          <tr>
                                              <th>Email</th>
                                              <th>Message</th>
                                              <th>Date</th>
                                          </tr>
                                          
                                                <?php  while($reponse=$req->fetch()){
                                                  ?>
                                                  <tr>
                                                    <td><?= $reponse['email']; ?></td>
                                                    <td><?= $reponse['message']; ?></td>
                                                    <td><?= $reponse['date']; ?></td><br>

                                                  </tr>
                                                  

                                                  <?php
                                                } ?>
                                                
                                              
                                          
                                  </table>
                        </div>
              <?php 
        }
  ?>
<?php 
      include('layout/footerAdmin.php');
?>

<!-- chargement des  fichiers js -->

<script src="../js/Jquery3.4.1.min.js"></script>

<script src="../js/owl.carousel.min.js"></script>

<!-- ------------ AOS js Library  ------------------------- -->
<script src="../js/aos.js"></script>

<!-- Custom Javascript file -->
<script src="../js/main.js"></script>