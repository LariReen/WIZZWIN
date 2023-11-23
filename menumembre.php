<nav class="navbar navbar-expand-md navbar-dark bg-rose">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="membre2.php">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                 <li class="nav-item">
                    <a  class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                      My profil
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php">About us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


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

