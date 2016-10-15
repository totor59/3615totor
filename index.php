<?php session_start(); ?>
<?php include("headerlite.php"); ?>
<?php
// Connexion à la database
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=3615totor;charset=utf8', '3615totor', '3615totor');
}
catch(Exception $e)

{
	die('Erreur : '.$e->getMessage());
}
?>
<?php
// On récupère les variables
$password = strip_tags($_POST['password']);
$hashpassword = sha1($password);
$username = strip_tags($_POST['username']);
$_SESSION['username'] = $username;



?>
<!-- Formulaire -->
<form style="text-align:center;" action="index.php" method="post">
	<p class="label">Enter your username:</p>
	<input type="text" name="username"/><br>
	<p class="label">Enter your password</p><br>
	<input type="password" name="password"/><br>
	<input type="submit" name="send" value="Log In"/>
<a href="inscription.php">Sign in</a>
	</form>

<?php
$query = $bdd->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
$query->execute(array($username, $hashpassword));
$usertrue = $query->rowCount();
?>
<?php
// Le password n'a pas ete envoye
if ((empty($password)) OR (empty($username))) {
	echo '
<p class="warning">
<pre>
|   
|  [!] You have to complete all fields !!!
|___________________________________________
</pre>
<p>
';
// Le password est le bon. Redirection
}  else {
	if	($usertrue) {
	header('Location: home.php');

// Le password envoye n'est pas le bon
}   else {	
	echo '
<p><pre style="color:red;text-align:center;"> 
Maybe you were not invited here ...... Go to hell !
------____              ________________________________---
	  \_         __/    ___---------__                
	    \      _/      /              \_              
	     \    /       /                 \             
	      |  /       | _    _ \          \            
	      | |       / / \  / \ |          \           
	      | |       ||   ||   ||           |          
	      | |       | \_//\\_/ |           |          
	      | |       |_| (||)   |_______|   |          
	      | |         |  ||     | _  / /   |          
	       \ \        |_________|| \/ /   /           
		\ \_       |_|_|_|_|/|  _/___/            
		 \__>       _ _/_ _ /  |                  
			  .|_|_|_|_|   |                  
			  |           /                   
			  |__________/                    
			  </pre></p>';
	exit();

}
}
?>
</body>
</html>
