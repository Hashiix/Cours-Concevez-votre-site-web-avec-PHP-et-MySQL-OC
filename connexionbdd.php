
<!-- Connexion à la BDD -->

<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=id14535711_sitephp;charset=utf8', 'id14535711_root', 'qlWb_rg4NBVPipI-',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Affiche les erreurs
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>