
<!-- Insertion commentaire dans la BDD -->

<?php

include("connexionbdd.php");

$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

setcookie('cookiePseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

header('Location: minichat.php');
?>
