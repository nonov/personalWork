<?php
	function(login) {
		// on définit une durée de vie de notre cookie (en secondes), donc un jour dans notre cas
		$temps = 24*3600;

		// on envoie un cookie de nom pseudo portant la valeur LA GLOBULE
		setcookie ("session_log", $_SESSION['login'], time() + $temps);
		
?>