
<!-- Requête de tout les billets ou d'un seul via une ID -->

<?php include("connexionbdd.php"); ?>

<?php
if (isset($_GET['id']))
{
    $req = $bdd->prepare('SELECT titre, contenu, date_creation, id FROM billets WHERE id= ? ORDER BY date_creation DESC LIMIT 0,10') or die(print_r($bdd->errorInfo()));
    $req->execute(array($_GET['id']));
    $donnees = $req->fetch();
    if (empty($donnees))
    {
        echo "Ce billet n'existe pas";
    }
    else
    {
        echo '<div id="billet">' . '<strong>' . htmlspecialchars($donnees['titre']) . ' le ' . htmlspecialchars($donnees['date_creation']) . '</strong>' . '<p>' . htmlspecialchars($donnees['contenu']) . '</p>' . '</div>';
    }

    $req->closeCursor();
}
else
{
    $reponse = $bdd->query('SELECT titre, contenu, date_creation, id FROM billets ORDER BY date_creation DESC LIMIT 0,10') or die(print_r($bdd->errorInfo()));
    while ($donnees = $reponse->fetch())
    {
        echo '<div id="billet">' . '<strong>' . htmlspecialchars($donnees['titre']) . ' le ' . htmlspecialchars($donnees['date_creation']) . '</strong>' . '<p>' . htmlspecialchars($donnees['contenu']) . '</p>' . '<a href="commentaires.php?id=' . htmlspecialchars($donnees['id']) . '">Commentaires</a>' . '</div>';
    }

    $reponse->closeCursor();
}
?>