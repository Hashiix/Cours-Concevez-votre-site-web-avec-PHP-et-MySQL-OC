
<!-- Connexion à la BDD -->

<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Affiche les erreurs
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>
