<?php 
	session_start();
	$errorMessage = '';
	if(isset($_POST['submit'])) {	
		require_once("db_connexion.php");
		
		extract($_POST);
		$pass = md5($pass);
		$sql = $handler->query("SELECT * FROM members WHERE username = '$login' AND password = '$pass' ");
		$result = $sql->fetch(PDO::FETCH_ASSOC);
		if($result > 0) {
			$email = $result['email'];
			$_SESSION = array('login' => $login, 'pass' => $pass, 'email' => $email);
			echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
		} else {
			$errorMessage = 'Mauvais login/password !';
		}
	}
?><!DOCTYPE html>
<html lang="fr">
	<?php include('includes/head.php'); ?>
	
	<body>
		<?php include('includes/header.php'); ?>
				
		<!-- ///////// MENU NAVIGATION ////////-->
		<div id="haut">		
			<ul>
  				<li><a id="top1" href="index.php">accueil </a></li><!--
  				--><li><a class="top" href="shop.php">shop </a></li><!--
  				--><li><a class="top" href="contact.php">a propos </a></li><!--
 				--><li><a class="top" href="localisation.php">localisation </a></li>
			</ul>		
		</div>		

		<section>	
			<form name="connection" action="connexion.php" method="POST" id="formID">
				<h1>Connection</h1>
				<div><input type="text" name="login" placeholder="Login" required = "true"></input></div>
      			<div><input type="password" name="pass" placeholder="Password" required = "true"></input></div>
          		<div><input class="btn-pa" type="submit" name="submit" value="Se connecter"></div>	
          		<div style="color:red;"><?php echo $errorMessage; ?></div>
          		<div id="errorMessage" style="display:none; color:red;">Merci de remplir le formulaire en entier!</div>
          		<div><a href="forgot-password.php"> Mot de passe oublié ?</a></div>
          	</form>
		</section>
		
   		<?php include('includes/footer.php'); ?>
		<script type="text/javascript" src="js/js.js"></script>
	</body>
</html>