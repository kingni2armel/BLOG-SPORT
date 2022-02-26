<?php
 session_start();
 include('css.html');
      
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
                        <a href="liste_publication.php">Liste publication</a>
                    </li>
                    <li class="nav-link">
                        <a href="prestataire.php">publication</a>
                    </li>
                    <li class="nav-link">
                        
                    </li>
                    <li class="nav-link">
                            <form action="" method="POST">
                           <button name="pres-deconnec"type="submit">Deconnexion</button>

                            </form>
                        
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>

 <?php include('lien.html');
 
            if(isset($_POST['pres-deconnec'])){
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
             
 </style>

