<?php
session_start();

// Vérifier si la session est active
if (!isset($_SESSION['nomjoueur'])) {
    // Rediriger vers la page de connexion si la session n'est pas active
    header("Location: index.php");
    exit();
}
    $titre = "Membre";
    //$_SESSION['nomjoueur']=$nomjoueur;
    include 'header.inc.php';
    include 'menumembre.php';
?>
<div class="displayMembre">
<div class="container">
    <?php
        if(isset($_SESSION['message'])) {
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
            echo $_SESSION['message'];
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
            unset($_SESSION['message']);
        }

  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }
    ?>

    <div class="row">
        <header>
            <h1  class="white-text">Welcome to the WIZZWIN experience... <?php $nomjoueur ?></h1>
         <br>
        </header>

        <section class="jeux-section">
        <h2  class="white-text">Games you can play</h2>
        <br>
        <br>
        <br>
       </section>
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
              echo '<div class="col-md-8">'; // Première colonne pour les caractéristiques
              echo '<div class="game-info text-center">'; 
              echo 'ID: ' . $row['ID_JEUX'] . '<br>';
              echo 'Nom: ' . $row['NOM_JEUX'] . '<br>';
              echo 'Description: ' . $row['DESCRIPTION'] . '<br>';
              echo 'Règles: ' . $row['REGLE'] . '<br>';
              echo 'Catégorie: ' . $row['CATEGORIE'] . '<br>';
              echo '</div>';
              echo '</div>';
              echo '<div class="col-md-4">'; // Deuxième colonne pour la photo
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
    <br>
    <br>
    <br>
    <div class="row">
        <header>
            <h1  class="white-text">Next play Dates</h1>
        </header>

        <section class="jeux-section">
        <h2  class="white-text">Liste des crenaux</h2>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
       </section>
    </div>

 </div>
</div>

<?php
    include 'footer.inc.php';
?>
