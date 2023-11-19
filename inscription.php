<?php
    session_start();
    $titre = "Inscription";
    include 'header.inc.php';
    include 'menu.inc.php';
?>
<video autoplay muted loop id="video-background">
        <source src="./img/backvideo.mp4" type="video/mp4">
    </video>
<div class="container">
<h1>Sign up</h1>
<form  method="POST" action="tt_inscription.php">
    <div class="container">
    <div class="row my-3">
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
        <div class="row my-3">
        <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">Submit</button></div>   
        </div>
    </div>
</form>
</div>
<?php
    include 'footer.inc.php';
?>