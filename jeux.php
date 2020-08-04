
<!-- Connexion à une BDD et effectuer une requête -->

<?php
include("connexionbdd.php");
include("header.php");
session_start();
?>

<div id="body">

    <?php
    $reponse = $bdd->query('SELECT nom, possesseur, prix FROM jeux_video ORDER BY prix DESC') or die(print_r($bdd->errorInfo())); // DESC = décroissant

    while ($donnees = $reponse->fetch())
    {
        echo '<strong>' . $donnees['nom'] . '</strong>' . ' appartient à ' . '<strong>' . $donnees['possesseur'] . '</strong>' . ' et coute ' . $donnees['prix'] . '<br />';
    }
    ?>

    <br /><p><strong>Prix total par possesseur :</strong></p>

    <?php
    $reponse = $bdd->query('SELECT SUM(prix) AS prix_total, possesseur FROM jeux_video GROUP BY possesseur') or die(print_r($bdd->errorInfo()));

    while ($donnees = $reponse->fetch())
    {
        echo  $donnees['prix_total'] . " - " . '<strong>' . $donnees['possesseur'] . "</strong>" . '<br />';
    }

    $reponse->closeCursor();
    ?>

    <?php
    /* Construire des requêtes en fonction de variables

       $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax');
       $req->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max'])); */
    ?>

</div>

<?php include("footer.php"); ?>