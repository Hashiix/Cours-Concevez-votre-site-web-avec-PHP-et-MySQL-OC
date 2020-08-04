<?php

include("connexionbdd.php");

if (isset($_POST['passverify']) AND $_POST['passverify'] === $_POST['pass'])
{
    $reponse = $bdd->query('SELECT pseudo, email FROM membres WHERE pseudo=\'' . $_POST['pseudo'] . '\' OR email=\'' . $_POST['mail'] . '\'') or die(print_r($bdd->errorInfo()));
    $resultat = $reponse->fetch();

    if (!$resultat) {
        // Hachage du mot de passe
        $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $pseudo = $_POST['pseudo'];
        $email = $_POST['mail'];

        $req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
        $req->execute(array(
            'pseudo' => $pseudo,
            'pass' => $pass_hache,
            'email' => $email));

        header('Location: inscription.php?succes=');
    }
    else {
        header('Location: inscription.php?already=');
    }

} elseif (!isset($_POST['passverify'])) {
    $reponse = $bdd->query('SELECT pseudo, pass FROM membres WHERE pseudo=\'' . $_POST['pseudo'] . '\'') or die(print_r($bdd->errorInfo()));
    $resultat = $reponse->fetch();

    $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

    if (!$resultat) {
        header('Location: connexion.php?fail=');
    } else {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['pseudo'] = $resultat['pseudo'];
            header('Location: connexion.php?succes=');
        } else {
            header('Location: connexion.php?fail=');
        }
    }

} else {
    header('Location: inscription.php?fail=');
}
?>
