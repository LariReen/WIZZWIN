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
           <h1 class="text-center"> ~~~WIZZWIN~~~</H1>
           <h3 class="text-center">Unlock the Fun, Win the WIZZ!</h3>
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
      <h2 class="text-center">~~VISION AND AMBITIONS~~</h2>
      <br>
      <br>
      <br>
        <div class="row">
          <div class="col">
          <p> 
          "At WIZZWIN.Inc, our vision goes beyond the mere concept of online entertainment. We aspire to create a dynamic and engaging gaming universe that transcends traditional expectations. Driven by the idea of constantly pushing the boundaries of innovation, we aim to provide our players with an extraordinary experience that goes beyond the ordinary. It is in this ongoing quest that our ambition takes shape, with the imminent development of a dedicated application designed to transform how you experience online gaming. The goal of our application extends far beyond being a mere extension of our website. We envision a virtual companion that accompanies you everywhere, bringing unprecedented accessibility, intuitive gameplay, and exclusive features at your fingertips.         
          </p>
        </div>
          <div class="col">
            <p>
            This application will embody our commitment to innovation, offering an immersive and personalized gaming experience that evolves with the needs of our passionate community. Our dedicated team works tirelessly to create an application that reflects not only our love for board games but also our commitment to user satisfaction.            
            <br>
            <br>
            Join us on this adventure where innovation, friendliness, and fun come together to create a new era of playful entertainment. At WIZZWIN.Inc, we don't just redefine the rules of the game; we're creating a new chapter in the history of online entertainment, and we're excited to invite you to be a part of it."          </p>
          </div>
        </div>
      
     </div>
     </div>
</div>
<?php
    include 'footer.inc.php';
    
?>