
<!-- Insertion des commentaires dans la BDD -->

<?php

include("connexionbdd.php");

$req = $bdd->prepare('INSERT INTO commentaires (id_billet, auteur, commentaire) VALUES(?, ?, ?)');
$req->execute(array($_GET['id'], $_POST['pseudo'], $_POST['commentaire']));

header('Location: commentaires.php?id=' . $_GET['id']);
?>