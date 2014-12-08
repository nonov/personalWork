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
  				<li><a class="top" href="index.php">accueil </a></li><!--
  				--><li><a class="top" href="shop.php">shop </a></li><!--
  				--><li><a class="top" href="contact.php">a propos </a></li><!--
 				--><li><a id="top1" href="localisation.php">localisation </a></li>
			</ul>		
		</div>	

		
		<section>
				<iframe id="map" style="width:100%; height:500px;" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=1+Rue+de+la+Technologie,+Villeurbanne&amp;aq=0&amp;oq=1+rue+de+la+techno&amp;sll=45.771758,4.889826&amp;sspn=0.085253,0.181789&amp;ie=UTF8&amp;hq=&amp;hnear=1+Rue+de+la+Technologie,+69100+Villeurbanne,+Rh%C3%B4ne,+Rh%C3%B4ne-Alpes&amp;t=m&amp;ll=45.785901,4.882221&amp;spn=0.02873,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
				<p><a class="btn-pa" href="https://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=1+Rue+de+la+Technologie,+Villeurbanne&amp;aq=0&amp;oq=1+rue+de+la+techno&amp;sll=45.771758,4.889826&amp;sspn=0.085253,0.181789&amp;ie=UTF8&amp;hq=&amp;hnear=1+Rue+de+la+Technologie,+69100+Villeurbanne,+Rh%C3%B4ne,+Rh%C3%B4ne-Alpes&amp;t=m&amp;ll=45.785901,4.882221&amp;spn=0.02873,0.054932&amp;z=14&amp;iwloc=A" target="_blank">Agrandir le plan</a></p>
		</section>
	
		<?php include('includes/footer.php'); ?>
		<script type="text/javascript" src="js/js.js"></script>
	</body>
</html>

