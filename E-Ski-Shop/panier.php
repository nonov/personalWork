<?php
    session_start();
    $errorMessage = '';
    require_once("db_connexion.php");
    $sql = $handler->query("SELECT * FROM panier");
    // si id a ete poste : 
    $id = intval(mysql_real_escape_string(($_POST['id'])));  
    if(isset($_POST['suppr']) && $_POST['suppr']!='') { 
        $stmt = $handler->query("DELETE FROM panier WHERE id = '$id'"); 
        echo "<script>window.location.replace(\"panier.php\")</script>";
    }

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
            <form name="connection" method="post" action="panier.php">
                <table> 
                    <tr> 
                        <th> Référence </th> 
                        <th> Quantité </th> 
                        <th> Taille </th> 
                        <th> Prix </th>
                        <th> Supprimer </th> 
                    </tr> 
                    <?php 
                        while ($row = $sql->fetch(PDO::FETCH_NUM)) {
                    ?> 
                    <tr>
                        <td><?php echo $row[1];?></td> 
                        <td><?php echo $row[2];?></td>
                        <td><?php echo $row[3];?></td>
                        <td><?php echo $row[4];?></td>
                        <td> 
                            <form method="post" action="panier.php"> 
                                <input type="hidden" name="id" value="<?php echo $row[0];?>" /> 
                                <input type="submit" name="suppr" value="X" /> 
                            </form> 
                        </td> 
                    </tr> 
                    <?php 
                        } 
                    ?> 
                    <tr>
                        <?php 
                            $total = $handler->query("SELECT sum(price) FROM panier"); 
                            $row = $total->fetch(PDO::FETCH_NUM);
                        ?> 
                        <th> Total: <?php echo $row[0]; ?></th>
                    </tr>
                </table>
                <input class="btn-pa" type="submit" name="valider" value="Valider le panier">
            </form>
        </section>  
        
        <?php include('includes/footer.php'); ?>
    </body>
</html>