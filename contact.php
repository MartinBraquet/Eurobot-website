<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

$inscrit_news = '';
if (isset($_POST['mail'])) {
    if ($_POST['message'] != '' AND $_POST['nom'] != '' AND $_POST['mail'] != '') {
        if (isset($_POST['newsletter'])) {
            //Ecris dans le fichier
            $monfichier = fopen('newsletter.txt', 'r+');
            while (!feof($monfichier)) {
               $line = fgets($monfichier);
            }
            fputs($monfichier, $_POST['mail'] . ';');
            fclose($monfichier);

            //Insère dans la Base De Données
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }

            $req = $bdd->prepare('INSERT INTO eurobot_newsletter(nom, mail) VALUES (?,?)');
            try
            {
                $req->execute(array($_POST['nom'], $_POST['mail']));
            }
            catch(Exception $e) {}

            $req->closeCursor();

            $inscrit_news = ' et vous êtes inscrit à la newsletter';
        }
        mail("martin.braquet@student.uclouvain.be","Site Eurobot",'Adresse mail: ' . $_POST['mail'] . '\n Nom: ' . $_POST['nom'] . '\n Message: ' .  $_POST['message']);
        echo '<script>alert(\'Message envoyé' . $inscrit_news . ' !\')</script>';
    } else {
        if (isset($_POST['mail'])) 
            echo '<script>alert(\'Il manque une donnée !\')</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bloc.css" />
        <title>Contact</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php include("header.php"); ?>
            
            <section>
                <article>
                    <h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Contact</h1>
                    <form action="contact.php" method="post" >
                        <p><label for="nom">Nom </label><input type="text" name="nom" id="nom" class="formclass" /></p>
                        <p><label for="mail">Adresse email </label><input type="email" name="mail" id="mail" class="formclass" /></p>
                        <p><label for="message">Message </label></p>
                        <p><textarea name="message" rows="10" cols="40" class="form_message" ></textarea></p>
                        <p><label for="newsletter">S'incrire à la newsletter: </label><input type="checkbox" name="newsletter" id="newsletter" /></p>
                        <p><input type="submit" value="Envoyer"/></p>
                    </form>
                </article>
            </section>
            
            <?php include("footer.php"); ?>

        </div>
    </body>
</html>