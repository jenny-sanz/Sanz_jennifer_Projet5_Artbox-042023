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

  <!-- recuperer mes parametres pour afficher le details de chaque oeuvre , Si le paramètre "oeuvre" est présent, alors la variable $idoeuvre est initialisée avec sa valeur:
         - $_GET est la variable superglobale utilisée pour récupérer l'info de mon identifiant dans mon lien envoyant vers cette page
         - le mot clé isset =  vérifie si l'identifiant de l'œuvre est présent dans l'URL;
         - int (converti la valeur de l'ID (oeuvre)en chiffre entier pour securiser); 
          -->
    <?php 
        if (isset($_GET['oeuvre'])) { 
            $idoeuvre = (int)$_GET['oeuvre'];
            if (array_key_exists($idoeuvre, $oeuvres)) {
    ?>
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
<?php 
        } else {
            echo "ID d'oeuvre invalide.";
        }
    }
?>
</main>

  <!-- j'inclu mon footer avec ma fonction "include" en php -->
  <?php include_once('footer.php'); ?>

</body>
</html>