
<!-- Page de connexion -->

<?php include("header.php"); ?>

<div id="body">

    <h1>Se connecter</h1>

    <div id="inscription">

        <div id="textconnexion">

            Pseudo : <br />

            Mot de passe : <br />

            Connexion automatique : <br />

        </div>

        <div id="forminscription">

            <form method="post" action="verification.php">

                <input type="text" name="pseudo" required maxlength="30"/> <br />

                <input type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un chiffre, une majuscule, une minuscule et au moins 8 caractéres." required> <br />

                <input type="checkbox" name="case" id="case" /> <br />

                <input type="submit" value="Se connecter" />

            </form>

        </div>

    </div>

    <div id="deja">

        <?php
        if (isset($_GET['fail']))
        {
            echo "<span style='color: red'>Le mot de passe ou le pseudo sont incorrects.</span><br />
                 <p>Vous n'avez pas de compte ? <a href='inscription.php'>Créez-en un</a></p>";
        }
        elseif (isset($_GET['succes']))
        {
            echo "<p>Bravo " . "<strong>" . $_SESSION['pseudo'] . "</strong>" . " ! Vous êtes connecté ! <a href='deconnexion.php'>Cliquez ici</a> pour vous déconnecter !</p>";
        }
        else {
            echo "<p>Vous n'avez pas de compte ? <a href='inscription.php'>Créez-en un</a></p>";
        }
        ?>

    </div>

</div>

<?php include("footer.php"); ?>
