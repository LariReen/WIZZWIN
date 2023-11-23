<?php
require_once("roleadmin.php");
session_start();
 
$id = $_POST['idjeux'];
$nom = htmlentities($_POST['nomjeux']);
$categorie = htmlentities($_POST["categoriejeux"]);
$description = htmlentities($_POST["descriptionjeux"]);
$regle=$_FILES['userfileregle']['name'];
$photo=$_FILES['userfilephoto']['name'];//recupérer le nom de fichier
$fichierTempphoto=$_FILES['userfilephoto']['tmp_name'];//recupérer le nom du fichier temporaire téléchargé sur le serveur.
$fichierTempregle=$_FILES['userfileregle']['tmp_name'];
 
// Initialisez les chemins relatifs
$cheminRelatifRegles = '';
$cheminRelatifImage = '';
 
// Connexion :
require_once("param.inc.php");
$mysqli = new mysqli($host, $login, $passwd, $dbname);
if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
 
// Récupérez les chemins relatifs actuels depuis la base de données
if ($stmtSelectPaths = $mysqli->prepare("SELECT REGLE, FILE FROM jeux WHERE ID_JEUX = ?")) {
    $stmtSelectPaths->bind_param("i", $id);
    $stmtSelectPaths->execute();
    $stmtSelectPaths->bind_result($ancienCheminRegles, $ancienCheminImage);
    $stmtSelectPaths->fetch();
 
    // Utilisez les chemins relatifs actuels comme valeurs par défaut
    $cheminRelatifRegles = $ancienCheminRegles;
    $cheminRelatifImage = $ancienCheminImage;
 
    $stmtSelectPaths->close();
}
 
// Mettez à jour la ligne dans la table "jeu"
if ($stmt = $mysqli->prepare("UPDATE jeux SET NOM_JEUX=?, DESCRIPTION=?, REGLE=?, CATEGORIE=?, FILE=? WHERE ID_JEUX=?")) {
    $stmt->bind_param("sssssi", $nom, $description, $regle, $categorie, $photo, $id);
 
    // Supprimez les anciens fichiers si de nouveaux fichiers sont téléchargés
    if (isset($_FILES["userfilephoto"]) && $_FILES["userfilephoto"]["error"] == UPLOAD_ERR_OK) {
        if (!empty($ancienCheminImage) && file_exists($ancienCheminImage)) {
            unlink($ancienCheminImage);
        }
        $destinationImage = "./img/";
        $nomFichierImage = basename($_FILES["userfilephoto"]["name"]);
        $cheminRelatifImage = $destinationImage . $nomFichierImage;
        move_uploaded_file($_FILES["userfilephoto"]["tmp_name"], $cheminRelatifImage);
    }
 
    if (isset($_FILES["userfileregle"]) && $_FILES["userfileregle"]["error"] == UPLOAD_ERR_OK) {
        if (!empty($ancienCheminRegles) && file_exists($ancienCheminRegles)) {
            unlink($ancienCheminRegles);
        }
        $destinationRegles = "./reglesjeux/";
        $nomFichierRegles = basename($_FILES["userfileregle"]["name"]);
        $cheminRelatifRegles = $destinationRegles . $nomFichierRegles;
        move_uploaded_file($_FILES["userfileregle"]["tmp_name"], $cheminRelatifRegles);
    }
 
    // Exécutez la mise à jour
    if ($stmt->execute()) {
        $_SESSION['message'] = "Mise à jour réussie";
    } else {
        $_SESSION['message'] = "Impossible de mettre à jour";
    }
 
    $stmt->close();
}
 
// Redirection vers la page des listes de jeux
header("location:Modifjeux.php");
?>