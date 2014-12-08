<?php
	session_start();
?><!DOCTYPE html>
<html lang="fr">
	<?php include('includes/head.php'); ?>
	
	<body>
		<?php include('includes/header.php'); ?>
		
		<!-- ///////// MENU NAVIGATION ////////-->
		<div id="haut">		
			<ul>
  				<li><a id="top" href="index.php">accueil </a></li><!--
  				--><li><a class="top" href="shop.php">shop </a></li><!--
  				--><li><a class="top1" href="contact.php">a propos </a></li><!--
 				--><li><a class="top" href="localisation.php">localisation </a></li>
			</ul>		
		</div>	

		<!-- ///////// SOUS MENU NAVIGATION ////////-->			
		<div id="soushaut">
			<div id="yann1">
				<a class="top1" href="yann.php"> <img class="perso" src="images/yann.jpg" alt="Yann Verneau" /></a>
			</div>
				
			<div id="noe">
				<a class="top" href="noe.php"> <img class="perso" src="images/noe.jpg" alt="Noe Viricel" /></a>
			</div>
		</div><!--
			
		--><div id="center">	
			<nav>		
				<h1 id="titre">curriculum vitae</h1>
					
				<h2>informations personnelles</h2>	
					<p> <strong>nom :</strong> verneau</p>
					<p> <strong>prénom :</strong> yann</p>
					<p> <strong>adresse :</strong> 78B chemin du béard 69390 CHARLY</p>
					<p> <strong>date de naissance :</strong> 24/09/1995</p>
					<p> <strong>mail :</strong> yann.verneau<span>@hotmail.fr</span></p>

				<h2>formations</h2>	
					<p> <strong>2006 - 2010 :</strong> brevet mention assez bien, collège louis querbes</p>
					<p> <strong>2011 - 2013 :</strong> bac STI2D mention bien, lycée edouard branly</p>
					<p> <strong>2013 - maintenant : </strong> IUT informatique, université lyon 1</p>
		
				<h2>expériences professionelles</h2>
					<p> <strong>juillet 2010 :</strong> stage chez AUTOSUR centre de contrôle technique automobile</p>
					<p> <strong>juillet 2011 :</strong> travaux dans le bâtiment isolation extérieur </p>
					<p> <strong>août 2013 :</strong> job piscine municipale </p>
		
				<h2>compétences</h2>
					
					<div id="informatique">
					
						<h3>informatique</h3>
							<p> HTML et CSS</p>
							<p> programmation C </p>
							<p>base de donnée SQL</p>
							<p> word, excel, power point</p>
					</div>
				
					<div id="autre">
					
						<h3>autre</h3>
							<p> permis de conduire</p>
					</div>
				</nav>
			</div>
		
		<?php include('includes/footer.php'); ?>
	</body>
</html>