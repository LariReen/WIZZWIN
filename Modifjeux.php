<?php 
session_start();
// Vérifier si la session est active
if (!isset($_SESSION['nomjoueur'])) {
    // Rediriger vers la page de connexion si la session n'est pas active
    header("Location: index.php");
    exit();
}
    $titre = "Modification Jeux";
    include 'header.inc.php';
    include 'menufoncadmin.php';
?>
<div class="displayAdmin">
<form  method="POST" action="tt_modifjeux.php" enctype="multipart/form-data">
    <div class="container">
    <h3 class="white-text">Modifying a game </h3>
    <div class="row my-3">   
        <div class="row">
            <div class="col-md-6">
                <label for="nomjeux" class="form-label">Nom de jeux</label>
                <input type="text" class="form-control " id="nomjeux" name="nomjeux" placeholder="Nom du jeux..." required>
            </div>

             <div class="col-md-6">

                <label for="categoriejeux" class="form-label">Categorie du jeux</label>
                <input type="text" class="form-control " id="categoriejeux" name="categoriejeux" placeholder="Categorie du jeux..." required>
            </div>

        </div>
        <div class="row my-3">    
        </div>

        <div class="row">

            <div class="col-md-6">
                <label for="descriptionjeux" class="form-label">Description du jeux</label>
                <input type="text" class="form-control " id="descriptionjeux" name="descriptionjeux" placeholder="description du jeux..." required>
            </div>

            <div class="col-md-6">
                 <label for="reglejeux" class="form-label">Regles du jeux</label>
                 <input type="file" name="userfileregle" class="form-control" />
                
            </div>
        </div>
        <div class="row my-3">    
        </div>

        <div class="row">

            <div class="col-md-6">
                <label  for="userfilephoto" class="form-label">Ajout d'une photo </label>
                <input type="file" name="userfilephoto" class="form-control" />
            </div>  

            <div class="col-md-6">
                <label for="idjeux" class="form-label">Indice du jeu à supprimer </label>
                <input type="text" class="form-control " id="idjeux" name="idjeux" placeholder="ID du jeux..." required>
            </div>  
            
        </div>
             <div class="row my-3"> 
             </div>

        <div class="row my-3">
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-outline-light" type="submit">Modifier</button>
            </div>  
        </div>

    </div>
</form>
</div>
<div class="row my-3">    
</div>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom du jeux</th>
      <th scope="col">Description</th>
      <th scope="col">Regles</th>
      <th scope="col">Categorie</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>
  <tbody>
  
  <?php

// Connexion :
require_once("param.inc.php");
$mysqli = new mysqli($host, $login, $passwd, $dbname);
if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}



if ($stmt = $mysqli->prepare("SELECT * FROM jeux WHERE 1")) 
{
 
  $stmt->execute();
  $result = $stmt->get_result();   
  while($row = $result->fetch_assoc()) 
  {     
    echo '<tr>';        
    echo'<td>'.$row['ID_JEUX'].'</td>';
    echo'<td>'.$row['NOM_JEUX'].'</td>';
    echo'<td>'.$row['DESCRIPTION'].'</td>';
    echo'<td>'.$row['REGLE'].'</td>';
    echo'<td>'.$row['CATEGORIE'].'</td>';
    echo'<td>'.$row['FILE'].'</td>';
    echo '</tr>';
}
}

?>
</tbody>
</table>
</div>
</body>

<?php
    include 'footer.inc.php';
?>

