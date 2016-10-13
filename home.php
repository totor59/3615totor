
<?php session_start(); ?> 
<a href="deconnexion.php">Log out</a>
<?php include("header.php"); ?>
		<p style="color:yellow">
<pre>
|  
|  Welcome <?php echo $_SESSION['username'].'!!!<br>';?>
|  This is my first website made for terminal,
|  I hope you enjoy it !
|_______________________________________________
|
|  <a href="#wiki">Wiki</a>
|________________________
|
|  <a href="#chat">Chat</a>
|________________________
|
|  <a href="#docs">Docs</a>
|________________________
</pre>
</p>
		<main>
			<table border=1  bordercolor="forestgreen" width="100%" style="font-weight:bold; border-style:dotted;">
				<caption id="wiki" style="color:chartreuse;">
					<pre>
           _ _    _ 
          (_) |  (_)
 __      ___| | ___ 
 \ \ /\ / / | |/ / |
  \ V  V /| |   <| |
   \_/\_/ |_|_|\_\_|
</pre>
				<td width="35%" align="center"><a href="elinks.php">&#9760; ELINKS &#9760;</a></td>
				<td width="65%"> ~ Terminal Web-Browser</td>
			</tr>
			<tr>
				<td width="35%" align="center"><a href="#table1">&#9760; GIT &#9760;</a></td>
				<td width="65%"> ~ Code versioning</td>
			</tr>
			<tr>
				<td width="35%" align="center"><a href="#table1">&#9760; LINUX COMMANDS &#9760;</a></td>
				<td width="65%"> ~ Useful Commands</td>
			</tr>
			<tr>
				<td width="35%" align="center"><a href="#table1">&#9760; METASPLOIT &#9760;</a></td>
				<td width="65%"> ~ Pentesting Framework</td>
			</tr>
			<tr>
				<td width="35%" align="center"><a href="#table1">&#9760; TMUX &#9760;</a></td>
				<td width="65%"> ~ Terminal Multiplexer</td>
			</tr>
			<tr>
				<td width="35%" align="center"><a href="#table1">&#9760; VIM &#9760;</a></td>
				<td width="65%"> ~ Multi-tools Text-editor</td>
			</tr>
		</table>
<?php include("minichat.php"); ?>
		<footer>
			<h1>&copy;totor2016</h1>
		</footer>

	</main>


</body>
</html>
