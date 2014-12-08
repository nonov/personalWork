<?php
	session_start();
	$errorMessage = '';
	// S'il y des données de postées

	if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['subject'])) {

			$to = 'noe.viricel@orange.fr'; 
			$subject = $_POST['subject'];
			$body = $_POST['message'];
			$headers = 'From: '.$_POST['email']."\r\n".'Reply-To: noe.viricel@orange.fr'."\r\n".'X-Mailer: PHP/'.phpversion();
			
			if (mail($to, $subject, $body, $headers)) {
				$errorMessage = 'Message envoyé ! ';
			} else {
				echo 'Erreur, message non envoyé ! ';
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
  				<li><a class="top" href="index.php">accueil </a></li><!--
  				--><li><a class="top" href="shop.php">shop </a></li><!--
  				--><li><a id="top1" href="contact.php">a propos </a></li><!--
 				--><li><a class="top" href="localisation.php">localisation </a></li>
			</ul>		
		</div>	
		
		<!-- ///////// SOUS MENU NAVIGATION ////////-->			
		<article>
			<div id="noe">
		 		<a href="noe.php"><img class="perso" src="images/noe.jpg" alt="Noe Viricel" /></a>
			</div>
		</article>

		<section>	
			<form name="connection" method="post" action="" id="formID">
      			<div><input type="text" name="nom" value="<?php echo $_SESSION['login']; ?>" placeholder="Pseudo" required></input></div>
      			<div><input type="text" name="email" placeholder="Entrez votre email" value="<?php echo $_SESSION['email']; ?>" required></input></div>
      			<div><input type="text" name="subject" value="" placeholder="Sujet" required></input></div>
      			<div><textarea name="message" placeholder="Parlez-nous !" cols="75" rows="10" required></textarea></div>
   		 		<div><input class="btn-pa" type="submit" name="submit" value="Envoyer"></div>
   		 		<div style="color:red;"><?php echo $errorMessage;?></div>
          		<div id="errorMessage" style="display:none; color:red;">Merci de remplir le formulaire en entier!</div>
    		</form>
    	</section> 
		
		<?php include('includes/footer.php'); ?>
		<script type="text/javascript" src="js/js.js"></script>
	</body>
</html>