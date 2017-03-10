<?php 

	try {
		$bdd = new PDO('mysql:host=localhost;dbname=mysql_equi', 'root', 'root');
	}
	catch (PDOException $e){
		echo "Echec de connexion: " . $e->getMessage();
	}