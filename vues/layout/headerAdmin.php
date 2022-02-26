<?php session_start();?>
<link rel="stylesheet" href="../css/all.css">


<!-- --------- Owl-Carousel ------------------->
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">

<!-- ------------ AOS Library ------------------------- -->
<link rel="stylesheet" href="../css/aos.css">

<!-- Custom Style   -->
<link rel="stylesheet" href="../css/style-second-nav.css">
<?php
        $message="message.php";
?>

<nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="../index.php" class="name-site">Sport News</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="<?= $message; ?>">Message</a>
                    </li>
                    <li class="nav-link">
                        <a href="add-user.php">Add user</a>
                    </li>
                    <li class="nav-link">
                        <a href="categorie.php">Categorie</a>
                    </li>
                    <li class="nav-link">
                        <a href="publication.php">publication</a>
                    </li>
                    <li class="nav-link">
                        <a href="pub-user.php">Pub-User</a>
                    </li>
                    <li class="nav-link">
                            <form action="" method="POST">
                                        <button  name ="deconnec" type="submit">Deconnexion</button>
                            </form>
                        
                    </li>
                    <li class="nav-link">
                        <a href="../index.php">Accueil</a> 
                    </li>
                    <li class="nav-link">
                        <a href="list-user.php">Liste User</a> 
                    </li>
                    <li class="nav-link">
                        <a href="liste-categorie.php">Liste categories</a> 
                    </li>
                </ul>
            </div>
            <!-- <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div> -->
        </div>
    </nav>


 <?php
 include('lien.html');
            if(isset($_POST['deconnec'])){
                    unset($_SESSION['login']);
                    unset($_SESSION['password']);
                    header('Location:../index.php');
            }
 
 ?>

 <style>
            @media all and (min-width:0px)  and (max-width:500px){
                    .name-site{
                        margin-right:10px;
                    }
            }

            @media all and (min-width:200px)  and (max-width:500px){
                    
            }
 </style>