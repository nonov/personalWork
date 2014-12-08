<?php 
	require("db_connexion.php");

	$username = $_POST['username'];
	$password = $_POST['pwd'];
	
	$sql = $handler->query(" SELECT * FROM members WHERE username = '$username' AND password = '$password' ");
	$result = $sql->rowCount();

	if($result > 0) {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header('Location: staff_home.html');
		exit;
	} else {
		echo 'Mauvais login/password !';
	}

?><!doctype html> 
<html>
	<?php include 'includes/head.php'; ?>
	<body>
		<div>
			<h1>Login</h1>
			<form action="includes/login.php" method="POST">
				<?php
              		if(!empty($errorMessage)) {
            			echo '<p>', htmlspecialchars($errorMessage) ,'</p>';
          			}
        		?>
    			<label>Login : </label><input id="login" type="text" name="login" placeholder="Login" required></p>
   				<label>Password : </label><input id="pwd" type="password" name="pwd" placeholder="Password" required></p>
 				<input type="submit" name="submit" value="Connexion" />
  	  		</form>
		</div>
	</body>
</html>
