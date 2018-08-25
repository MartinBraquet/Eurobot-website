<?php
if(isset($_POST['message']) AND isset($_POST['nom']) AND $_POST['nom'] != '' AND $_POST['message'] != ''){
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO eurobot_livre_or(nom, message, mydate) VALUES (?,?,NOW())');
	$req->execute(array($_POST['nom'], $_POST['message']));

	$req->closeCursor();
}

header('Location: livreor.php');
?>