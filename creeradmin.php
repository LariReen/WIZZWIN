<?php
    session_start();
    // Vérifier si la session est active
if (!isset($_SESSION['nomjoueur'])) {
    // Rediriger vers la page de connexion si la session n'est pas active
    header("Location: index.php");
    exit();
}
    $titre = "Inscription Administrateur";
    include 'header.inc.php';
    include 'menufoncadmin.php';
?>


<form  method="POST" action="tt_inscription_admin.php">
    <div class="displayAdmin">
    <div class="container">
    <h3 class="white-text">Creation of administrator</h3>
    <br>
    <div class="row ">
        <div class="col-md-6">
            <label for="nom" class="form-label">Surname</label>
            <input type="text" class="form-control " id="nom" name="nom" placeholder="Your surname..." required>
        </div>
        <div class="col-md-6">
            <label for="prenom" class="form-label">Name</label>
            <input type="text" class="form-control " id="prenom" name="prenom" placeholder="Your name..." required>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control " id="email" name="email" placeholder="Your email..." required>
            <p>Your email must be in the following format: xxxx@nomdedomaine.com</p>
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control " id="password" name="password" placeholder="Your password..." required>
            <p>The password must be at least 8 characters long.. <br>It must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.
            </p>
        </div>
        </div>
        <br>
        <div class="row ">
             </div>
             <br>
        <div class="row ">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-outline-light" type="submit" name="submit">Submit</button>
        </div> 
      
        </div>
        <br>
    </div>
    </div>
</form>
</div>
</body>
<?php
    include 'footer.inc.php';
?>
