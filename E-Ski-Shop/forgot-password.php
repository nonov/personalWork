<?php 
    $errorMessage = 'page en maintenance !';
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
            <form name="connection" action="forgot-password.php" method="POST" id="formID">
                <h1>Mot de passe oublié</h1>
                <div><input type="text" name="email" placeholder="Email" required = "true"></input></div>
                <div><input type="text" name="login" placeholder="Login" required = "true"></input></div>
                <div><input class="btn-pa" type="submit" name="submit" value="Récupération par mail"></div>  
                <div style="color:red;"><?php echo $errorMessage; ?></div>
                <div id="errorMessage" style="display:none; color:red;">Merci de remplir le formulaire en entier!</div>
            </form>
        </section>
   
        <?php include('includes/footer.php'); ?>
    <script type="text/javascript" src="js/js.js"></script>
    </body>
</html>