<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'connexion_BDD.php';?>
    <?php include 'connexion.php';?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beer and Beer</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="./css/admin.css">

</head>

<body>

    <!--------  Navigation ---------------------->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="Index.php">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="article.php">Articles</a>
                    </li>
                    <li class="nav-link">
                        <a href="administrateur.php">Administrateur</a>
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

    <!-- ------------x- Navigation -x------------------- -->

<?php 

      
?>


  <form method="post">
    <div class="container">
      <img src="http://previews.123rf.com/images/stodolskaya/stodolskaya1511/stodolskaya151100027/49219342-Connexion-de-l-utilisateur-ou-l-acc-s-authentification-ic-ne-Banque-d'images.jpg" alt="image" />
    <div class="form-input"><i class="fa fa-user fa-2x" aria-hidden="true"></i>
     <input  type="text" name="login" placeholder="Login" /></div>
    <div class="form-input"><i class="fa fa-lock fa-2x" aria-hidden="true"></i>
      <input type="password" name="password" placeholder="Password" /></div>
        <a href="formulaire.php"></a><input type="submit" id="submit" value="Valider"/>
        
        <br>
  </div></form>
    

    
   
    <!---------------x------------- Main Site Section ---------------x-------------->

</body>

</html>