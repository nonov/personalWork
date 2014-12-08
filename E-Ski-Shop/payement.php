<?php 
	session_start();
	$errorMessage = '';
	if(isset($_POST['submit'])) {	
		echo '<script type="text/javascript">window.location="recap_commande.php";</script>';
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
			<form name="connection" action="payement.php" method="POST" id="formID">
				<h1>Payement</h1>
				<div><input type="text" name="card_name" placeholder="Détenteur de la carte" required = "true"></input></div>
				<div><input type="text" name="card_number" placeholder="Numéros de votre carte" required = "true"></input></div>
				<div><input type="text" name="expire_date" placeholder="Date d'expiration" required = "true"></input></div>
      			<div><input type="text" name="crypto" placeholder="Cryptogramme" required = "true"></input></div>
          		<div><input class="btn-pa" type="submit" name="submit" value="Payer"></div>	
          		<div id="errorMessage" style="display:none; color:red;">Merci de remplir le formulaire en entier!</div>
          	</form>
		</section>
   
		<?php include('includes/footer.php'); ?>
		<script type="text/javascript" src="js/js.js"></script>
	</body>
</html>