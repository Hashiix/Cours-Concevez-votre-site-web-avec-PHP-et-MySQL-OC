
<!-- Deconnexion -->

<?php include("header.php"); ?>

<div id="body">

    <?php

    if (isset($_SESSION['pseudo']))
    {
        $_SESSION = array();
        session_destroy();
        header('Location: index.php');
    }
    else {
        header('Location: index.php');
    }

    ?>

</div>

<?php include('footer.php'); ?>

