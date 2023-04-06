<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
  
    <!-- j'inclu mon header avec ma fonction "include" en php -->
    <?php include_once('header.php'); ?>
    
<main>
    <?php include_once('oeuvres.php')?>

    <!-- recuperer mes parametres pour afficher le details de chaque oeuvre : 
         - int (definit que ma variable id oeuvre est un chiffre entier); 
         - $_GET est la variable utilisé pour récupérer l'info de mon identifiant dans mon lien envoyant vers cette page-->
    <?php (int)$idoeuvre = $_GET['oeuvre']?>  

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvres[$idoeuvre]['image'];?>" alt="<?php echo $oeuvres[$idoeuvre]['title'];?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvres[$idoeuvre]['title'];?></h1>
            <p class="description"><?php echo $oeuvres[$idoeuvre]['author'];?></p>
            <p class="description-complete">
            <?php echo $oeuvres[$idoeuvre]['description'];?>
            </p>
        </div>
    </article>
</main>

  <!-- j'inclu mon footer avec ma fonction "include" en php -->
  <?php include_once('footer.php'); ?>

</body>
</html>