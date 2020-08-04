
<!-- Verifier les informations nécessaires pour accéder à une page (password ici) et afficher le contenu sur une autre page : -->

<?php
include("header.php");
session_start();
?>

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