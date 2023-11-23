<?php 

    $titre = "Liste des jeux";
    include 'header.inc.php';
    include 'menufoncadmin.php';

?>
<!doctype html>
    <html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titre;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <video autoplay muted loop id="video-background">
        <source src="./img/backvideo.mp4" type="video/mp4">
    </video>
    <div class="container">
    <div class="row my-3">    
        </div>
  
    <h2>List of gaming</h2>
    <div class="row my-3">    
        </div>
     

    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <?php
            require_once("connpdo.php");
            $req = "SELECT * FROM jeux";
            $ps = $pdo->prepare($req);
            $ps->execute();

            $firstItem = true;

            while ($row = $ps->fetch()) {
              echo '<div class="carousel-item' . ($firstItem ? ' active' : '') . '">';
              echo '<div class="mx-auto">';
              echo '<div class="row">'; // Nouvelle ligne
              echo '<div class="col-md-6">'; // Première colonne pour les caractéristiques
              echo '<div class="game-info">'; 
              echo 'ID: ' . $row['ID_JEUX'] . '<br>';
              echo 'Nom: ' . $row['NOM_JEUX'] . '<br>';
              echo 'Description: ' . $row['DESCRIPTION'] . '<br>';
              echo 'Règles: ' . $row['REGLE'] . '<br>';
              echo 'Catégorie: ' . $row['CATEGORIE'] . '<br>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-6">'; // Deuxième colonne pour la photo
              echo '<div class="game-photo">';
              echo '<img src="./img/' . $row['FILE'] . '" width="150px" height="150px">';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';

                $firstItem = false;
            }
            ?>

        </div>

        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

</body>
<?php
    include 'footer.inc.php';
?>
