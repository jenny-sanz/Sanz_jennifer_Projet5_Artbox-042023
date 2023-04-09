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

    <!-- j'inclu mon fichier header avec ma fonction "include"  -->
    <?php include_once('header.php'); ?>
    
    <main>
        <div id="liste-oeuvres">

            <!-- j'inclu mon tableau de toutes les oeuvres -->
            <?php include_once('oeuvres.php');?>   

            <!-- j'insère ma boucle qui me permet de lire mon tableau de toutes les oeuvres
                - $oeuvres = le nom de mon tableau ;
                - $key = c'est le numéro de mes oeuvres 
                - $value: les differentes valeurs attribuées a chaque oeuvre    -->
            <?php
                 foreach ($oeuvres as $key => $value)
             {
                      echo '<article class="oeuvre">';
                          echo '<a href="oeuvre_details.php?oeuvre='.$key.'">'; 
                                /* - le ? sépare le nom de la page des paramètres; 
                                    - oeuvre = nom de la variable utilisée pour stocker l'identifiant de l'oeuvre
                                    - .$key est la valeur de l'identifiant
                                */
                              echo '<img src="'.$value['image'].'" alt="'.$value['title'].'">';
                              echo '<h2>'.$value['title'].'</h2>';
                              echo '<p class="description">'.$value['author'].'</p>';
                          echo '</a>';
                      echo '</article>';
                
                 } 
            ?>
            
        </div>
    </main>
  <!-- j'inclu mon fichier footer avec ma fonction "include"  -->
    <?php include_once('footer.php'); ?>
</body>
</html>