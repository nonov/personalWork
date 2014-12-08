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
  				<li><a id="top1" href="index.php">accueil </a></li><!--
  				--><li><a class="top" href="shop.php">shop </a></li><!--
  				--><li><a class="top1" href="contact.php">a propos </a></li><!--
 				--><li><a class="top" href="localisation.php">localisation </a></li>
			</ul>		
		</div>	

		<!-- ///////// SOUS MENU NAVIGATION ////////-->			
			<div id="soushaut">
				<div id="noe1">
					<a class="top1" href="noe.php"> <img class="perso" src="images/noe.jpg" alt="Noe Viricel" /></a>
				</div>
			</div>
		</div>
		
		<div id="center">
			<nav>
				<h1 id="titre">curriculum vitae</h1>
			
				<h2>informations personnelles</h2>	
					<p> <strong>nom :</strong> viricel</p>
					<p> <strong>prénom :</strong> noé</p>
					<p> <strong>adresse :</strong> 212 rue marechal leclerc 69390 CHARLY</p>
					<p> <strong>date de naissance :</strong> 16/04/1995</p>
					<p> <strong>mail :</strong> noe.viricel<span>@orange.fr</span></p>
				
				<h2>Education</h2>	
					<p> <strong>2013 – 2015</strong> --> DUT : Informatique</p>
						<p>Je suis actuellement en deuxième année de DUT, diplômé à la fin de cette année scolaire.</p>
					<p> <strong>2011 - 2013</strong> --> Baccalauréat : Sciences et Technologies pour le Développement Durable (STI2D)</p>
						<p>- Option: Systèmes d’Informations Numériques.</p>
						<p>- Mention BIEN.</p>
						<p>- Maths/Histoire/Physique-Chimie/Informatique/Mécanique.</p>
		
				<h2>expériences professionelles</h2>
					<p> <strong>Juillet – Août 2014</strong> --> Serveur/Plongeur/Aide en cuisine : La Vie En Rose Restaurant / SEIGNOSSE</p>
						<p>- Préparation de plats basiques.</p>
						<p>- Service et conseil des clients du restaurant.</p>
						<p> <strong>Compétences :</strong>Esprit d’équipe, travail sous pression, efficace.</p>
					<p> <strong>Juin – Juillet 2014</strong> --> Technicien LED : Skynight / VILLEURBANNE</p>
						<p>- Installation/configuration d’écran LED plein jour.</p>
						<p>- Diffusion live d’un plateau caméras.</p>
						<p> <strong>Compétences:</strong> Autonomie, self-control, faire face aux problèmes techniques.</p>
					<p> <strong>Août 2013</strong> --> Assistant technique : Alabama Media / NEUVILLE-SUR-SAÔNE</p>
						<p>- Assister un technicien vidéo.</p>
						<p>- Réparation de panneaux LED/ Câbles vidéo.</p>
					<p> <strong>Octobre 2012</strong> --> Vendeur : Floriane Horticulture / VERNAISON</p>
						<p>- Vente de fleurs sur un marché.</p>
						<p>- Préparation/gestion des stocks de fleurs.</p>
						<p> <strong>Compétences:</strong> Communiquer avec les clients avec une approche commerciale.</p>

		
				<h2>compétences</h2>
				
					<div id="informatique">
					
						<h3>informatique</h3>
							<p> <strong>Langages de programmation :</strong></p>
								<p>- HTML5 / CSS3: Capable de créer un site web complet avec des animations.</p>
								<p>- JavaScript: Quelques connaissances tout comme en jQuery.</p>
								<p>- PHP: Actuellement étudié, bonnes notions pour créer un site web dynamique.</p>
								<p>- SQL: Capable de gérer une petite base de données Oracle, niveau comparable en PL/SQL.</p>
								<p>- JAVA: Bon niveau, capable de créer une petite interface graphique Swing ainsi que des petits programmes.</p>
								<p>- C: Création de programmes basiques.</p>
							<p> <strong>Systèmes d’exploitation :</strong></p>
								<p>- MACOS</p>
								<p>- Windows</p>
								<p>- Linux</p> 
							<p> <strong>Logiciels :</strong></p>
								<p>- Suite Office</p>
								<p>- Suite iWorks</p>
							<p> <strong>Langues parlées ou comprises :</strong></p>
								<p>- Anglais: Couramment parlé et écrit.</p>
								<p>- Espagnol: connaissance des bases.</p>
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

