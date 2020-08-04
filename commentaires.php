
<!-- Commentaires des billets -->

<?php include("connexionbdd.php"); ?>

<?php include("header.php"); ?>

<div id="body">

    <h1>Mon super blog !</h1>

    <div id="billets">

        <?php include("billets.php"); ?>

    </div>

    <?php
    $req = $bdd->prepare('SELECT id_billet, auteur, commentaire, date_commentaire FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire DESC') or die(print_r($bdd->errorInfo()));
    $req->execute(array($_GET['id']));
    ?>

    <div id="commentaires">

        <h2>Commentaires</h2>

        <?php
        while ($donnees = $req->fetch())
        {
            echo '<strong>' . htmlspecialchars($donnees['auteur']) . '</strong>' . ' le ' . htmlspecialchars($donnees['date_commentaire']) . '<p>' . htmlspecialchars($donnees['commentaire']) . '</p>';
        }

        $req->closeCursor();

        ?>

    </div>

    <p><a href="blog.php">Revenir</a></p>

    <form method="post" action="commentaires_post.php?id=<?php echo $_GET['id']; ?>" id="commentaire_post">
        <h3>Poster un commentaire</h3>

        <p>Pseudo : <input type="text" name="pseudo" required maxlength="30" value="<?php
            if (isset($_SESSION['pseudo']))
            {
                echo htmlspecialchars($_SESSION['pseudo']);
            }
            else
            {
                echo "";
            }
            ?>"/></p>

        <textarea name="commentaire" rows="8" cols="45" maxlength="300"></textarea>

        <input type="submit" value="Envoyer" />

    </form>

</div>

<?php include("footer.php"); ?>