<!DOCTYPE html>
<html lang="fr">
<head>
    <title>admin_articles</title>
    <link rel="stylesheet" href="article.css">
    <?php include 'connexion_BDD.php';?>
</head>
<body>

     <!-- RECUPERER 1 ARTICLE--> 
   <?php 
 
$result = $pdo->query("SELECT * FROM blog");
$listeArticle = $result->fetch(PDO::FETCH_ASSOC);

    $query =  $pdo->prepare('SELECT * FROM blog WHERE id = :id');
    $query->execute(array(
 'id' => $_GET['id']
 ));
    
    
    while($listeArticle = $query->fetch(PDO::FETCH_ASSOC)){ ?>
<article>
  <div class="movie-card">
  <div class="container">
   <img src="<?php echo $listeArticle["image"]; ?>" alt="cover" class="cover" width="230px"/>
    <div class="hero">   
      <div class="details">
        <div class="title1" style="line-height: 40px;"><?php echo $listeArticle["titre"]; ?></div>
      </div> <!-- end details -->
    </div> <!-- end hero -->
    <div class="description">
      <div class="column1">
        <span class="tag"><?php echo $listeArticle["auteur"]; ?></span>
      </div> <!-- end column1 -->
      <div class="column2">
        <p><?php echo $listeArticle["contenu"]; ?></p>        
      </div> <!-- end column2 -->
      <div class="column2">
        <p><?php echo $listeArticle["date"]; ?></p>        
      </div>
    </div> <!-- end description -->
    
    <a href="article.php">Retour</a>
   
  </div> <!-- end container -->
</div> <!-- end movie-card -->

</article>
<?php } ?>
   
   
  
   
    
</body>
</html>