<?php 
    session_start();
    $titre = "A propos";
    include 'header.inc.php';
    include 'menupage.php';
?>
<!doctype html>
    <html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titre;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="container">
<div class="row">
            <div class="col-md-4">
                <div class="team-member">
                    <img src="./img/membre1.jpg" alt="Membre 1">
                    <h4>Cerise FaFOUMI</h4>
                </div>
            </div>

            <div class="col-md-4">
                <div class="site-description">
                    <p>
                    Nous sommes deux étudiantes de l'ESIGELEC qui avons plongé dans une opportunité passionnante. Animées par notre amour des jeux de société ou de plateau, nous avons développé une plateforme permettant aux membres de choisir leurs jeux préférés et de planifier des rencontres.  WIZZWIN est une aventure créative a libéré notre esprit innovant, transformant une simple demande en une source d'inspiration pour la communauté. Aujourd'hui, notre site est le lieu vibrant où la passion se partage. Chaque ligne de code et chaque interaction portent l'empreinte de notre émotion, tout en nous offrant de nouveaux défis, compétences et une fierté immense dans l'accomplissement de notre projet.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="team-member">
                    <img src="./img/membres2.jpg" alt="Membre 2">
                    <h4>Larissa METEHOUE</h4>
                </div>
            </div>
    
    </div>
</div>
</body>
<?php
    include 'footer.inc.php';
?>
