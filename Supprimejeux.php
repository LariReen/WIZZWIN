<?php 
session_start();
    $titre = "Suppression de Jeux";
    include 'header.inc.php';
    include 'menufoncadmin.php';
?>

<div class="displayAdmin">
  <div class="container">
  
   <h3 class="white-text">Deletion of a game </h3>
  <div class="row">
  
    <form  method="POST" action="tt_supprimejeux.php" enctype="multipart/form-data">
            <div class="row">
              <div class="col-10">
                    <label for="idjeux" class="form-label">Indice du jeu à supprimer </label>
                    <input type="text" class="form-control " id="idjeux" name="idjeux" placeholder="ID du jeux..." required>
                <br>  
            </div>
            <div class="col-2">
                <br>
                <div class="d-grid gap-2 d-md-block">
                  <button class="btn btn-outline-light" type="submit" id="supprimer" name="supprimer">Supprimer</button>
                </div>
            </div> 
    </form>
 
</div>
<br>
<br>
<br>

<div class="container">
<br><br>
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
<br><br><br><br><br><br><br>
</div>

<br><br><br><br><br><br>
</div>
</div>
</body>

<?php
    include 'footer.inc.php';
    
?>
