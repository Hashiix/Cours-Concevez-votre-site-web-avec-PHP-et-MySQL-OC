
<!-- Envoyer des informations en GET par l'URL -->

<?php include("header.php"); ?>

<div id="body">

    <?php
    if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
    {
        // 1 : On force la conversion en nombre entier
        $_GET['repeter'] = (int) $_GET['repeter'];

        // 2 : Le nombre doit être compris entre 1 et 100
        if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100)
        {
            for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
            {
                echo '<p>Bonjour ' . htmlspecialchars($_GET['prenom']) . ' ' . htmlspecialchars($_GET['nom']) . ' !</p>';
            }
        }
    }
    else
    {
        echo '<p>Il faut renseigner un nom, un prénom et un nombre de répétitions !</p>';
    }
    ?>

</div>

<?php include("footer.php"); ?>
