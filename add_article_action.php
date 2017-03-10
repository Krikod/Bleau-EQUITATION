<?php

if (
	empty($_POST['titre']) || 
	empty($_POST['contenu']) || 
	empty($_POST['date'])
	){
	echo "Merci de remplir tous les champs";
}
else{
	include_once 'modele/connexion_bdd.php';

	$titre = htmlspecialchars($_POST['titre']);
	$contenu = htmlspecialchars($_POST['contenu']);
	$date = htmlspecialchars($_POST['date']);

	$query = $bdd->prepare('INSERT INTO articles (titre, contenu, date) VALUES (?, ?, ?)');
	$query->execute(array(
		$titre,
		$contenu,
		$date
		));
	$query->closeCursor();
}

header('Location: index_art.php');
