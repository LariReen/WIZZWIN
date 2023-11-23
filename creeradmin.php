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
    <h2>Creation of administrator</h2>
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
        <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control " id="email" name="email" placeholder="Your email..." required>
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control " id="password" name="password" placeholder="Your password..." required>
        </div>
        </div>
        <div class="row ">
             </div>
        <div class="row ">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-outline-primary" type="submit" name="submit">Submit</button>
        </div>   
        </div>
    </div>
</form>
</div>
</body>
<?php
    include 'footer.inc.php';
?>
