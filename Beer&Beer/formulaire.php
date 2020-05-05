<?php include 'connexion_BDD.php';?>
<?php include 'admin2.php';?>
<?php
   //Recupération des articles pour les delete
   
   
   $result = $pdo->query("SELECT * FROM blog"); 
          
    if(isset($_GET['delete'], $_GET['id'])) {
        if(!empty($_GET['id'])) {
			$showdeleteInfo = true;
            $id = $_GET['id'];
            $result = $pdo->prepare("DELETE FROM blog WHERE id = ?");

            $result->bindValue(1, $id);
            $result->execute();
            header('Location:formulaire.php');
        }
        
    }
    
    $error = false ;
    if(isset($_POST['titre'], $_POST['auteur'], $_POST['date'], $_POST['contenu'], $_POST['image'])) {
    	if(empty($_POST['titre']) || empty($_POST['auteur']) || empty($_POST['date']) || empty($_POST['contenu']) || empty($_POST['image'])) {
      		$error = "Veullez remplir tous les champs";
        } else {
        	$result = $pdo->prepare("INSERT INTO blog (titre, auteur, date, contenu, image) VALUES (:titre, :auteur, :date, :contenu, :image)");
            $result->execute(array(
            'titre' => $_POST['titre'],
            'auteur' => $_POST['auteur'],
            'date' => $_POST['date'],
            'contenu' => $_POST['contenu'],
            'image' => $_POST['image'],  
            ));
            header('location: formulaire.php');
        }
    
	}
?>
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
      <link rel="stylesheet" href="./css/owl.theme.default.min.css">
      <!-- Custom Style   -->
      <link rel="stylesheet" href="./css/Style.css">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="./css/all.css">
      <title>Formulaire</title>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-md-6 formulaire">
               <h1>Formulaire Article</h1>
               <br />
               <form method="POST">
               		<?php if($error) { ?>
                    	<p> <?= $error ?> </p>
                    <?php } ?>
                  <label for="fname">Titre</label>
                  <input type="text" id="titre" name="titre" placeholder="Votre titre"><br /><br />
                  <label for="sujet">Auteur</label>
                  <input type="text" id="auteur" name="auteur" placeholder="Auteur"><br /><br />
                  <label for="sujet">Date</label>
                  <input type="date" id="date" name="date" placeholder="Date"><br /><br />
                  <label for="subject">Contenu</label>
                  <textarea id="contenu" name="contenu" placeholder="Votre message"></textarea>
                  <br />
                  <label for="sujet">Image URL</label>
                  <input type="text" id="image" name="image" placeholder="URL"><br /><br />
                  <br />
                  <input type="submit" value="Envoyer" id="target">
                  <center><button><a href="article.php" >Retour à la page articles</a></button></center>
               </form>
            </div>
            <!-- Affiche des articles -->
            <?php
               $result = $pdo->query("SELECT * FROM blog");
               while($listeBlogs = $result->fetch(PDO::FETCH_ASSOC)) {?>
            <div class="col-md-6">
               <div class="container">
                  <div class="card" style="width:400px">
                     <h2><?php echo $listeBlogs["titre"]; ?></h2>
                     <h3><?php echo $listeBlogs["auteur"]; ?></h3>
                     <p><?php echo $listeBlogs["date"]; ?></p>
                  </div>
                  <!-- Poubelle -->
                  <a href="formulaire.php?delete=true&id=<?php echo $listeBlogs['id'] ?>">
                      <input type="image" src="assets/trash.png" width="30px" class="trash">
                      <input type="hidden" name="delete" value="<?php echo $listeBlogs['id'] ?>">
                  </a>
               </div>
            </div>
         </div>
      </div>
      <?php
         }
         ?>
      <style>
         body{
         padding: 0px;
         }
         input[type=text], textarea, input[type=email] {
         width: 500px;
         padding: 12px;
         border: 1px solid #ccc;
         border-radius: 5px;
         box-sizing: border-box;
         margin-right: 0px;
         margin-left: 0px;
         resize: vertical;
         }
         input[type=date] {
         width: 500px;
         border: 1px solid #ccc;
         border-radius: 5px;
         box-sizing: border-box;
         margin-right: 0px;
         margin-left: 0px;
         }
         input[type=submit] {
         background-color: #F49600;
         color: white;
         padding: 12px 20px;
         border: none;
         border-radius: 5px;
         cursor: grabbing;
         font-weight: 600;
         }
         input[type=submit]:hover {
         background: #67ee38;
         }
         #contener img {  
         max-width: 250px;
         max-height: 150px;
         }
         .container {
         padding:20px;
         }
         .formulaire{
         background: #f2f2f2;
         padding: 20px;
         width: 550px;
         }
         h1  {
         color: #000;
         width: 100%;
         text-align: center;
         }
         a{
         text-decoration: none;
         }
         /****POPUP****/   
         /* Popup container */
         .popup {
         position: relative;
         display: inline-block;
         cursor: pointer;
         }
         /* The actual popup (appears on top) */
         .popup .popuptext {
         visibility: hidden;
         width: 160px;
         background-color: #555;
         color: #fff;
         text-align: center;
         border-radius: 6px;
         padding: 8px 0;
         position: absolute;
         z-index: 1;
         bottom: 125%;
         left: 50%;
         margin-left: -80px;
         }
         /* Popup arrow */
         .popup .popuptext::after {
         content: "";
         position: absolute;
         top: 100%;
         left: 50%;
         margin-left: -5px;
         border-width: 5px;
         border-style: solid;
         border-color: #555 transparent transparent transparent;
         }
         /* Toggle this class when clicking on the popup container (hide and show the popup) */
         .popup .show {
         visibility: visible;
         -webkit-animation: fadeIn 1s;
         animation: fadeIn 1s
         }
         /* Add animation (fade in the popup) */
         @-webkit-keyframes fadeIn {
         from {opacity: 0;}
         to {opacity: 1;}
         }
         @keyframes fadeIn {
         from {opacity: 0;}
         to {opacity:1 ;}
         }
         /**** END POPUP****/     
      </style>
      <!-- formulaire -->
      <?php 
         while($listeArticle = $query->fetch(PDO::FETCH_ASSOC)){ ?>
      <article>
         <div class="movie-card">
            <div class="container">
               <img src="<?php echo $listeArticle["image"]; ?>" alt="cover" class="cover" width="230px"/>
               <div class="hero">
                  <div class="details">
                     <div class="title1" style="line-height: 40px;"><?php echo $listeArticle["titre"]; ?></div>
                  </div>
                  <!-- end details -->
               </div>
               <!-- end hero -->
               <div class="description">
                  <div class="column1">
                     <span class="tag"><?php echo $listeArticle["auteur"]; ?></span>
                  </div>
                  <!-- end column1 -->
                  <div class="column2">
                     <p><?php echo $listeArticle["contenu"]; ?></p>
                  </div>
                  <!-- end column2 -->
                  <div class="column2">
                     <p><?php echo $listeArticle["date"]; ?></p>
                  </div>
               </div>
               <!-- end description -->
               <a href="article.php">Retour</a>
            </div>
         </div>
      </article>
      <?php
         }
             
         ?>
   </body>
</html>