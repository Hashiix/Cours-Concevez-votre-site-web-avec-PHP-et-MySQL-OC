
<!-- Supprimer un jeu dans la BDD -->

<?php
include("connexionbdd.php");
include("header.php");
session_start();
?>

<div id="body">

    <?php
    $bdd->exec('DELETE FROM jeux_video WHERE nom=\'Battlefield 1942\'') or die(print_r($bdd->errorInfo()));
    ?>

    <p>
        Le jeu a bien été supprimé de la BDD !
    </p>

</div>

<?php include("footer.php"); ?>