<?php 
if (!isset($_SESSION['clicks']))
    $_SESSION['clicks'] = 1;
else
    $_SESSION['clicks'] = $_SESSION['clicks'] + 1;
?>
<footer>
    <div id="tweet">
        <h1>Dernier post Facebook</h1>
        <p>La construction est en marche !</p>
        <p>le 1er octobre 2018 à 23h12</p>
    </div>
    <div id="mes_photos">
        <h1>Photos</h1>
        <p><a href="images/photo1.jpg"><img src="images/photo1.jpg" alt="Photographie" /></a><a href="images/photo2.jpg"><img src="images/photo2.jpg" alt="Photographie" /></a><a href="images/photo3.jpg"><img src="images/photo3.jpg" alt="Photographie" /></a><a href="images/photo4.jpg"><img src="images/photo4.jpg" alt="Photographie" /></a></p>
    </div>
    <div id="mes_amis">
        <h1>Concurrents</h1>
        <div id="listes_amis">
            <ul>
                <li><a href="robot1.php"><?php echo $robot1; ?></a></li>
                <li><a href="robot2.php"><?php echo $robot2; ?></a></li>
                <li><a href="robot3.php"><?php echo $robot3; ?></a></li>
            </ul>
            <ul>
                <li><a href="robot4.php"><?php echo $robot4; ?></a></li>
                <li><a href="robot5.php"><?php echo $robot5; ?></a></li>
                <li><a href="robot6.php"><?php echo $robot6; ?></a></li>
            </ul>
        </div>
    </div>
    <div id="mes_clicks">
        <p><?php echo $_SESSION['clicks']; ?> Clicks</p>
        <?php  
        if (isset($_COOKIE['pseudo'])) {
            echo '<p>Nom: ' . $_COOKIE['pseudo'] . '</p>';
        } elseif (isset($_POST['nom_cookie'])) {
            echo '<p>Nom: ' . $_POST['nom_cookie'] . '</p>';
        } else {
            ?>
            <form action="index.php" method="post" >
                <p><label for="nom_cookie">Nom</label></p>
                <p><input type="text" name="nom_cookie" id="nom_cookie" size="3" /></p>
                <p><input type="submit" value="OK" /></p>
            </form>
            <?php
        }
        ?>
    </div>
</footer>