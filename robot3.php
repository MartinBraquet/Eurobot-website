<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="robots.css" />
        <title>Robots</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php include("header.php"); ?>
            
            
            <section id="general_section">
                <article>
                    <h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" /><?php echo $robot3; ?></h1>
                    <p>Créateurs:</p>
                    <div class="liste_createurs">
                        <ul>
                            <li>Nom</li>
                            <li>Nom</li>
                            <li>Nom</li>
                            <li>Nom</li>
                        </ul>
                        <ul>
                            <li>Nom</li>
                            <li>Nom</li>
                            <li>Nom</li>
                            <li>Nom</li>
                        </ul>
                    </div>
                    <p>Phasellus ligula massa, congue ac vulputate non, dignissim at augue. Sed auctor fringilla quam quis porttitor. Praesent vitae dignissim magna. Pellentesque quis sem purus, vel elementum mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas consectetur euismod urna. In hac habitasse platea dictumst. Quisque tincidunt porttitor vestibulum. Ut iaculis, lacus at molestie lacinia, ipsum mi adipiscing ligula, vel mollis sem risus eu lectus. Nunc elit quam, rutrum ut dignissim sit amet, egestas at sem.</p>
                </article>
                <aside>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_robot"><img src="images/robot.jpg" alt="Photo du robot" /></p>
                    <p>Nom: </p>
                    <p>Points forts: </p>
                    <p>Points faibles: </p>
                    <p><a href="https://www.facebook.com"><img src="images/facebook.png" alt="Facebook" /></a><a href="https://www.twitter.com"><img src="images/twitter.png" alt="Twitter" /></a></p>
                </aside>
            </section>
            
            <?php include("footer.php"); ?>

        </div>
    </body>
</html>
