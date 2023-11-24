<?php
session_start();
    $titre = "Connexion";
    include 'header.inc.php';
    include 'menu.inc.php';
?>

<div class="displayConnexion">
 <div class="container">

<h1>Log in</h1>
<br>
<h4>Embark on a WIZZtastic journey where every click is a chance to win excitement</h4>
<br><br>
<?php
    if(isset($_SESSION['message'])) {
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
        echo $_SESSION['message'];
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
        unset($_SESSION['message']);
    }
    ?>
    
<form  method="POST" action="tt_connexion.php">
    <div class="container">
    <h3 class="white-text">Connexion</h3>
    <div class="row my-3">
  
        <div class="row">
        <div class="row my-3">
             
             </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control " id="email" name="email" placeholder="Votre email..." required>
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control " id="password" name="password" placeholder="Votre mot de passe..." required>
        </div>
        </div>
        <br>
        <div class="row my-3">
             
             </div>
        <div class="row my-3">
        <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-light" type="submit">Connexion</button></div>   
        </div>
    </div>
</form>
</div>
</div>

<?php
    include 'footer.inc.php';
?>