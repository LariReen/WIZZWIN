<?php 

    $titre = "Liste des jeux";
    include 'header.inc.php';
    include 'menufoncadmin.php';

    if(isset($_SESSION['message'])) {
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
        echo $_SESSION['message'];
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
        unset($_SESSION['message']);
    }

?>

<div class="displayAdmin">
    <div class="container">
    <h3 class="white-text">List of Games</h3>
    <br>
    <br>
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
                echo '<div class="row">';
                echo '<div class="col-md-6">';
                echo '<div class="game-info text-center">';
                echo 'ID: ' . $row['ID_JEUX'] . '<br>';
                echo 'Nom: ' . $row['NOM_JEUX'] . '<br>';
                echo 'Description: ' . $row['DESCRIPTION'] . '<br>';
                echo 'Règles: ' . $row['REGLE'] . '<br>';
                echo 'Catégorie: ' . $row['CATEGORIE'] . '<br>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-6">';
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
    <br>
    <br>
    <br>
    <br>
</div>

    </div>

</div>

</body>
<?php
    include 'footer.inc.php';
?>
