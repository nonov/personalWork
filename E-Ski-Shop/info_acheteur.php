<?php 
	session_start();
	$errorMessage = '';
	if(isset($_POST['submit'])) {	
		require_once("db_connexion.php");

		extract($_POST);
		$sql = $handler->query("INSERT INTO members(`lastname`,`firstname`,`address`,`phone`,`city`,`zip_code`) VALUES ('$lastname','$firstname','$address','$phone','$city','zip_code') ");
		echo '<script type="text/javascript">window.location="payement.php";</script>';
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
			<form name="connection" action="info_acheteur.php" method="POST" id="formID">
				<h1>Informations de livraison</h1>
				<div><input type="text" name="lastname" placeholder="Nom" required = "true"></input></div>
				<div><input type="text" name="firstname" placeholder="Prénom" required = "true"></input></div>
      			<div><input type="text" name="address" placeholder="Adresse de livraison" required = "true"></input></div>
      			<div><input type="text" name="city" placeholder="Ville" required = "true"></input></div>
      			<div><input type="text" name="zip_code" placeholder="Code postal" required = "true"></input></div>
      			<div><input type="text" name="phone" placeholder="Téléphone" required = "true"></input></div>
          		<div><input class="btn-pa" type="submit" name="submit" value="Payement -->"></div>	
          		<div id="errorMessage" style="display:none; color:red;">Merci de remplir le formulaire en entier!</div>
          	</form>
		</section>
   
		<?php include('includes/footer.php'); ?>
		<script type="text/javascript" src="js/js.js"></script>
	</body>
</html>