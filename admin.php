<?php
    session_start();
    $titre = "Administrateur";
    include 'header.inc.php';
    include 'menu.inc.php';
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
<?php
    if(isset($_SESSION['message'])) {
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
        echo $_SESSION['message'];
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
        unset($_SESSION['message']);
    }
?>
<video autoplay muted loop id="video-background">
        <source src="./img/backvideo.mp4" type="video/mp4">
    </video>
         <h2 class="text-center">Administrator</h2>
         <div class="container">
         <div class="row my-3">
             
             </div>
    <div class="row my-3 text-center">
        <div class="row">
            <div class="row my-3"> 
             </div>
             <div class="row my-3"> 
             </div>

            <div class="col-md-6">
            <button type="button" class="btn btn-outline-light"><a href="Ajoutjeux.php">Ajouter un jeu</a></button>
            </div>
            
             <div class="col-md-6">
             <button type="button" class="btn btn-outline-light"><a href="Modifjeux.php">Modifier un jeu</a></button>  
             </div>
    

        </div>
             <div class="row my-3"> 
             </div>
             <div class="row my-3"> 
             </div>

        <div class="row">

            <div class="col-md-6">
             <button type="button" class="btn btn-outline-light"><a href="Ajoutjeux.php">Supprimer un jeu</a></button>  
            </div>

            <div class="col-md-6">
            <button type="button" class="btn btn-outline-light"><a href="listjeux.php">Liste des jeux</a></button>
            </div>
    
        </div>

             <div class="row my-3">
             </div>
             <div class="row my-3"> 
             </div>

        <div class="row">

            <div class="col-md-6">
            <button type="button" class="btn btn-outline-light"><a href="Ajoutjeux.php">Créer un créneau</a></button> 
            </div>  
           
            <div class="col-md-6">
            <button type="button" class="btn btn-outline-light"><a href="creeradmin.php">Créer adminstrateur</a></button>  
            </div>

        </div>

        </div>
</div>
</body>
<?php
    include 'footer.inc.php';
?>

