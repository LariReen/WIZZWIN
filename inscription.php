<?php
    session_start();
    $titre = "Inscription";
    include 'header.inc.php';
    include 'menu.inc.php';
    
?>

<div class="backgroundInscription">
<div class="container">

<br>

<form  method="POST" action="tt_inscription.php">
    <div class="container">
    <div class="row">
    <div class="row my-3">
             
      </div>
    <h3 class="white-text">Sign up</h3>
    <h4 class="white-text">Embark on a WIZZtastic journey where every click is a chance to win excitement</h4>
    <div class="row my-3">
             
             </div>
        <div class="col-md-6">
            <label for="nom" class="form-label">Surname</label>
            <input type="text" class="form-control " id="nom" name="nom" placeholder="Your surname..." required>
        </div>
        <div class="col-md-6">
            <label for="prenom" class="form-label">Name</label>
            <input type="text" class="form-control " id="prenom" name="prenom" placeholder="Your name..." required>
        </div>
        </div>
        <div class="row my-3">
             
             </div>
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
             <div class="row my-3">
             
             </div>
        <div class="row ">
        <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-light" type="submit">Submit</button></div>   
        </div>
        <div class="row">
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</form>
</div>
</div>
<?php
    include 'footer.inc.php';
?>