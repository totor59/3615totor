<?php
session_start();
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
$reponse = $bdd->query('SELECT username, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
?>
<table border width="100%">
				<caption style="text-decoration:underline; color:forestgreen;font-weight:bold;">GENERAL</caption>
				<tr>
					<th>The ten last messages</th>
				</tr>
				<tr>
<!-- THE LOOP -->
<td>
<ul>
<?php
while ($donnees = $reponse->fetch()) {
	echo '<li><strong>' . htmlspecialchars($donnees['username']) . ':~$</strong> : ' . htmlspecialchars($donnees['message']) . '</li>';
}
$reponse->closeCursor();
?>
</ul>
</td>
				</tr>
				<tr>
					<td>
<form action="minichat_post.php" method="post">
<p class="label">Type your message here</p>
<textarea type="text" name="newmessage" rows="3" cols="50" maxlength=140></textarea><br>
<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
<input type="submit" value="New Message">
</form>
</td>
				</tr>
</table>
