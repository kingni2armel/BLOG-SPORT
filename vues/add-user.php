<!-- chargement des fichiers css -->
<link rel="stylesheet" href="../css/all.css">
<!-- --------- Owl-Carousel ------------------->
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<!-- ------------ AOS Library ------------------------- -->
<link rel="stylesheet" href="../../css/aos.css">
<!-- Custom Style   -->
<link rel="stylesheet" href="../css/Style.css">
<link rel="stylesheet" href="../../styles/message.css">
<link rel="stylesheet" href="../styles/requette.css">
<link rel="stylesheet" href="../styles/traitement.css">



<?php  include('layout/headerAdmin.php');?>
                        <div class="conteiner">

                                                                
                        <div class="conteiner_items see">
                                        <img class="image" src="../images/laptop-3087585_1920.jpg" alt="">
                        </div>
                        <div class="conteiner_items">
                                    <div class="conteiner_input">
                                                    <div class="conteiner_title">
                                                                    <div class="conteiner_title_items" >
                                                                        <h1 class="title" >add user</h1>

                                                                    </div>
                                                                    
                                                    </div>

                                                <form action="" method="POST">
                                                        <input type="text" name="login" placeholder="Login" class="data-input"><br>
                                                            </textarea> <br>
                                        
                                                            <input type="password" name="password" placeholder="Passsword" class="data-input"><br>
                                                            <button type="submit" class="data-input items">Ajouter une prestataire</button>
                                                            <button type="reset" style="background-color:red" class="data-input">Annuler</button>

                                                    </form>
                                
                                    </div>
                        </div>
                        </div>  

<?php  include('../requette/Add-user.php');?>
<script src="../js/Jquery3.4.1.min.js"></script>

<script src="../js/owl.carousel.min.js"></script>

<!-- ------------ AOS js Library  ------------------------- -->
<script src="../js/aos.js"></script>

<!-- Custom Javascript file -->
<script src="../js/main.js"></script>