<?php
    session_start();
    $titre = "Membre";
    include 'header.inc.php';
    include 'menumembre.php';
?>
<div class="container">
<?php
    if(isset($_SESSION['message'])) {
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
        echo $_SESSION['message'];
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
        unset($_SESSION['message']);
    }
    ?>
<div class="row">
<div class="col-9"> 
<h1 class=text-center>Tendances du moment</h1>
<br>
<br>
<br>
<br>
    <div class="row text-center">

        <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="row">
                <div class="col-md-4">
                <img src="https://th.bing.com/th/id/OIP.dsj-FNB-NKJuDiZtWaWBGgHaHa?pid=ImgDet&rs=1" class="d-block w-100" alt="Image 1" >
                </div>
                <div class="col-md-4">
                <img src="https://vulcan.dl.playstation.net/ap/rnd/202111/1601/Zgk7R0ZUTp64t9JqNQIEsLYC.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="col-md-4">
                <img src="https://play-lh.googleusercontent.com/L5enj5wCS61BpIMkEs_kkPanEFOJ1vP7rQkmSJXBo35w8wbajwd8TJeUzjt6NeErKw" class="d-block w-100" alt="Image 3">
                </div>
            </div>
            </div>
            <div class="carousel-item active">
            <div class="row">
                <div class="col-md-4">
                <img src="https://store-images.s-microsoft.com/image/apps.4715.13510798887568201.c59f62d9-189b-478e-9f29-04eb87ce8282.74692947-82ee-4894-9941-d77cf72fe9aa" class="d-block w-100" alt="Image 1">
                </div>
                <div class="col-md-4">
                <img src="https://i.pinimg.com/736x/a5/d8/47/a5d84702342bfa8d1e2aa71927204197.jpg" class="d-block w-100" alt="Image 2">
                </div>
                <div class="col-md-4">
                <img src="https://th.bing.com/th/id/OIP.dsj-FNB-NKJuDiZtWaWBGgHaHa?pid=ImgDet&rs=1" class="d-block w-100" alt="Image 3">
                </div>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"  data-bs-theme="dark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-theme="dark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
</div>
</div>
<div class="col-3">

    <div>


    </div>
















<!--
   <div class="row text-center">
           <div class="col">
            <img src="https://th.bing.com/th/id/OIP.dsj-FNB-NKJuDiZtWaWBGgHaHa?pid=ImgDet&rs=1" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Solitaire</p>
           </div>
           <div class="col">
            <img src="https://vulcan.dl.playstation.net/ap/rnd/202111/1601/Zgk7R0ZUTp64t9JqNQIEsLYC.png" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Monopoly</p>
           </div>
           <div class="col">
            <img src="https://i.pinimg.com/736x/a5/d8/47/a5d84702342bfa8d1e2aa71927204197.jpg" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Uno</p>
           </div>
           <div class="col">
            <img src="https://play-lh.googleusercontent.com/L5enj5wCS61BpIMkEs_kkPanEFOJ1vP7rQkmSJXBo35w8wbajwd8TJeUzjt6NeErKw" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Mancala</p>
           </div>
     </div>

     <div class="row text-center">
           <div class="col">
            <img src="https://vulcan.dl.playstation.net/ap/rnd/202111/1601/Zgk7R0ZUTp64t9JqNQIEsLYC.png" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Monopoly</p>
           </div>
           <div class="col">
            <img src="https://i.pinimg.com/736x/a5/d8/47/a5d84702342bfa8d1e2aa71927204197.jpg" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Uno</p>
           </div>
           <div class="col">
            <img src="https://store-images.s-microsoft.com/image/apps.4715.13510798887568201.c59f62d9-189b-478e-9f29-04eb87ce8282.74692947-82ee-4894-9941-d77cf72fe9aa" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Ludo</p>
           </div>
           <div class="col">
            <img src="https://play-lh.googleusercontent.com/L5enj5wCS61BpIMkEs_kkPanEFOJ1vP7rQkmSJXBo35w8wbajwd8TJeUzjt6NeErKw" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Mancala</p>
           </div>
     </div>

     <div class="row text-center">
           <div class="col">
           <img src="https://th.bing.com/th/id/OIP.dsj-FNB-NKJuDiZtWaWBGgHaHa?pid=ImgDet&rs=1" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Solitaire</p>
           </div>
           <div class="col">
            <img src="https://vulcan.dl.playstation.net/ap/rnd/202111/1601/Zgk7R0ZUTp64t9JqNQIEsLYC.png" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Monopoly</p>
           </div>
           <div class="col">
            <img src="https://i.pinimg.com/736x/a5/d8/47/a5d84702342bfa8d1e2aa71927204197.jpg" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Uno</p>
           </div>
           <div class="col">
            <img src="https://store-images.s-microsoft.com/image/apps.4715.13510798887568201.c59f62d9-189b-478e-9f29-04eb87ce8282.74692947-82ee-4894-9941-d77cf72fe9aa" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p>Ludo</p>
           </div>
     </div>

</div>
-->
<?php
    include 'footer.inc.php';
?>
