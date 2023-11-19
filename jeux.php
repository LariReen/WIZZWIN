<?php
    session_start();
    $titre = "Jeu";
   // $nom= htmlentities($_POST['nomjeux']);
    $nom= "Uno";
    $description;
    $regle;
    $categorie;
  
  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }
  //if ($stmt = $mysqli->prepare("SELECT DESCRIPTION, CATEGORIE, REGLE FROM jeux WHERE NOM_JEUX=? limit 1")) 
if ($stmt = $mysqli->prepare("SELECT * FROM jeux WHERE NOM_JEUX=? limit 1")) 
{
    $stmt->bind_param("s", $nom);
    $stmt->execute();
    $result = $stmt->get_result();   

    if($result->num_rows > 0) 
    { 
        $row = $result->fetch_assoc(); 
        $description = $row['DESCRIPTION'];
       // echo "La description du jeu est : $description";
        $regle = $row['REGLE'];
       // echo "La regle du jeu est : $regle";
        $categorie = $row['CATEGORIE'];
       // echo "La categorie du jeu est : $categorie";      
    
    }else{
    echo "Aucun résultat trouvé pour $nom";
    }
}             
include 'header.inc.php';
include 'menumembre.php';
?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $nom; ?></h1>
            <h3>CATEGORIE: <?php echo $categorie ?></h3>
            <h3>DESCRIPTION DU JEU</h3>
            <p>
               <?php echo $description; ?>
            </p>
        </div>

        <div class="col">
            <p>IMAGE DU JEU!!!</p>
        </div>

    </div>
    <div class="row">
    <h3>DESCRIPTION DU JEU</h3>
    <p>
        METTRE LE PDF DU JEU!
    </p>
    </div>
    
 <?php
    include 'footer.inc.php';
?>


