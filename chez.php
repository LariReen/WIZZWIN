<?php
    session_start();
    if(!isset($_SESSION['role'])) {
        $_SESSION['erreur'] = "Vous devez être connecté";
        header('Location: index.php');
    }
    $login = $_SESSION['login'];
    $titre = "Chez ".$login;
    include 'header.inc.php';
    include 'menu.inc.php';
?>
<div class="container">

<h1>Page de <?php echo $login; ?> </h1>

<?php
    if ($_SESSION['role'] == 1) {
        echo "Vous êtes membre";
    } else {
        echo "Vous êtes administrateur";
    }
?>
</div>
<?php
    include 'footer.inc.php';
?>