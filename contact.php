<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
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
                    <p><?php
                    $inscrit_news = '';
                    if (isset($_POST['mail'])) {
                        if ($_POST['message'] != '' AND $_POST['nom'] != '' AND $_POST['mail'] != '') {
                            if (isset($_POST['newsletter'])) {
                                $monfichier = fopen('newsletter.txt', 'r+');
                                while (!feof($monfichier)) {
                                   $line = fgets($monfichier);
                                }
                                fputs($monfichier, $_POST['mail'] . ';');
                                fclose($monfichier);
                                $inscrit_news = ' et vous êtes inscrit à la newsletter';
                            }
                            mail("martin.braquet@student.uclouvain.be","Site Eurobot",'Adresse mail: ' . $_POST['mail'] . '\n Nom: ' . $_POST['nom'] . '\n Message: ' .  $_POST['message']);
                            echo '<script>alert(\'Message envoyé' . $inscrit_news . ' !\')</script>';
                        } else {
                            if (isset($_POST['mail'])) 
                                echo '<script>alert(\'Il manque une donnée !\')</script>';
                        }
                    }
                    ?></p>
                    <form action="contact.php" method="post" >
                        <p><label for="nom">Nom </label><input type="text" name="nom" id="nom" /></p>
                        <p><label for="mail">Adresse email </label><input type="email" name="mail" id="mail" /></p>
                        <p><label for="message">Message </label></p>
                        <p><textarea name="message" rows="16" cols="80"></textarea></p>
                        <p><label for="newsletter">S'incrire à la newsletter: </label><input type="checkbox" name="newsletter" id="newsletter" /></p>
                        <p><input type="submit" value="Envoyer"/></p>
                    </form>
                </article>
            </section>
            
            <?php include("footer.php"); ?>

        </div>
    </body>
</html>