<?php include("header.php");
session_start();
?>

    <div id="body">
        <h1>Premiers cours et tests</h1>

        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.<br />
            Les différentes conditions/functions/réponses peuvent être vues directement sur mon Github : <strong>@Hashiix</strong></p>

        <p><strong>Conditions :</strong></p>

        <?php
        $age = 12;

        if ($age <= 12)
        {
            echo "Salut gamin ! Bienvenue sur mon site !<br />";
            $autorisation_entrer = true;
        }
        else
        {
            echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
            $autorisation_entrer = false;
        }

        echo "Avez-vous l'autorisation d'entrer ? La réponse est : ";
        ?>

        <?php

        if ($autorisation_entrer)
        {
            echo "<strong>Bienvenue petit nouveau. :o)</strong><br />";
        }
        elseif (!$autorisation_entrer)
        {
            echo "<strong>T'as pas le droit d'entrer !</strong><br />";
        }
        else
        {
            echo "<strong>Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?</strong><br />";
        }
        ?>

        <?php
        $note = 16;

        switch ($note)
        {
            case 0:
                echo "Tu es vraiment un gros nul !!!<br />";
                break;

            case 5:
                echo "Tu es très mauvais<br />";
                break;

            case 7:
                echo "Tu es mauvais<br />";
                break;

            case 10:
                echo "Tu as pile poil la moyenne, c'est un peu juste…<br />";
                break;

            case 12:
                echo "Tu es assez bon<br />";
                break;

            case 16:
                echo "Tu te débrouilles très bien !<br />";
                break;

            case 20:
                echo "Excellent travail, c'est parfait !<br />";
                break;

            default:
                echo "Désolé, je n'ai pas de message à afficher pour cette note<br />";
        }
        ?>

        <br /><p><strong>Boucles :</strong></p>

        <?php
        $nombre_de_lignes = 1;

        for ($nombre_de_lignes = 1; $nombre_de_lignes <= 20; $nombre_de_lignes++)
        {
            echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
        }
        ?>

        <br /><p><strong>Foreach :</strong></p>

        <?php
        $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

        foreach($prenoms as $element)
        {
            echo $element . '<br />';
        }
        ?>

        <br /><p><strong>Foreach avec array :</strong></p>

        <?php
        $coordonnees = array (
            'Prenom' => 'François',
            'Nom' => 'Dupont',
            'Adresse' => '3 Rue du Paradis',
            'Ville' => 'Marseille');

        foreach($coordonnees as $cle => $infos)
        {
            echo '[ ' . $cle . ' ] vaut ' . $infos . '<br />';
        }
        ?>

        <br /><p><strong>Informations de variables :</strong></p>

        <?php
        echo '<pre>';
        print_r($coordonnees);
        echo '</pre>';
        ?>

        <br /><p><strong>Verifier si une array key existe :</strong></p>

        <?php
        if (array_key_exists('Nom', $coordonnees))
        {
            echo 'La clé "Nom" se trouve bien dans les coordonnées ! <br />';
        }
        if (array_key_exists('Pays', $coordonnees))
        {
            echo 'La clé "Pays" se trouve bien dans les coordonnées ! <br />';
        }
        if (in_array('Dupont', $coordonnees))
        {
            echo 'La valeur "Dupont" se trouve bien dans les coordonnées ! <br />';
        }
        if (in_array('JuL', $coordonnees))
        {
            echo 'La valeur "JuL" se trouve bien dans les coordonnées ! <br />';
        }

        $position = array_search('Marseille', $coordonnees);
        echo '"Marseille" se trouve en position ' . $position . '<br />';
        ?>

        <br /><p><strong>Longueur d'une phrase :</strong></p>

        <?php
        $phrase = 'Bonjour tout le monde ! Je suis une phrase !';
        $longueur = strlen($phrase);


        echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase . '<br />';
        ?>

        <br /><p><strong>Fonctions :</strong></p>

        <?php
        function DireBonjour($nom)
        {
            echo 'Bonjour ' . $nom . ' !<br />';
        }

        DireBonjour('Marie');
        DireBonjour('Patrice');
        DireBonjour('Edouard');
        DireBonjour('Pascale');
        DireBonjour('François');
        DireBonjour('Benoît');
        DireBonjour('Père Noël');
        ?>

        <br />

        <?php
        function VolumeCone($rayon, $hauteur)
        {
            $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
            return $volume;
        }

        $volume = VolumeCone(3, 1);
        echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;
        ?>

    </div>

<?php include("footer.php"); ?>