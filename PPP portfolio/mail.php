<?php $passage_ligne = "\r\n"; 
$boundary = "-----=".md5(rand()); 
$mail = 'nono.viricel@gmail.com'; 
$sujet = "[Contact PPP] " . $_POST['name'] ; 
$header = "From: \"" . $_POST['name'] . "\" <" . $_POST['email'] . ">".$passage_ligne; 
$header .= "Reply-to: \"" . $_POST['name'] . "\" <" . $_POST['email'] . ">".$passage_ligne; 
$header .= "MIME-Version: 1.0".$passage_ligne; 
$header .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"" . $boundary . "\"".$passage_ligne;
$message = $passage_ligne."--".$boundary.$passage_ligne; 
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$_POST['message'].$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne; 

//=====Envoi de l'e-mail. 

mail($mail,$sujet,$message,$header); 

header('Location: index.html'); ?>