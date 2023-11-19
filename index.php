<?php
    session_start();
    $titre = "Accueil";
    include 'header.inc.php';
    include 'menu.inc.php';
   

?>
</div>
 
     <?php
    if(isset($_SESSION['message'])) {
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
        echo $_SESSION['message'];
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
        unset($_SESSION['message']);
    }
    ?>

        <!--<div class="space">-->
         <h2 class="text-center"> ~~~Welcome to WIZZWIN~~~</h2>
         <h3 class="text-center">
            EVERYTHING FOR WIN
        </h3>
        <!--</div>-->
    <div class="row text-center">
           <div class="col">
            <img src="https://th.bing.com/th/id/OIP.dsj-FNB-NKJuDiZtWaWBGgHaHa?pid=ImgDet&rs=1" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p class="text-center">Solitaire</p>
           </div>
           <div class="col">
            <img src="https://vulcan.dl.playstation.net/ap/rnd/202111/1601/Zgk7R0ZUTp64t9JqNQIEsLYC.png" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p class="text-center">Monopoly</p>
           </div>
           <div class="col">
            <img src="https://i.pinimg.com/736x/a5/d8/47/a5d84702342bfa8d1e2aa71927204197.jpg" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p class="text-center">Uno</p>
           </div>
           <div class="col">
            <img src="https://store-images.s-microsoft.com/image/apps.4715.13510798887568201.c59f62d9-189b-478e-9f29-04eb87ce8282.74692947-82ee-4894-9941-d77cf72fe9aa" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p class="text-center">Ludo</p>
           </div>
           <div class="col">
            <img src="https://play-lh.googleusercontent.com/L5enj5wCS61BpIMkEs_kkPanEFOJ1vP7rQkmSJXBo35w8wbajwd8TJeUzjt6NeErKw" class="rounded img-thumbnail" alt="error in generating image" width="200" height="200">
            <p class="text-center">Mancala</p>
           </div>
     </div>
   
        <!--<p>Lorem isum dolor, sit amet consectetur adipisicing elit. Iusto magni eius, accusamus nesciunt illum voluptas ut doloremque hic at excepturi tempore harum commodi incidunt? Doloremque alias, dicta ex voluptas nemo quas exercitationem eum illum minus rem! Ut repudiandae illum, deserunt cupiditate dignissimos quod quae modi mollitia, ipsa eligendi placeat iure, optio enim accusamus voluptate. Facere eaque error numquam illum unde?</p>-->


<?php
    include 'footer.inc.php';
?>