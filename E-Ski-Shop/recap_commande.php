<?php
	session_start();
	$errorMessage = '';
	require_once("db_connexion.php");
	$sql = $handler->query("SELECT * FROM panier");
	$stmt = $handler->query("SELECT lastname, firstname, address, phone, city, zip_code FROM members");

	if(isset($_POST['valider'])) {
		echo '<script type="text/javascript">window.location="info_acheteur.php";</script>';
	}
?><!DOCTYPE html>
<html lang="fr">
	<?php include('includes/head.php'); ?>
	
	<body>
		<?php include('includes/header.php'); ?>
		
		<!-- ///////// MENU NAVIGATION ////////-->
		<div id="haut">		
			<ul>
  				<li><a id="top" href="index.php">accueil </a></li><!--
  				--><li><a class="top1" href="shop.php">shop </a></li><!--
  				--><li><a class="top" href="contact.php">a propos </a></li><!--
 				--><li><a class="top" href="localisation.php">localisation </a></li>
			</ul>		
		</div>
		
		<section>
			<h1> Récapitulatif de la commande </h1>
				<table> 
					<tr> 
						<th> Référence </th> 
						<th> Quantité </th> 
						<th> Taille </th> 
        	    	</tr> 
					<?php 
						while ($row = $sql->fetch(PDO::FETCH_NUM)) {
					?> 
					<tr>
						<td><?php echo $row[1];?></td> 
						<td><?php echo $row[2];?></td>
						<td><?php echo $row[3];?></td>
					</tr> 
					<?php 
						} 
					?> 
				</table>
				<table> 
					<tr> 
						<th> Nom </th>
						<th> Prénom </th>  
						<th> Adresse de livraison </th> 
						<th> Code Postal </th> 
						<th> Ville </th>
						<th> Téléphone </th> 
        	    	</tr> 
					<?php 
						while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
					?>
					<tr>
						<td><?php echo $row[0];?></td> 
						<td><?php echo $row[1];?></td>
						<td><?php echo $row[2];?></td>
						<td><?php echo $row[5];?></td>
						<td><?php echo $row[4];?></td>
						<td><?php echo $row[3];?></td>
					</tr> 
					<?php 
						} 
					?> 
				</table>
		</section>	
		
		<?php include('includes/footer.php'); ?>
	</body>
</html>
