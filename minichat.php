<?php
session_start();
header("Refresh:60");
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=3615totor;charset=utf8', '3615totor', '3615totor');
}
catch(Exception $e)

{
	die('Erreur : '.$e->getMessage());
}
// On définit les variables a envoyer a la database

// Récupération des 10 derniers messages
$reponse = $bdd->query('
SELECT *
FROM minichat
INNER JOIN users
WHERE users.id = minichat.userid
ORDER BY minichat.ID DESC 
LIMIT 0, 10
');
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
?>
				<h2>
					The 10 last messages
				</h2>
<!-- THE LOOP -->
<ul>
<?php
while ($donnees = $reponse->fetch()) {
	if(($donnees['username']) === "totor") {
	echo '<li><strong class="promptadmin">' . strtolower(htmlspecialchars($donnees['username'])) . ':~#</strong> : ' . htmlspecialchars($donnees['message']) . '</li>';
	} else {
	echo '<li><strong class="promptuser">' . strtolower(htmlspecialchars($donnees['username'])) . ':~$</strong> : ' . htmlspecialchars($donnees['message']) . '</li>';
	}
}

$reponse->closeCursor();
?>
</ul>
<form id="chat" action="minichat_post.php" method="post">
<p class="label">Type your message here</p>
<textarea type="text" name="newmessage" rows="3" cols="50" maxlength=140></textarea><br>
<input type="submit" value="New Message">
</form>
