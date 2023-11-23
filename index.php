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
                <img src="https://vulcan.dl.playstation.net/ap/rnd/202111/1601/Zgk7R0ZUTp64t9JqNQIEsLYC.png" alt="error in generating image" >
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
          <p> 
          "Notre vision chez [Nom de votre entreprise] transcende le simple concept de divertissement en ligne. Nous aspirons à créer un univers de jeu dynamique et captivant qui transcende les attentes traditionnelles. Chez [Nom de votre entreprise], nous sommes motivés par l'idée de repousser constamment les frontières de l'innovation, de fournir à nos joueurs une expérience exceptionnelle qui va au-delà de l'ordinaire. C'est dans cette quête continue que notre ambition prend forme, avec le développement imminent d'une application dédiée, conçue pour transformer la façon dont vous vivez le jeu en ligne.      
          L'objectif de notre application va bien au-delà d'être une simple extension de notre site web. Nous envisageons un compagnon virtuel qui vous accompagnera partout, apportant une accessibilité sans précédent, une jouabilité intuitive et des fonctionnalités exclusives à portée de main. Cette application incarnera notre engagement envers l'innovation,      
        </p>
          </div>
          <div class="col">
            <p>
            offrant une expérience de jeu immersive et personnalisée qui évolue avec les besoins de notre communauté passionnée. Notre équipe dévouée travaille sans relâche pour créer une application qui reflète non seulement notre amour pour les jeux de société, mais aussi notre engagement envers la satisfaction de nos utilisateurs. 
            <br>
            <br>
            Joignez-vous à nous dans cette aventure où l'innovation, la convivialité et le plaisir se conjuguent pour créer une nouvelle ère de divertissement ludique. Chez [Nom de votre entreprise], nous ne nous contentons pas de redéfinir les règles du jeu, nous créons un nouveau chapitre de l'histoire du divertissement en ligne, et nous sommes ravis de vous y inviter."
          </p>
          </div>
        </div>
      
     </div>
     </div>
</div>
<?php
    include 'footer.inc.php';
    
?>