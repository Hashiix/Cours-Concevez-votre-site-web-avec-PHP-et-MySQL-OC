
<!-- Deconnexion -->

<?php
session_start();

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