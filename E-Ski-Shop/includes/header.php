<?php
	session_start();
?><header>
	<div>
		<ul>
			<li><a href="connexion.php"> Se connecter </a></li>
			<li><a href="registration.php"> S'inscrire </a></li>
		</ul>
	</div>
	<div id="connexion_head">
		<ul>
			<?php 
				if($_SESSION['login'] == 'admin') {
					echo "<li><a href=\"add_articles_admin.php\"> Ajout d'articles </a></li>"; 
				}
			?>
			<li><a href="panier.php"> Mon panier </a></li>
			<li><a> <?php echo 'Bonjour '.$_SESSION['login']; ?></a></li>
			<li><a href="logout.php"> Déconnexion </a></li>
		</ul>
	</div>
</header>
<div id="logo">	
			<img src="images/ski.png" alt="e-Ski Shop" />
</div>