<link rel="stylesheet" href="../styles/message.css">
<?php 
           include('layout/header-prestataire.php');
           include('../requette/liste-publication.php');

?>

<div class="">
                    <?php
                                if($nombre>=1){
                                        ?>
                                                <table style="margin-top:50px">
                                                                <tr>
                                                                        <th>Description</th>
                                                                        <th>Image</th>
                                                                        <th>Date</th>
                                                                </tr>
                                                                    
                                                            <?php 
                                                                    while($publication=$reponse_data->fetch()){
                                                                        ?>
                                                                                    <tr>
                                                                                            <td><?php  echo $publication['description']; ?></td>
                                                                                            <td><img style="height:80px;width:150px" src="<?php echo $publication['file_url'];?>" alt=""></td> 
                                                                                            <td><?php  echo $publication['datePublication'];?></td>                       
                                                                                    </tr>
                                                                        <?php
                                                        }    
                                                            ?>
                                                    </table>
                                        <?php 
                                } else {
                                        ?>
                                            <h1 class="statut">vous n'avez effectué aucune publication</h1>
                                        <?php
                                }
                    ?>
</div>


<style>
        .statut{
            text-align:center;
            margin-top:50px 
        }
</style>