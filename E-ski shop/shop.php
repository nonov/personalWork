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
  				--><li><a id="top1" href="shop.html">shop </a></li><!--
  				--><li><a class="top" href="contact.php">a propos </a></li><!--
 				--><li><a class="top" href="localisation.html">localisation </a></li>
			</ul>		
		</div>	

		<div id="shop">
			<div class="caracimg">
				<img src="images/blackcrows.png" alt="Blackcrows" />
			</div>
			
			<div class="carac">
				<h1> BLACK CROWS VIATOR </h1>
				
				
				<form name="input" action="shop.php" method="post">
					<p>TAILLE :
 	 				<select>
 	 					<option> Choisissez une taille </option>
    					<option name="size" value="1m68"> 1m68</option>
   						<option name="size" value="1m75"> 1m75</option>
    					<option name="size" value="1m80"> 1m80</option>
    				</select>
  					</p>
  					
  					<p>QUANTITE :
  					<select>
 	 					<option> Choisissez une quantité </option>
    					<option name="quantite" value="1"> 1</option>
   						<option name="quantite" value="2"> 2</option>
    					<option name="quantite" value="3"> 3</option>
    				</select>
  					</p>
					
					<input class="btn-pa" type="submit" value="Ajouter au panier" href="panier.php">
				</form>
 	 		
  				<table>
  					<tr>
   			 			<th>Prix</th> <th>Disponibilité</th>
  					</tr>
  					<tr>
   	 					<td>425€</td> <td>Disponible</td>
  					</tr>
				</table>
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


		
		<!--<div id="shop1">
			<div class="caracimg 1">
				<img src="images/blackcrows.png" alt="Blackcrows" />
			</div>
			
			<div class="carac">
				<h1> BLACK CROWS VIATOR </h1>
				
				<p>TAILLE :
 	 				<select>
 	 					<option> Choisissez une taille </option>
    					<option name="size" value="1m68"> 1m68</option>
   						<option name="size" value="1m75"> 1m75</option>
    					<option name="size" value="1m80"> 1m80</option>
    				</select>
  				</p>
  				
  				<p>QUANTITE :
  					<select>
 	 					<option> Choisissez une quantité </option>
    					<option name="quantite" value="1"> 1</option>
   						<option name="quantite" value="2"> 2</option>
    					<option name="quantite" value="3"> 3</option>
    				</select>
  				</p>
 	 		
  				<table>
  					<tr>
   			 			<th>Prix</th> <th>Disponibilité</th>
  					</tr>
  					<tr>
   	 					<td>425€</td> <td>Disponible</td>
  					</tr>
				</table>
			</div>
				<a class="btn-pa" href="panier.html"> Ajouter au panier </a>
		</div>
		
		<div id="shop2">
			<div class="caracimg 2">
				<img src="images/atomic.png" alt="Atomic" />
			</div>
			
			<div class="carac">
				<h1> ATOMIC BENT CHETLER </h1>
						
				<p>TAILLE :
 	 				<select>
 	 					<option> Choisissez une taille </option>
    					<option name="size1" value="1m58"> 1m58</option>
   						<option name="size1" value="1m65"> 1m65</option>
    					<option name="size1" value="1m80"> 1m80</option>
    				</select>
  				</p>
  				
  				<p>QUANTITE :
  					<select>
 	 					<option> Choisissez une quantité </option>
    					<option name="quantite1" value="1"> 1</option>
   						<option name="quantite1" value="2"> 2</option>
    					<option name="quantite1" value="3"> 3</option>
    				</select>
  				</p>
  		
  				<table>
  					<tr>
   			 			<th>Prix</th> <th>Disponibilité</th>
  					</tr>
  					<tr>
   	 					<td>579€</td> <td>Disponible</td>
  					</tr>
				</table> 
			</div>
				<a class="btn-pa" href="panier.html"> Ajouter au panier </a>
		</div>
		
		<div id="shop3">
			<div class="caracimg 3">
				<img src="images/correupt.png" alt="Correupt" />
			</div>
			
			<div class="carac">
				<h1> CORREUPT TJ SHILLER </h1>
				
				<p>TAILLE :
 	 				<select>
 	 					<option> Choisissez une taille </option>
    					<option name="size2" value="1m52"> 1m52</option>
   						<option name="size2" value="1m62"> 1m62</option>
    					<option name="size2" value="1m78"> 1m78</option>
    				</select>
  				</p>
  				
  				<p>QUANTITE :
  					<select>
 	 					<option> Choisissez une quantité </option>
    					<option name="quantite2" value="1"> 1</option>
   						<option name="quantite2" value="2"> 2</option>
    					<option name="quantite2" value="3"> 3</option>
    				</select>
  				</p>
  				  				
  				<table>
  					<tr>
   			 			<th>Prix</th> <th>Disponibilité</th>
  					</tr>
  					<tr>
   	 					<td>514€</td> <td>Disponible</td>
  					</tr>
				</table> 
			</div>
				<a class="btn-pa" href="panier.html"> Ajouter au panier </a>
		</div>
		
		<div id="shop4">
			<div class="caracimg 4">
				<img src="images/blackdiamond.png" alt="Black Diamond" />
			</div>	
		
			<div class="carac">			
				<h1> BLACK DIAMOND VERDICT </h1>
  				
  				<p>TAILLE :
 	 				<select>
 	 					<option> Choisissez une taille </option>
    					<option name="size3" value="1m56"> 1m56</option>
   						<option name="size3" value="1m69"> 1m69</option>
    					<option name="size3" value="1m80"> 1m80</option>
    				</select>
  				</p>
  				
  				<p>QUANTITE :
  					<select>
 	 					<option> Choisissez une quantité </option>
    					<option name="quantite3" value="1"> 1</option>
   						<option name="quantite3" value="2"> 2</option>
    					<option name="quantite3" value="3"> 3</option>
    				</select>
  				</p>
  		
  				<table>
  					<tr>
   			 			<th>Prix</th> <th>Disponibilité</th>
  					</tr>
  					<tr>
   	 					<td>389€</td> <td>Disponible</td>
  					</tr>
				</table> 
			</div>
				<a class="btn-pa" href="panier.html"> Ajouter au panier </a>
		</div>
		
		<div id="shop5">
			<div class="caracimg 5">
				<img src="images/faction.png" alt="Faction" />
			</div>	
			
			<div class="carac">
				<h1> FACTION AGENT 100 </h1>
				
 	 			<p>TAILLE :
 	 				<select>
 	 					<option> Choisissez une taille </option>
    					<option name="size4" value="1m58"> 1m58</option>
   						<option name="size4" value="1m65"> 1m65</option>
    					<option name="size4" value="1m80"> 1m80</option>
    				</select>
  				</p>
  				
  				<p>QUANTITE :
  					<select>
 	 					<option> Choisissez une quantité </option>
    					<option name="quantite4" value="1"> 1</option>
   						<option name="quantite4" value="2"> 2</option>
    					<option name="quantite4" value="3"> 3</option>
    				</select>
  				</p>
  				
  				<table>
  					<tr>
   			 			<th>Prix</th> <th>Disponibilité</th>
  					</tr>
  					<tr>
   	 					<td>599€</td> <td>Disponible</td>
  					</tr>
				</table> 
			</div>
			<a class="btn-pa" href="panier.html"> Ajouter au panier </a>
		</div><!--
      	

