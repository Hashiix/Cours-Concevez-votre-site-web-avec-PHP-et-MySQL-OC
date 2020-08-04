<head>
    <meta charset="utf-8" />
    <title>Mon super site</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<!-- Mettre à jour un jeu dans la BDD -->

<?php include("connexionbdd.php"); ?>

<?php include("header.php"); ?>

<div id="body">

    <?php
    $bdd->exec('UPDATE jeux_video SET prix = 10, nbre_joueurs_max = 32 WHERE nom = \'Battlefield 1942\'') or die(print_r($bdd->errorInfo()));

    // Exemples : UPDATE jeux_video SET possesseur = 'Florent' WHERE possesseur = 'Michel'

    ?>

    <p>
        Le jeu a bien été modifié ! <a href="delete_jeu.php">Clique ici</a> pour le supprimer de la BDD.<br />
    </p>

</div>

<?php include("footer.php"); ?>