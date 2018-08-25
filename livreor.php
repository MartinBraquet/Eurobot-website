<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="livreor.css" />
        <link rel="stylesheet" href="style.css" />
        <title>Contact</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php include("header.php"); ?>
            
            <section>
                <article>
                    <h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Livre d'or</h1>
                    <form action="livreor_post.php" method="post">
                        <p><label for="nom">Nom </label><input type="text" name="nom" id="nom" /></p>
                        <p><label for="message">Message </label></p><p><textarea name="message" id="message" rows="5" cols="40" class="form_message" ></textarea></p>
                        <p><input type="submit" value="Envoyer" /></p>
                    </form>
                    <?php
                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                    }
                    catch(Exception $e)
                    {
                            die('Erreur : '.$e->getMessage());
                    }

                    $req = $bdd->query('SELECT nom, message, DATE_FORMAT(mydate, \'%d/%m/%Y\') as mydate FROM eurobot_livre_or ORDER BY ID DESC');

                    while ($donnees = $req->fetch())
                    {
                        echo '<p><strong>' . htmlspecialchars($donnees['nom']) . '</strong> (le ' . $donnees['mydate'] . ') : </p><p class="livreor_text">' . htmlspecialchars($donnees['message']) . '</p>';
                    }
                    
                    $req->closeCursor();
                    ?>
                </article>
            </section>
            
            <?php include("footer.php"); ?>

        </div>
    </body>
</html>