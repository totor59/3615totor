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

<!-- Formulaire -->
<form action="inscription.php" method="post" style="text-align:center;">
<h1>SIGN IN !</h1>
	<p class="label">Enter your email address:</p>
	<input type="email" name="email"/><br>
	<p class="label">Enter your username:</p>
	<input type="text" name="username"/><br>
	<p class="label">Enter your password:</p>
	<input type="password" name="password"/><br>
	<p class="label">Confirm your password:</p>
	<input type="password" name="confirmpassword"/><br>
	<input type="submit" name="send" value="Sign In"/>
	<a href="index.php" class="button">Connexion</a>
</form>
</br>

<?php
// On récupère et on sécurise les variables
$email = strip_tags($_POST['email']);
$username = strip_tags($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$confirmpassword = htmlspecialchars($_POST['confirmpassword']);
?>
<?php
// On prépare la requête a la database
$req = $bdd->prepare('INSERT INTO users(username, email, password) VALUES(:username, :email, :password)');
$query = $bdd->prepare('SELECT username FROM users WHERE username= ?');
$query->execute(array($username));
$usernamecheck = $query->rowCount();
?>
<?php
// On vérifie que tous les champs sont rentrés
if ((empty($password)) OR (empty($username)) OR (empty($email)) OR (empty($confirmpassword))) {
echo '<p class="warning">
<pre>
|   
|  [!] You have to complete all fields !!!
|___________________________________________
</pre>
</p>';

} else {
	// On vérifie que l'adresse email est au bon format
	if ((preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) == false )
	{
echo '<p class="warning">
<pre>
|   
|  [!] Please renseign a valid email address !!!
|_______________________________________________
</pre>
</p>';
	} else {
		// On vérifie la longueur du username
		if ( strlen($username) < 4 ) {
echo '<p class="warning">
<pre>
|   
|  [!] You must choose at least a 4 characters username !!!
|__________________________________________________________
</pre>
</p>';
		} else {
			// On vérifie que le username choisi n'est pas déja présent dans la database

			if ($usernamecheck){
echo '<p class="warning">
<pre>
|   
|  [!] Username already exists !!!
|_________________________________
</pre>
</p>';
			} else {	

				// On vérifie que les 2 passwords sont identiques
				if ($password != $confirmpassword) {
echo '<p class="warning">
<pre>
|   
|  [!] Passwords does not match. Please recheck !!!
|__________________________________________________
</pre>
</p>';
				} else {
					// On execute la requête et on redirige l'utilisateur vers la page de connexion
					$req->execute(array(
						'username' => $username,
						'email' => $email,
						'password' => sha1($password)
					));
echo '<p class="greeter">
<pre>
|   
|  You are actually register as ' .$username. '. Please sign in 
|______________________________________________________________
</pre>
</p>'; 
				}
			}
		}
	}
}
