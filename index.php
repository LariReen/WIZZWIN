<?php
    session_start();
    $titre = "Accueil";
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
    <link rel="stylesheet" href="stylea.css">
  </head>
  <body>
 
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
    <div class="colonne-gauche">
        <div class="space">
         <h2 class="text-center"> ~~~WIZZWIN~~~</h2>
         <h3 class="text-center">Everything for win! </h3>
        </div>
    </div>
    <div class="colonne-droite">
     <div class="col-8">
            <div class="sidebar">
                    <div class="row"> 
                      <div class="row">  
                        <div class="col-3">
                            <img src="https://i.pinimg.com/736x/a5/d8/47/a5d84702342bfa8d1e2aa71927204197.jpg" class="rounded img-thumbnail" alt="error in generating image" width="200px" height="200px">
                        </div>
                        <div class="col-3 text">
                            <p>Uno</p>
                        </div>
                      </div>  
                    </div>
                    <div class="row">  
                      <div class="row">  
                       <div class="col-3">
                           <img src="https://vulcan.dl.playstation.net/ap/rnd/202111/1601/Zgk7R0ZUTp64t9JqNQIEsLYC.png" class="rounded img-thumbnail" alt="error in generating image" width="200px" height="200px">
                        </div>
                        <div class="col-3 text">
                            <p>Monopoly</p>
                        </div>
                       </div>
                    </div>
                    <div class="row"> 
                      <div class="row">   
                       <div class="col-3">
                           <img src="https://th.bing.com/th/id/OIP.dsj-FNB-NKJuDiZtWaWBGgHaHa?pid=ImgDet&rs=1" class="rounded img-thumbnail" alt="error in generating image" width="200px" height="200px">
                        </div>
                        <div class="col-3 text">
                            <p>Solitaire</p>
                        </div>
                      </div>
                    </div>
                    <div class="row"> 
                      <div class="row">   
                       <div class="col-3">
                           <img src="https://play-lh.googleusercontent.com/L5enj5wCS61BpIMkEs_kkPanEFOJ1vP7rQkmSJXBo35w8wbajwd8TJeUzjt6NeErKw" class="rounded img-thumbnail" alt="error in generating image" width="200px" height="200px">
                        </div>
                        <div class="col-3 text">
                            <p>Mancala</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="row">    
                       <div class="col-3">
                           <img src="https://store-images.s-microsoft.com/image/apps.4715.13510798887568201.c59f62d9-189b-478e-9f29-04eb87ce8282.74692947-82ee-4894-9941-d77cf72fe9aa" class="rounded img-thumbnail" alt="error in generating image" width="200px" height="200px">
                        </div>
                        <div class="col-3 text">
                            <p>Ludo</p>
                        </div>
                      </div>
                    </div>
            </div>
   </div>
     </div>
</body>
<?php
    include 'footer.inc.php';
?>