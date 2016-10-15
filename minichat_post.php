<?php
session_start();
// On vérifie que le message n'est pas vide
if (!empty($_POST['newmessage'])) {
// Connexion à la base de données
try {
	$bdd = new PDO('mysql:host=localhost;dbname=3615totor;charset=utf8', '3615totor', '3615totor');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (userid, message) VALUES(?, ?)');
// On execute la requete
$req->execute(array($_SESSION['userid'], $_POST['newmessage']));
}
// Redirection du visiteur vers la page du minichat
header('Location: home.php'); 
?>
