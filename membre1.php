<?php
    session_start();
    $titre = "Membre";
    $_SESSION['nomjoueur'] = $nomjoueur;
    $_SESSION['email'] = $email;
    include 'header.inc.php';
    include 'menumembre.php';
?>
<div class="container">
<?php
    if (!isset($_SESSION['nomjoueur'])) {
        // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
       header("Location: connexion.php");
        exit();
    }
    if(isset($_SESSION['message'])) {
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
        echo $_SESSION['message'];
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
        unset($_SESSION['message']);
    }


    ?>

    <header>
        <h1>Bienvenue <?php $nomjoueur ?>dans votre espace</h1>
        <!--<a href="deconnexion.php">Déconnexion</a>-->
    </header>

    <section class="jeux-section">
        <h2>Les tendances du moment</h2>
        <h2>Jeux recommendes</h2>
        <ul>
            <li><a href="jeu1.php">Jeu 1</a></li>
            <li><a href="jeu2.php">Jeu 2</a></li>
             Ajoutez d'autres jeux selon vos besoins 
        </ul>
    </section>
<!--
    <section class="profil-section">
        <h2>Mon Profil</h2>
        /*
            // Exemple de récupération d'informations du profil depuis une base de données (utilisation fictive)
            $nomUtilisateur = "JohnDoe";
            $avatarURL = "avatars/johndoe.jpg";
            $score = 500;

            // Affichage des informations du profil
            echo "<p>Nom d'utilisateur: $nomUtilisateur</p>";
            echo "<img src='$avatarURL' alt='Avatar de $nomUtilisateur'>";
            echo "<p>Score: $score</p>";
        */?>
    </section>

    <section class="amis-section">
        <h2>Mes Amis</h2>
        /*
            // Exemple de récupération de la liste d'amis depuis une base de données (utilisation fictive)
            $amis = ["Ami1", "Ami2", "Ami3"];

            // Affichage de la liste d'amis
            echo "<ul>";
            foreach ($amis as $ami) {
                echo "<li>$ami</li>";
            }
            echo "</ul>";
       */ ?>
    </section>
   -->     

</div>
