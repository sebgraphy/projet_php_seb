<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'connexion_BDD.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beer and Beer</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/article1.css">

</head>

<body>

    <!--------  Navigation ---------------------->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <img src="assets/logo_transparent_fond.png" alt="logo">
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

    <!-------- Main Site Section ---------------------->

    <main>
        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/pub.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14, 2019</span>
                                <span>2 Comments</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Quel est le point commun entre Ayrton Senna et Claude François ?</a>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
illum similique veniam tempore unde?
</p>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
illum similique veniam tempore unde.<br>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
illum similique veniam tempore unde? Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
illum similique veniam tempore unde.</p>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
        illum similique veniam tempore unde.</p>
</div></div></div>
                   
<aside class="sidebar">
    <div class="category">
        <h2>Commentaires</h2>
            <ul class="category-list">
                <li class="list-items" data-aos="fade-left" data-aos-delay="100">
<p size="+2"><strong>Francine, Paris</strong><br><br>
Etant alcoolique depuis un bon nombres d'années, cet article à su m'aider pour consommée deux fois plus d'alcool. Merci à vous !</p>
                  
    </li>
        <li class="list-items" data-aos="fade-left" data-aos-delay="200">
            <p size="+2"><strong>Bernard, Bruxelles</strong><br><br>
Consommateur régulier de bonnes binouses, votre article est l'un des seuls qui me donne envis de boire encore plus. J'espère être un futur alcoolique. Merci !</p>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
    </section><br /><br />
                    
    </main>
                    
                   
                   <!-- --------------------------- Footer ---------------------------------------- -->

    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p id="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi officiis
                    iure, autem nulla tenetur repellendus.</p>
            </div>

        
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2020 All rights reserved | made by
                <a href="https://www.youtube.com/user/gouvernementFR" target="_black">Coronavirus <i class="fab fa-youtube"></i>
                    Channel</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
    
    </body>
</html>
    