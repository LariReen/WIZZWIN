<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>wizzwin website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-fluid">
<div class="row">
<nav class="col-lg-1 navbar navbar-expand-md bg-dark border-right border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Log out</a>
        </li>
        <li class="nav-item">
        <a  class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
           My profil
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page.php">About us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
</div>


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">My profil</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
    <ul class="info">
        <li><a  href="#">Nom</a></li>
        <li><a class="dropdown-item" href="#">prenom</a></li>
        <li><a class="dropdown-item" href="#">historique</a></li>
        <li><a class="dropdown-item" href="#">favoris</a></li>
      </ul>
    </div>
   
  </div>
</div>