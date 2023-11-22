<?php 
    $titre = "Liste des admininistrateurs";
    include 'header.inc.php';
    include 'menufoncadmin.php';

?>
<div class="container">
<div class="row my-3">    
        </div>
<h2>List of administrator</h2>
<div class="row my-3">    
        </div>
<video autoplay muted loop id="video-background">
        <source src="./img/backvideo.mp4" type="video/mp4">
    </video>


<table class="table table-blue table-active table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">EMAIL</th>
      
  </thead>
  <tbody>
  
  <?php

// Connexion :
require_once("connpdo.php");
$req= "SELECT id, nom, prenom, email FROM user WHERE role = 2";
$ps=$pdo->prepare($req);
$ps->execute();


  while($row=$ps->fetch()) 
  {     
    echo '<tr>';     
    echo  '<th scope="row">'.$row['id'].'</th>';
    echo'<td>'.$row['nom'].'</td>';
    echo'<td>'.$row['prenom'].'</td>';
    echo'<td>'.$row['email'].'</td>';
    echo '</tr>';
  
}

?>

</tbody>

</table>

</div>
<?php
    include 'footer.inc.php';
?>
