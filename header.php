
<?php
session : session_start();
?>

<head>
    <meta charset="utf-8" />
    <title>Mon super site</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
    <nav id="menu">

        <ul>
            <li><a id="onglets" href="index.php">Accueil</a></li>
        </ul>

        <?php
        if (isset($_SESSION['pseudo']))
        {
            echo "<div id='headerdeconnexion>'><p><span style='color: #d4d4dc'> Bonjour, " . $_SESSION['pseudo'] . " (<a href='deconnexion.php' id='deconnexiondecoration'>Deconnexion</a>)</span></p></div>";
        }
        ?>

        <ul>
            <li><a id="onglets" href="minichat.php">Minichat</a></li>
            <li><a id="onglets" href="blog.php">Blog</a></li>
        </ul>

    </nav>
</header>
