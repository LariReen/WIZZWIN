<?php
    session_start();
    $titre = "Membre";

    include 'header.inc.php';
    include 'menumembre.php';
?>
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
            <h1>Bienvenue dans votre espace <?php $nomjoueur ?></h1>
        </header>

        <section class="jeux-section">
        <h2>Liste des jeux</h2>
        <br>
        <div class="jeu">
            <a href="listjeux.php" class="btn-jouer">Jouer</a>
        </div>
       </section>
    </div>
    <div class="row">
        <header>
            <h1>Les parties de jeux a venir</h1>
        </header>

        <section class="jeux-section">
        <h2>Liste des crenaux</h2>
        <br>
        <div class="jeu">
            <a href="listjeux.php" class="btn-jouer">Jouer</a>
        </div>
       </section>
    </div>

 </div>

<?php
    include 'footer.inc.php';
?>



    
<!--
    <section class="jeux-section">
        <h2>Mes Jeux</h2>
         Liste des jeux auxquels le membre peut jouer 
        <ul>
            <li><a href="jeu1.php">Jeu 1</a></li>
            <li><a href="jeu2.php">Jeu 2</a></li>
             Ajoutez d'autres jeux selon vos besoins 
        </ul>
    </section>

    <section class="profil-section">
        <h2>Mon Profil</h2>
         Affichez les informations du profil du membre 
        <?php
            // Placez ici votre logique PHP pour récupérer et afficher les informations du profil du membre
            // Exemple : Nom, Avatar, Score, etc.
        ?>
    </section>

    -->

