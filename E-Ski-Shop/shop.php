<?php
	session_start();
	$errorMessage = '';
	require_once("db_connexion.php");

	extract($_POST);

	$query = $handler->query("SELECT * FROM articles");

	if(isset($_POST['submit'])) {
		$stock = $handler->query("UPDATE articles SET quantity = quantity - '$quantity'  WHERE ref = '$ref'");
		$sql = $handler->query("INSERT INTO panier(`ref`,`quantity`,`size`,`price`,`image`) VALUES ('$ref','$quantity','$size','$price','$img')");
		$errorMessage = 'Article ajouté au panier';
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
  				--><li><a id="top1" href="shop.php">shop </a></li><!--
  				--><li><a class="top" href="contact.php">a propos </a></li><!--
 				--><li><a class="top" href="localisation.php">localisation </a></li>
			</ul>		
		</div>	

	<?php while ($row = $query->fetch(PDO::FETCH_NUM)) { ?>
	<section>
		<article>
			<?php 
				if($_SESSION['login'] == 'admin') {
					echo "<a id=\"delete_cross\" href=\"#\" onclick=\"deleteOnClick()\"> X </a>";
				}
			?>
			<!-- ARTICLES -->
			<img src="<?php echo $row[4]; ?>" alt="<?php echo $row[1]; ?>" />
			
			<form name="input" action="shop.php" method="post">

				<input type="hidden" name="ref" value="<?php echo $row[1]; ?>">
				<input type="hidden" name="price" value="<?php echo $row[3]; ?>">
				<h1><?php echo $row[1]; ?></h1>				
				<p>TAILLE :
	 	 			<select name="size">
	 	 				<optgroup label="Choisissez une taille">
	    					<option value="1m68"> 1m68</option>
	   						<option value="1m75"> 1m75</option>
	    					<option value="1m80"> 1m80</option>
	    				</optgroup>
	    			</select>
	  			</p>
	  					
	  			<p>QUANTITE :
	  				<select name="quantity">
	  					<optgroup label="Choisissez une quantité">
	    					<option value="1"> 1</option>
	   						<option value="2"> 2</option>
							<option value="3"> 3</option>
	    				</optgroup>
	    			</select>
	  			</p>

	  			<p> RESTE : <?php echo $row[2]; ?> articles.</p>

	  			<p>PRIX :
	  				<?php echo $row[3]; ?> €
	  			</p>
				<input class="btn-pa" type="submit" name="submit" value="Ajouter au panier">
			</form>
		</article>
		<?php } ?>
	</section>
	
	<?php include('includes/footer.php'); ?>
	</body>
</html>