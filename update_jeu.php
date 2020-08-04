
<!-- Mettre à jour un jeu dans la BDD -->

<?php
include("connexionbdd.php");
include("header.php");
session_start();
?>

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