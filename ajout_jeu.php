
<!-- Ajouter un jeu à la BDD -->

<?php include("connexionbdd.php"); ?>

<?php include("header.php"); ?>

<div id="body">

    <?php
    // On ajoute une entrée dans la table jeux_video
    $bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) 
    VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')') or die(print_r($bdd->errorInfo()));

    echo 'Le jeu a bien été ajouté ! <br />';

    /* Insertion de données variables grâce à une requête préparée

    $req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires)
    VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
    $req->execute(array(
        'nom' => $nom,
        'possesseur' => $possesseur,
        'console' => $console,
        'prix' => $prix,
        'nbre_joueurs_max' => $nbre_joueurs_max,
        'commentaires' => $commentaires
        ));

    echo 'Le jeu a bien été ajouté !';
    */
    ?>

    <p>
        Pour modifier les informations <a href="update_jeu.php">clique ici !</a>
    </p>

</div>

<?php include("footer.php"); ?>

