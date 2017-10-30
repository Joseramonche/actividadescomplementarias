<?php 

	$con = 'mysql:dbname=complementarias;host=localhost';
	$user = 'che';
	$password = 'jose1718';

	try {
		$pdo = new PDO($con,$user,$password);
	} catch (Exception $e) {
		echo 'Error al conectarnos' .$e->getMessage();
	}
	
 ?>
