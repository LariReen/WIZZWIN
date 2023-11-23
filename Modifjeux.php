<?php 
session_start();
// Vérifier si la session est active
if (!isset($_SESSION['nomjoueur'])) {
    // Rediriger vers la page de connexion si la session n'est pas active
    header("Location: index.php");
    exit();
}
    $titre = "Modification Jeux";
    include 'header.inc.php';
    include 'menufoncadmin.php';
?>
<div class="displayAdmin">
<h2>Modifying a game </h2>

<form  method="POST" action="tt_jeux.php" enctype="multipart/form-data">
    <div class="container">
    <div class="row my-3">
        <div class="row">

            <div class="col-md-6">
                <label for="nomjeux" class="form-label">Nom de jeux</label>
                <input type="text" class="form-control " id="nomjeux" name="nomjeux" placeholder="Nom du jeux..." required>
            </div>

             <div class="col-md-6">

                <label for="categoriejeux" class="form-label">Categorie du jeux</label>
                <input type="text" class="form-control " id="categoriejeux" name="categoriejeux" placeholder="Categorie du jeux..." required>
            </div>

        </div>
        <div class="row my-3">    
        </div>

        <div class="row">

            <div class="col-md-6">
                <label for="descriptionjeux" class="form-label">Description du jeux</label>
                <input type="text" class="form-control " id="descriptionjeux" name="descriptionjeux" placeholder="description du jeux..." required>
            </div>

            <div class="col-md-6">
                 <label for="reglejeux" class="form-label">Regles du jeux</label>
                 <input type="file" name="userfileregle" class="form-control" />
                
            </div>
        </div>
        <div class="row my-3">    
        </div>

        <div class="row">

            <div class="col-md-6">
                <label  class="form-label">Ajout d'une photo </label>
                <input type="file" name="userfilephoto" class="form-control" />
            </div>  
            
        </div>
             <div class="row my-3"> 
             </div>

        <div class="row my-3">
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-outline-primary" type="submit">Ajouter</button>
            </div>  
        </div>

    </div>
</form>
</div>
<?php
    include 'footer.inc.php';
?>

