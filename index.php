<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>&#9760;t0t0r&#9760;</title>
	</head>
	<body bgcolor="black"> 

<header>
			<h1 style="color:crimson;text-align:center;">
			<code>	<pre>


  _        _                            _ _    _ 
 | |      | |                          (_) |  (_)
 | |_ ___ | |_ ___  _ __      __      ___| | ___ 
 | __/ _ \| __/ _ \| '__|     \ \ /\ / / | |/ / |
 | || (_) | || (_) | |     _   \ V  V /| |   <| |
  \__\___/ \__\___/|_|    (_)   \_/\_/ |_|_|\_\_|



</pre>
</code>
</h1>
</header>

<?php
// Le password n'a pas ete envoye
if (!isset($_POST['password'])) {
echo '
<form style="text-align:center;" action="index.php" method="post">
	<label for="password">Enter your password</label>
	<input type="password" name="password"/>
	<input type="submit" name="send" value="Log In"/>
	</form>';
 
}
// Le password est le bon. Redirection
elseif ((isset($_POST['password']) AND $_POST['password'] === "totor")) {
	header('Location: home.php');
	exit();
}
// Le password envoye n'est pas le bon
else {	
	echo '
<form style="text-align:center;" action="index.php" method="post">
	<label for="password">Enter your password</label>
	<input type="password" name="password" value=""/>
	<input type="submit" name="send" value="Log In"/>
	</form>';
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
?>
</body>
</html>
