<?php
try {
	$handler = new PDO('mysql:host=localhost;dbname=eSkiShop', 'root', 'root');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
	die();
}

