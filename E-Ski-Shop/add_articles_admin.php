<?php
	session_start();
	$errorMessage = '';
	if(empty($_SESSION['login'])) {
		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
	}

	if(isset($_POST['submit'])) {
		require_once("db_connexion.php");
		extract($_POST);
		// Met les références en majuscules 
		$ref = strtoupper($ref);

		// Test si l'article existe déjà dans la base 
		$test = $handler->query("SELECT * FROM articles WHERE ref = '$ref' AND price = $price ");
		$count = $test->fetch(PDO::FETCH_NUM);
		if($count > 0) {
			$quantity = $count[2] + $quantity;
			$sql = $handler->query("UPDATE articles SET quantity = $quantity WHERE ref = '$ref'");
			$errorMessage = " Article ajouté !";
		} else {
			$img = 'images/'.$_POST['img'];
			$sql = $handler->query("INSERT INTO articles(`ref`,`quantity`,`price`,`image`) VALUES ('$ref','$quantity','$price','$img')");
			$errorMessage = " Article ajouté !";
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
  				<li><a id="top1" href="index.php">accueil </a></li><!--
  				--><li><a class="top" href="shop.php">shop </a></li><!--
  				--><li><a class="top" href="contact.php">a propos </a></li><!--
 				--><li><a class="top" href="localisation.php">localisation </a></li>
			</ul>		
		</div>

		<section>	
			<form name="connection" action="add_articles_admin.php" method="post" id="formID">
				<h1>Ajout d'un article</h1>
				<div><input type="text" name="ref" placeholder="Référence article" required = "true"></div>
				<div><input type="text" name="quantity" placeholder="Quantité" required = "true"></div>
				<div><input type="text" name="price" placeholder="Prix" required = "true"></div>
      			<div><input type="file" accept="image/*" name="img" placeholder="Image link" required = "true"></div>
          		<div><input class="btn-pa" type="submit" name="submit" value="Ajouter"></div>
          		<div><p style="color:red;"><?php echo $errorMessage; ?></p></div>
          		<p id="errorMessage" style="display:none; color:red;">Merci de remplir le formulaire en entier!</p>
          	</form>
		</section>
					
		<?php include('includes/footer.php'); ?>
		<script type="text/javascript" src="js/js.js"></script>
	</body>
</html>