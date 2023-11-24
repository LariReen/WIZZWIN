<?php
session_start(); // Pour les messages
include 'connpdo.php';

function validateCredentials($email, $password) {
    $errors = [];

    // Validation de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "The email address is not valid ";    }

    // Validation du mot de passe
    if (strlen($password) < 8) {
        $errors['message'] = "The password must be at least 8 characters long..";
       // $_SESSION['message'] = "Vous venez de vous inscrire à WIZZWIN!!!";
    } else {
      // Validez la complexité (lettres majuscules, minuscules, chiffres, caractères spéciaux)
      if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]+$/', $password)) {
        $errors['message'] = "The password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.";  } 
 }

    // Vous pouvez ajouter d'autres validations du mot de passe ici
    // (ex. complexité, lettres majuscules, chiffres, caractères spéciaux, etc.)

    return $errors;
}

// Contenu du formulaire :
$nom = htmlentities($_POST['nom']);
$prenom = htmlentities($_POST['prenom']);
$email = htmlentities($_POST['email']);
$password = htmlentities($_POST['password']);
$role = 1; // 1 pour membre, 2 pour admin

// Option pour bcrypt
$options = [
    'cost' => 12,
];

// Valider les identifiants
$validationErrors = validateCredentials($email, $password);

// Vérifier s'il y a des erreurs de validation
// Vérifier s'il y a des erreurs de validation
if (!empty($validationErrors)) {
  $_SESSION['errors'] = $validationErrors;
  header('Location: inscription.php'); // Redirection vers la page d'inscription en cas d'erreur
  exit();
}

/*
if (!empty($validationErrors)) {
 // $_SESSION['errors'] = $errors;
    $_SESSION['message'] = "Erreurs:<br>" . implode("<br>", $validationErrors);
    header('Location: inscription.php'); // Redirection vers la page d'accueil en cas d'erreur
    exit();
}*/

// Connexion à la base de données
require_once("param.inc.php");
$mysqli = new mysqli($host, $login, $passwd, $dbname);
if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Attention, ici on ne vérifie pas si l'utilisateur existe déjà
if ($stmt = $mysqli->prepare("INSERT INTO user(nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?)")) {
    $password = password_hash($password, PASSWORD_BCRYPT, $options);
    $stmt->bind_param("ssssi", $nom, $prenom, $email, $password, $role);

    // Exécuter la requête SQL
    if ($stmt->execute()) {
        $_SESSION['message'] = "Welcome to the WIZZWIN experience";
    } else {
        $_SESSION['message'] = "Inscription failed, please try again";
    }

    // Fermer la requête
    $stmt->close();
}

// Fermer la connexion à la base de données
$mysqli->close();


header('Location: membre2.php');
?>
