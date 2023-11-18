<?php 
  session_start(); // Pour les messages

$nom=$_POST['nomjeux'];
$description=$_POST['descriptionjeux'];
$regle=$_FILES['userfileregle']['name'];
$categorie=$_POST['categoriejeux'];
$photo=$_FILES['userfilephoto']['name'];//recupérer le nom de fichier
$fichierTemp=$_FILES['userfile']['tmp_name'];//recupérer le nom du fichier temporaire téléchargé sur le serveur.
move_uploaded_file($fichierTemp,'./images/'.$photo);//transférer le fichier dans le dossier image du projet
require_once("connpdo.php");
$req="INSERT INTO jeux(NOM_JEUX,DESCRIPTION,REGLE,CATEGORIE,FILE) VALUES (?,?,?,?,?)";
$ps=$pdo->prepare($req);
$params=array($nom,$description,$regle,$categorie,$photo);

if($ps->execute($params)) {
$_SESSION['message'] = "Ajout réussi.";

header("location:listjeux.php");
} else {  $_SESSION['message'] = "Problème Ajout.";

    header("location:listjeux.php");  }
?>
