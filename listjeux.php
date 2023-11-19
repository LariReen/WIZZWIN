<?php 

    $titre = "Liste des jeux";
    include 'header.inc.php';
    include 'menufoncadmin.php';

?>
<div class="container">
<h2>List of gaming</h2>
<video autoplay muted loop id="video-background">
        <source src="./img/backvideo.mp4" type="video/mp4">
    </video>

<table class="table table-blue table-active table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Regles</th>
      <th scope="col">Categorie</th>
      <th scope="col">Photo</th>
      
  </thead>
  <tbody>
  
  <?php

// Connexion :
require_once("connpdo.php");
$req="SELECT * FROM jeux";
$ps=$pdo->prepare($req);
$ps->execute();


  while($row=$ps->fetch()) 
  {     
    echo '<tr>';     
    echo  '<th scope="row">'.$row['ID_JEUX'].'</th>';
    echo'<td>'.$row['NOM_JEUX'].'</td>';
    echo'<td>'.$row['DESCRIPTION'].'</td>'; 
    echo '<td><img src="img/'.$row['FILE'].'" width="100px" height="100px"></td>';
    echo'<td>'.$row['CATEGORIE'].'</td>';
    echo '<td><img src="img/'.$row['FILE'].'" width="100px" height="100px"></td>';
    echo '</tr>';
  
}

?>

</tbody>

</table>

</div>
<?php
    include 'footer.inc.php';
?>
