
<!-- Envoyer des informations en POST par formulaire : -->

<?php include("header.php"); ?>

<div id="body">

    <p>Bonjour !</p>

    <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['pseudo']); ?> et tu viens de <?php echo htmlspecialchars($_POST['choix']); ?> !</p>

    <p>Et le commentaire que tu as écrit : </br /> <?php echo htmlspecialchars($_POST['message']); ?> </p>

</div>

<?php include("footer.php"); ?>