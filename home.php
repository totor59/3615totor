<?php session_start(); ?> 
<a href="deconnexion.php">Log out</a>
<?php include("header.php"); 
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
$username = $_SESSION['username'];
$query = $bdd->query('SELECT * FROM users WHERE username ="'.$username.'"');
$donnees = $query->fetch();
$_SESSION['userid'] = $donnees['id'];
?>
<table border=1 width="100%">
		<tr>
			<th width="30%">
<pre class="titre">                             
  _ __ ___   ___ _ __  _   _ 
 | '_ ` _ \ / _ \ '_ \| | | |
 | | | | | |  __/ | | | |_| |
 |_| |_| |_|\___|_| |_|\__,_|
</pre>
</th>
			<th width="70%">
<pre class="titre">
       _           _   
      | |         | |   
   ___| |__   __ _| |_  
  / __| '_ \ / _` | __| 
 | (__| | | | (_| | |_  
  \___|_| |_|\__,_|\__| 
</pre>         
</th>
		</tr>
		<tr>

<!-- MENU -->
			<td>
<pre class="menu">
|
|  Welcome <?php echo $_SESSION['username'].'!!!<br>';?>
|___________________________
|
|  <a href="#wiki">Wiki</a>
|___________________
|
|  <a href="#chat">Chat</a>
|___________________
|
|  <a href="#docs">Docs</a>
|___________________
</pre>
		</td>
<!-- CHAT -->
		<td>
			<?php include("minichat.php"); ?>
		</td>
</tr>
<!-- WIKI -->
	<tr>
		<th colspan="2" id="wiki">
<pre class="titre">
	   _ _    _ 
	  (_) |  (_)
 __      ___| | ___ 
 \ \ /\ / / | |/ / |
  \ V  V /| |   <| |
   \_/\_/ |_|_|\_\_|
</pre>
</th>
	</tr>

	<tr>
				<td width="50%" align="center"><a href="elinks.php">&#9760; ELINKS &#9760;</a></td>
				<td width="50%"> ~ Terminal Web-Browser</td>
			</tr>
			<tr>
				<td width="50%" align="center"><a href="#table1">&#9760; GIT &#9760;</a></td>
				<td width="50%"> ~ Code versioning</td>
			</tr>
			<tr>
				<td width="50%" align="center"><a href="#table1">&#9760; LINUX COMMANDS &#9760;</a></td>
				<td width="50%"> ~ Useful Commands</td>
			</tr>
			<tr>
				<td width="50%" align="center"><a href="#table1">&#9760; METASPLOIT &#9760;</a></td>
				<td width="50%"> ~ Pentesting Framework</td>
			</tr>
			<tr>
				<td width="50%" align="center"><a href="#table1">&#9760; TMUX &#9760;</a></td>
				<td width="50%"> ~ Terminal Multiplexer</td>
			</tr>
			<tr>
				<td width="50%" align="center"><a href="#table1">&#9760; VIM &#9760;</a></td>
				<td width="50%"> ~ Multi-tools Text-editor</td>
			</tr>
</table>
		<footer>
			<p>&copy;totor2016</p>
		</footer>
</body>
</html>
