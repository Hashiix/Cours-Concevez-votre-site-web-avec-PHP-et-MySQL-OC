<head>
    <meta charset="utf-8" />
    <title>Mon super site !</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<!-- Page d'inscription -->

<?php include("header.php"); ?>

<div id="body">

    <h1>Créer un nouveau compte</h1>

    <div id="inscription">

        <div id="textinscription">

            Pseudo : <br />

            Mot de passe : <br />

            Retapez votre mot de passe : <br />

            Adresse mail : <br />

        </div>

        <div id="forminscription">

            <form method="post" action="verification.php">

                <input type="text" name="pseudo" required maxlength="30"/> <br />

                <input type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un chiffre, une majuscule, une minuscule et au moins 8 caractéres." required> <br />

                <input type="password" name="passverify" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un chiffre, une majuscule, une minuscule et au moins 8 caractéres." required> <br />

                <input type="text" name="mail" pattern="^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$" required/> <br />

                <input type="submit" value="S'inscrire" />

            </form>

        </div>

    </div>

    <div id="deja">

        <?php
        if (isset($_GET['succes']))
        {
            echo "<span style='color: green'>Votre compte à été bien crée !</span>";
        }
        elseif (isset($_GET['already']))
        {
            echo "<span style='color: red'>Le pseudo ou le mail sont déjà utilisés.</span>";
        }
        elseif (isset($_GET['fail']))
        {
            echo "<span style='color: red'>Le mot de passe n'est pas identique.</span>";
        }

        if (isset($_GET['succes']))
        {
            echo "<p><a href='connexion.php'>Connectez-vous</a></p>";
        }
        else {
            echo "<p>Vous avez déjà un compte ? <a href='connexion.php'>Connectez-vous</a></p>";
        }
        ?>

    </div>

</div>

<?php include("footer.php"); ?>
