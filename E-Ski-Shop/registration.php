<?php
	session_start();
	$errorMessage = '';
	if(isset($_POST['submit'])) {	
		require_once("db_connexion.php");

		extract($_POST);
		$username = strip_tags($username);
		$password1 = strip_tags($password1);
		$password2 = strip_tags($password2);
		$email = strip_tags($email);

		if ($password1 == $password2) {
			$sql = $handler->query("SELECT * FROM members WHERE username = '$username' OR email = '$email' ");
			$result = $sql->rowCount();
			if($result > 0) {
				$errorMessage = 'Cet utilisateur existe déjà !';
			} else {
				$pass = md5($password1);
				$sql = $handler->query("INSERT INTO members(`username`,`password`,`email`) VALUES ('$username','$pass','$email') ");
				echo '<script type="text/javascript">window.location="connexion.php";</script>';
				exit();
			}
		} else {
			$errorMessage = 'Les mots de passe ne correspondent pas ! ';
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
			<form name="connection" action="registration.php" method="post" id="formID">
				<h1>Inscription</h1>
				<div><input type="text" name="username" placeholder="Pseudo" required = "true"></div>
				<div><input type="password" name="password1" placeholder="Mot de passe" required = "true"></div>
				<div><input type="password" name="password2" placeholder="Confirmer" required = "true"></div>
      			<div><input type="email" name="email" placeholder="E-mail" required = "true"></div>
          		<div><input class="btn-pa" href="login.php" type="submit" name="submit" value="Inscription"></div>
          		<div><p style="color:red;"><?php echo $errorMessage; ?></p></div>
          		<p id="errorMessage" style="display:none; color:red;">Merci de remplir le formulaire en entier!</p>
          	</form>
		</section>
					
		<?php include('includes/footer.php'); ?>
		<script type="text/javascript" src="js/js.js"></script>
	</body>
</html>