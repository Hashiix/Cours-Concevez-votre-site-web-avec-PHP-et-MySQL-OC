<?php
/* Cookies & Session avant tout code HTML.
   exemple cookie : <?php setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true); ?>
   exemple session : session_start(); */

include("header.php");
session_start();
?>

    <div id="body">

        <h1>Mon super site</h1>

        <p id="intro">
            Bienvenue sur mon super site !<br />
            Crée pour le cours "Concevez votre site web avec PHP et MySQL" sur OpenClassrooms.<br />
            Chaque lien/input mène vers une ou plusieures parties du cours (le minichat, le blog et l'espace membres étant les plus abouti) !<br />
            <strong>Le tout est trouvable sur mon Github : @Hashiix</strong><br />
        </p>

        <p>
            <strong>Premiére série de tests (conditions, boucles, fonctions, etc..) :</strong>
        </p>

        <p><a href="test.php">C'est par ici !</a></p>

        <p>
            <strong>Envoyer des informations en GET par l'URL :</strong>
        </p>

        <p><a href="bonjour.php?nom=Dupont&amp;prenom=Jean&amp;repeter=15">Dis-moi bonjour !</a></p>

        <p>
            <strong>Envoyer des informations en POST par formulaire :</strong>
        </p>

        <form method="post" action="cible.php">

            <p>
                Veuillez taper votre pseudo :
            </p>

            <input type="text" name="pseudo" required maxlength="30"/>

            <p>
                Votre pays :
            </p>

            <select name="choix">
                <option value="France">France</option>
                <option value="Portugal">Portugal</option>
                <option value="Japon">Japon</option>
                <option value="Corée">Corée</option>
            </select>

            <p>
                Et votre commentaire :
            </p>

            <textarea name="message" rows="8" cols="45" required maxlength="300">
        </textarea>

            <input type="submit" value="Valider" />

        </form>

        <p>
            <strong>Verifier les informations nécessaires pour accéder à une page (password ici, c'est "kangourou" mais faut pas le dire) et afficher le contenu sur une autre page ou ici même :</strong>
        </p>

        <form method="post" action="secret.php">

            <p>
                Veuillez entrer le mot de passe :
            </p>

            <input type="password" name="mot_de_passe" required />
            <input type="submit" value="Valider" />

        </form>

        <?php

        if (!isset($_POST['mot_de_passe']) OR $_POST['mot_de_passe'] != "kangourou")
        {
            ?>

            <form method="post" action="index.php">

                <p>
                    Veuillez entrer le mot de passe :
                </p>

                <input type="password" name="mot_de_passe" required />
                <input type="submit" value="Valider" />

            </form>

            <p>
                Le mot de passe est incorrect.
            </p>

            <?php
        }
        else
        {
            echo "<p>Les codes d'accès au serveur central de la NASA sont : 02135467.</p>";
        }

        ?>

        <p>
            <strong>Connexion à une BDD et effectuer une requête :</strong>
        </p>

        <p> Si tu veux voir la liste des jeux <a href="jeux.php">clique ici !</a></p>

        <p>
            <strong>Ecrire ou modifier des données dans une BDD :</strong>
        </p>

        <p><a href="ajout_jeu.php">Clique ici</a> pour ajouter ou modifier un jeu à la BDD !</p>

        <p>
            <strong>Créer une image avec PHP (GD) :</strong>
        </p>

        <p>Une image créée en PHP <a href="testgd.php">c'est par ici !</a></p>

        <p>
            <strong>Les regex :</strong>
        </p>

        <p>Quelques exemples de regex, <a href="regex.php">clique ici !</a></p>

        <p>
            <strong>Espace membres avec inscription (password hached), connexion et déconnexion :</strong>
        </p>

        <p>Pour t'inscrire <a href="inscription.php">clique ici !</a> Sinon <a href="connexion.php">clique ici</a> pour te connecter.</p>

    </div>

<?php include("footer.php"); ?>