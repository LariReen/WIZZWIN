<?php
    session_start();
    // Vérifier si la session est active
if (!isset($_SESSION['nomjoueur'])) {
    // Rediriger vers la page de connexion si la session n'est pas active
    header("Location: index.php");
    exit();
}
    $titre = "Administrateur";
    include 'header.inc.php';
    include 'menuadmin.php';
?>



<?php
    if(isset($_SESSION['message'])) {
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
        echo $_SESSION['message'];
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
        unset($_SESSION['message']);
    }
?>
<div class="displayAdmin">

         <h3 class="text-center white-text">Administrator</h3>
         <div class="container">
        
    <div class="row my-3 text-center">
        <div class="row">
        
             <div class="row my-3"> 
             </div>

            <div class="col-md-6">
            <button type="button" class="btn btn-outline-light"><a href="Ajoutjeux.php" class="link-pink">Add a game</a></button>
            </div>
            
             <div class="col-md-6">
             <button type="button" class="btn btn-outline-light"><a href="Modifjeux.php" class="link-pink">Modify a game</a></button>  
             </div>
    

        </div>
             <div class="row my-3"> 
             </div>
             <div class="row my-3"> 
             </div>

        <div class="row">

            <div class="col-md-6">
             <button type="button" class="btn btn-outline-light"><a href="Supprimejeux.php" class="link-pink">Delete a game</a></button>  
            </div>

            <div class="col-md-6">
            <button type="button" class="btn btn-outline-light"><a href="listjeux.php" class="link-pink">List of games</a></button>
            </div>
    
        </div>

             <div class="row my-3">
             </div>
             <div class="row my-3"> 
             </div>

        <div class="row">

            <div class="col-md-6">
            <button type="button" class="btn btn-outline-light"><a href="Ajoutjeux.php" class="link-pink">Create a play</a></button> 
            </div>  
           
            <div class="col-md-6">
            <button type="button" class="btn btn-outline-light"><a href="creeradmin.php" class="link-pink">Create an admin</a></button>  
            </div>

        </div>
        <div class="row my-3"> 
             </div>
        <div class="row my-3"> 
        </div>

        </div>
</div>
</body>
<?php
    include 'footer.inc.php';
?>

