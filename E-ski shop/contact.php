<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title> E-Ski Shop </title>
		<link rel="stylesheet" href="css.css" />
		<link rel="stylesheet" media="only screen and (max-width:1100px)" href="max-width.css" />
	</head>
	
	<body>
		<!-- ///////// LOGO ////////-->
		<header>
				<div id="connection">
					<ul>
						<li><a href="connection.html"> Se connecter </a></li>
					</ul>
				</div>
			
				<div id="inscription">
					<ul>
						<li><a href="inscription.html"> S'inscrire </a></li>
					</ul>
				</div>
		</header>
		
		<div id="logo">	
			<img src="images/ski.png" alt="e-Ski Shop" />
		</div>
		
		<!-- ///////// MENU NAVIGATION ////////-->
		<div id="haut">		
			<ul>
  				<li><a class="top" href="index.html">accueil </a></li><!--
  				--><li><a class="top" href="shop.html">shop </a></li><!--
  				--><li><a id="top1" href="contact.php">a propos </a></li><!--
 				--><li><a class="top" href="localisation.html">localisation </a></li>
			</ul>		
		</div>	
		
		<form method="POST" action="contact.php">

		<div class="form">
			<p><label>Nom: <input name="name" required></label></p>
      		<p><label>Prénom: <input name="surname" required></label></p>
      		<p><label>E-mail: <input name="email" required></label></p>
      		<p><lable>Message: <input name="email" required></label></p>
      	</div>
		<div><button>Envoyer</button></div>
		</form>
		
		<?php $passage_ligne = "\r\n"; 
			$boundary = "-----=".md5(rand()); 
			$mail = 'noe.viricel@etu.univ-lyon1.fr'; 
			$sujet = "[E-Ski Shop newsletter]"; 
			$header = "From: \"" . $_POST['name'] . "\" <" . $_POST['email'] . ">".$passage_ligne; 
			$header .= "Reply-to: \"" . $_POST['name'] . "\" <" . $_POST['email'] . ">".$passage_ligne; 
			$header .= "MIME-Version: 1.0".$passage_ligne; 
			$header .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"" . $boundary . "\"".$passage_ligne;
			$message = $passage_ligne."--".$boundary.$passage_ligne; 
			$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
			$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
			$message.= $passage_ligne.$_POST['message'].$passage_ligne;
			$message.= $passage_ligne."--".$boundary."--".$passage_ligne; 
	
				//=====Envoi de l'e-mail. 

			mail($mail,$sujet,$message,$header); 

			header('Location: contact.php'); 
		?>
		
		<!-- ///////// SOUS MENU NAVIGATION ////////-->			
			<div id="soushaut">
				<div id="yann">
					<a class="top" href="yann.html"> <img class="perso" src="images/yann.jpg" alt="Yann Verneau" /></a>
				</div>
				
				<div id="noe">
					<a class="top" href="noe.html"> <img class="perso" src="images/noe.jpg" alt="Noe Viricel" /></a>
				</div>
			</div>
	

		
		
		<div id="bas">
			<div id="gauche">
				<!-- ///////// IMAGE BAS GAUCHE ////////-->
				<img id="ski" src="images/skis.png" alt="Skis" />
		
				<!-- ///////// MENU BAS GAUCHE ////////-->
				<ul>				
					<li><a class="bottom" href="index.html">accueil </a> <img id="skieur" src="images/skieur.png" alt="Skieur" /></li>
					<li><a class="bottom" href="shop.html">shop </a> <img id="skieur" src="images/skieur.png" alt="Skieur" /></li>
					<li><a class="bottom" href="contact.html">contact </a> <img id="skieur" src="images/skieur.png" alt="Skieur" /></li>
					<li><a class="bottom" href="localisation.html">localisation </a> <img id="skieur" src="images/skieur.png" alt="Skieur" /></li>
				</ul>
			</div><!--
		
			///////// MENU BAS CENTRE ////////
	 	 --><div id="milieu">
				<a href="http://www.univ-lyon1.fr/" target="_blank" ><img id="lyon1" src="images/lyon1.png" alt="Lyon 1" /></a>
				<p>created by yann verneau & noé viricel</p>
				<p><strong>iut informatique - université lyon 1</strong></p>
			</div><!--
		
		 ///////// MENU BAS DROITE ////////
	 	 --><div id="droite">
				<a href="http://www.facebook.com/" target="_blank" ><img id="facebook" src="images/facebook.png" alt="Facebook" /></a>
				<a href="http://www.twitter.com/" target="_blank" ><img id="twitter" src="images/twitter.png" alt="Twitter" /></a>
				<a href="http://www.tumblr.com/" target="_blank" ><img id="tumblr" src="images/tumblr.png" alt="Tumblr" /></a>
				<a href="http://plus.google.com/" target="_blank" ><img id="google" src="images/google.png" alt="Google+" /></a>
			</div>
		</div>
	
	</body>
</html>