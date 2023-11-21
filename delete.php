<?php
session_start();
require_once("param.inc.php");

// Connexion :
$mysqli = new mysqli($host, $login, $passwd, $dbname);

if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
 else{
  if(isset($_GET['ID_JEUX'])){
    $id=$_GET['ID_JEUX'];
 }
 
//On fait la requête pour supprimer le jeu de la base de données  
$sql = "DELETE FROM jeux WHERE ID_Jeux=?";

 if(mysqli_query($mysqli, $sql )) {   
   // echo'Suppression réussie;
   header("location:listeJeux.php");
   exit;
} else{
  echo "Erreur lors de la suppression : " . mysqli_error(mysql: $mysqli);
}
 }
 

$mysqli->close();

?>