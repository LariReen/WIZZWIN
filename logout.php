<?php
session_start();

// Détruire toutes les variables de session
$_SESSION = array();

// Détruire complètement la session
session_destroy();

// Empêcher la mise en cache de la page
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

// Rediriger vers la page de connexion
header("Location: index.php");
exit();
?>
