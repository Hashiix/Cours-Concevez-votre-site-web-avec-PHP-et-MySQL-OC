<head>
    <meta charset="utf-8" />
    <title>Mon super site !</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<!-- Verifier les informations nécessaires pour accéder à une page (password ici) et afficher le contenu sur une autre page : -->

<?php include("header.php"); ?>

<div id="body">

    <?php
        if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou")
        {
            echo "<p>Les codes d'accès au serveur central de la NASA sont : 02135467.</p>";
        }
        else
        {
            echo "<p>Le mot de passe est incorrect.</p>";
        }
    ?>

</div>

<?php include("footer.php"); ?>
