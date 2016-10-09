<?php include("header.php"); ?>

<?php
if(htmlspecialchars($_GET['type']) == '') {
?>
			    <form width="100%" action="access.php" method="post">
				<label for="password">Enter your password</label>
				  <input type="password" name="password" value=""/>
					<input type="submit" name="send" value="Log In"/>
					    </form>
<?php
}
?>

<?php
if(htmlspecialchars($_GET['type']) == 'passerror') {
	echo '
<div style="color:red;text-align:center;"><pre> 
Maybe you were not invited here ...... Go Away !
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
}
if(htmlspecialchars($_GET['type']) == 'validate') {
	echo '<h2>Well done!</h2>';
}
?>

</body>
</html>
