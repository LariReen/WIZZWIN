<?php
    session_start();
    $titre = "Accueil";
    include 'header.inc.php';
    include 'menu.inc.php';
 ?>

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
        <div class="row" >
           <div class="WelcomeMessage">
           <h2 class="text-center"> ~~~WIZZWIN~~~</h2>
           <h3 class="text-center">Everything for win! </h3>
          </div>
        </div>
        <div class="gameDisplay">
        <div class="row"> 
           <div class="col-3">
              <div class="row">
                  <img src="https://i.pinimg.com/736x/a5/d8/47/a5d84702342bfa8d1e2aa71927204197.jpg"  alt="error in generating image" >
               </div>
              <div class="row"> 
                <br>
                <br>
                 <p class="text-center">Uno</p>
               </div>
           </div>
           <div class="col-3">
             <div class="row">
                <img src="https://www.maxiapple.com/wp-content/uploads/2023/04/monopoly-go-jeu-mobile-ios-android-iphone-ipad-gratuit-01.jpg" alt="error in generating image" >
              </div>
              <div class="row">
                <br>
                <br>
                 <p class="text-center">Monopoly</p>
              </div>
           </div>
           <div class="col-3">
             <div class="row"> 
                <img src="https://th.bing.com/th/id/OIP.dsj-FNB-NKJuDiZtWaWBGgHaHa?pid=ImgDet&rs=1"  alt="error in generating image" >
              </div>
              <div class="row">  
                <br>
                <br>
                <p class="text-center">Solitaire</p>
              </div>   
           </div>     
           <div class="col-3">
             <div class="row"> 
                <img src="https://store-images.s-microsoft.com/image/apps.4715.13510798887568201.c59f62d9-189b-478e-9f29-04eb87ce8282.74692947-82ee-4894-9941-d77cf72fe9aa" alt="error in generating image">
              </div>
              <div class="row">
                <br>
                <br>
                <p class="text-center">Ludo</p>
              </div>   
           </div>    
       </div> 
     </div> 
     <div class="displayVision">
     <div class="row">
      <h2 class="text-center">~~VISION ET AMBITIONS~~</h2>
      <br>
      <br>
      <br>
        <div class="row">
          <div class="col">
          <p class="justify-text"> 
          "Chez WIZZWIN, notre vision va au-delà de simplement créer une plateforme de jeu en ligne. En tant qu'étudiantes passionnées, nous aspirons à bâtir un univers de jeu dynamique et engageant qui va bien au-delà des attentes habituelles. Notre motivation découle de l'idée constante de repousser les limites de l'innovation, offrant à nos membres une expérience exceptionnelle qui transcende l'ordinaire. Nous sommes sur le point de développer une application dédiée, conçue pour révolutionner la façon dont vous vivez le jeu en ligne. Cette application n'est pas simplement une extension de notre site web, mais plutôt un compagnon virtuel qui vous suivra partout, offrant une accessibilité sans précédent, une jouabilité intuitive et des fonctionnalités exclusives à portée de main. Elle incarnera notre engagement envers l'innovation, offrant une
          </p>
        </div>
          <div class="col">
            <p class="justify-text">
            expérience de jeu immersive et personnalisée qui évolue avec les besoins de notre communauté étudiante passionnée. offrant une expérience de jeu immersive et personnalisée qui évolue avec les besoins de notre communauté étudiante passionnée. Notre équipe dévouée travaille sans relâche pour créer une application qui reflète non seulement notre amour pour les jeux, mais aussi notre engagement envers la satisfaction de nos utilisateurs.
            <br>
            <br>
            Joignez-vous à nous dans cette aventure où l'innovation, la convivialité et le plaisir se conjuguent pour créer une nouvelle ère de divertissement ludique. Chez WIZZWIN, nous ne nous contentons pas de redéfinir les règles du jeu, nous créons un nouveau chapitre de l'histoire du divertissement en ligne, et nous sommes ravis de vous y inviter."
            </p>
          </div>
        </div>
      
     </div>
     </div>
</div>
<?php
    include 'footer.inc.php';
    
?>