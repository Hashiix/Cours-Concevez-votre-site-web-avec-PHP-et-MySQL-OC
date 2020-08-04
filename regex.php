
<!-- Exemples de regex -->

<?php
include("header.php");
session_start();
?>

<div id="body">

    <form method="post" action="regex.php">

        <p>
            Veuillez entrer un numéro de téléphone français valide :
        </p>

        <input type="text" name="telephone" />
        <input type="submit" value="Valider" />

    </form>

    <?php
    if (isset($_POST['telephone']))
    {
        $_POST['telephone'] = htmlspecialchars($_POST['telephone']);

        if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['telephone']))
        {
            echo 'Le ' . $_POST['telephone'] . ' est un numéro <strong>valide</strong> !';
        }
        else
        {
            echo 'Le ' . $_POST['telephone'] . ' n\'est pas valide, recommencez !';
        }
    }
    ?>

    <form method="post" action="regex.php">

        <p>
            Veuillez entrer une adresse mail valide :
        </p>

        <input type="text" name="mail" />
        <input type="submit" value="Valider" />

    </form>

    <?php
    if (isset($_POST['mail']))
    {
        $_POST['mail'] = htmlspecialchars($_POST['mail']);

        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
        {
            echo 'L\'adresse ' . $_POST['mail'] . ' est <strong>valide</strong> !';
        }
        else
        {
            echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
        }
    }
    ?>

</div>

<?php include("footer.php"); ?>