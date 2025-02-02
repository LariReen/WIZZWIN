<?php
    session_start();
    // Vérifier si la session est active
if (!isset($_SESSION['nomjoueur'])) {
  // Rediriger vers la page de connexion si la session n'est pas active
  header("Location: index.php");
  exit();
}
    $titre = "Administrateur";
    include 'header.inc.php';
    include 'menuadmin.php';
?>
<!doctype html>
    <html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titre;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="stylea.css">
  </head>
  <body>

<div class="container">
<h1>Contenu</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
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


$i=1;
if ($stmt = $mysqli->prepare("SELECT * FROM user WHERE 1")) 
{
 
  $stmt->execute();
  $result = $stmt->get_result();   
  while($row = $result->fetch_assoc()) 
  {     
    echo '<tr>';     
    echo  '<th scope="row">'.$i.'</th>';
    echo'<td>'.$row['nom'].'</td>';
    echo'<td>'.$row['prenom'].'</td>';
    echo'<td>'.$row['email'].'</td>';
    echo'<td>'.$row['role'].'</td>';
    echo'<td><a class="btn btn-danger" href="delete.php?email='.$row['email'].'" role="button">Delete</a></td>';
    echo '</tr>';
$i++;   
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
