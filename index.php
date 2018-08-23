<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// Cookies en début de code obligatoirement
if (isset($_POST['nom_cookie'])) {
    setcookie('pseudo', $_POST['nom_cookie'], time() + 86400 * 365, null, null, false, true);
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="index.css" />
        <title>Accueil</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php include("header.php"); ?>
            
            <div id="banniere_image">
                <div id="banniere_description">
                    Retour sur le premier concours à Bruxelles...
                    <a href="http://www.eurobot.org" class="bouton_rouge">Voir l'article <img src="images/flecheblanchedroite.png" alt="" /></a>
                </div>
            </div>
            
            <section id="general_section">
                <article>
                    <h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Petit article sur la construction</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec sagittis massa. Nulla facilisi. Cras id arcu lorem, et semper purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel enim mi, in lobortis sem. Vestibulum luctus elit eu libero ultrices id fermentum sem sagittis. Nulla imperdiet mauris sed sapien dignissim id aliquam est aliquam. Maecenas non odio ipsum, a elementum nisi. Mauris non erat eu erat placerat convallis. Mauris in pretium urna. Cras laoreet molestie odio, consequat consequat velit commodo eu. Integer vitae lectus ac nunc posuere pellentesque non at eros. Suspendisse non lectus lorem.</p>
                    <p>Vivamus sed libero nec mauris pulvinar facilisis ut non sem. Quisque mollis ullamcorper diam vel faucibus. Vestibulum sollicitudin facilisis feugiat. Nulla euismod sodales hendrerit. Donec quis orci arcu. Vivamus fermentum magna a erat ullamcorper dignissim pretium nunc aliquam. Aenean pulvinar condimentum enim a dignissim. Vivamus sit amet lectus at ante adipiscing adipiscing eget vitae felis. In at fringilla est. Cras id velit ut magna rutrum commodo. Etiam ut scelerisque purus. Duis risus elit, venenatis vel rutrum in, imperdiet in quam. Sed vestibulum, libero ut bibendum consectetur, eros ipsum ultrices nisl, in rutrum diam augue non tortor. Fusce nec massa et risus dapibus aliquam vitae nec diam.</p>
                    <p>Phasellus ligula massa, congue ac vulputate non, dignissim at augue. Sed auctor fringilla quam quis porttitor. Praesent vitae dignissim magna. Pellentesque quis sem purus, vel elementum mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas consectetur euismod urna. In hac habitasse platea dictumst. Quisque tincidunt porttitor vestibulum. Ut iaculis, lacus at molestie lacinia, ipsum mi adipiscing ligula, vel mollis sem risus eu lectus. Nunc elit quam, rutrum ut dignissim sit amet, egestas at sem.</p>
                </article>
                <aside>
                    <h1>À propos du robot</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_robot"><img src="images/robot.jpg" alt="Photo du robot" /></p>
                    <p>Laisse-moi le temps de me présenter&nbsp;: je m'appelle "Robot", je suis né en septembre 2018 dans le Faraday à Louvain-La-Neuve.</p>
                    <p><a href="https://www.facebook.com"><img src="images/facebook.png" alt="Facebook" /></a><a href="https://www.twitter.com"><img src="images/twitter.png" alt="Twitter" /></a><img src="images/vimeo.png" alt="Vimeo" /><img src="images/flickr.png" alt="Flickr" /><img src="images/rss.png" alt="RSS" /></p>
                </aside>
            </section>

            <?php include("footer.php"); ?>

        </div>
    </body>
</html>
