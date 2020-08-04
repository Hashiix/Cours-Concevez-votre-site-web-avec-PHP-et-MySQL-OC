
<!-- Création d'un blog avec billets et commentaires -->

<?php
include("connexionbdd.php");
include("header.php");
session_start();
?>

<div id="body">

    <h1>Mon super blog !</h1>

    <div id="billets">
        <?php include("billets.php"); ?>
    </div>

</div>

<?php include("footer.php"); ?>