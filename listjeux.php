<?php 

    $titre = "Liste des jeux";
    include 'header.inc.php';
    include 'menufoncadmin.php';

?>

    <div class="displayAdmin">
    <div class="row">    
        </div>
  
    <h2>List of gaming</h2>
    <div class="row">    
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
              echo '<img src="img/' . $row['FILE'] . '" width="150px" height="150px">';
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
