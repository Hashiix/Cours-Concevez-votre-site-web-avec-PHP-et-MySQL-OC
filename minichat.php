
<!-- Création d'un minichat -->

<?php
include("connexionbdd.php");
include("header.php");
session_start();
?>

<div id="body">

    <h1>Mon super minichat !</h1>

    <form method="post" action="minichat_post.php">

        <p>Pseudo : <input type="text" name="pseudo" required maxlength="30" value="<?php
            if (isset($_SESSION['pseudo']))
            {
                echo htmlspecialchars($_SESSION['pseudo']);
            }
            elseif (isset($_COOKIE['cookiePseudo']))
            {
                echo htmlspecialchars($_COOKIE['cookiePseudo']);
            }
            else
            {
                echo "";
            }
            ?>"/>
        </p>

        <p>Message : <input type="text" name="message" maxlength="120" /> (BBCode dispo : gras ( <strong>[b][/b]</strong>), couleurs ( [color=(<span style="color:red">red</span>|<span style="color:green"></span>>|<span style="color:blue">blue</span>|<span style="color:yellow">yellow</span>|<span style="color:purple">purple</span>|<span style="color:olive">olive</span>)][/color] ) et italique ( <em>[i][/i]</em> )). </p>

        <input type="submit" value="Envoyer" />

    </form>

    <?php

    $reponse = $bdd->query('SELECT pseudo, message, date FROM minichat ORDER BY id DESC LIMIT 0,15') or die(print_r($bdd->errorInfo())); // DESC = décroissant

    while ($donnees = $reponse->fetch())
    {
        $donnees['message'] = htmlspecialchars($donnees['message']);
        $donnees['message'] = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $donnees['message']);
        $donnees['message'] = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $donnees['message']);
        $donnees['message'] = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $donnees['message']);
        $donnees['message'] = preg_replace('#http[s]?://[a-z0-9._/-?=&]+#i', '<a href="$0">$0</a>', $donnees['message']);

        echo htmlspecialchars($donnees['date']) . '<strong> ' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . $donnees['message'] . '<br />';
    }

    $reponse->closeCursor();

    ?>

    <br />

    <form method="post" action="minichat.php">
        <input type="submit" value="Rafraichir" />
    </form>

</div>

<?php include("footer.php"); ?>