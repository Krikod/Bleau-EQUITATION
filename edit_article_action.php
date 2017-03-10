<?php

if (
	empty($_POST['titre']) ||
	empty($_POST['contenu']) ||
	empty($_POST['date'])
	){
	echo "Merci de remplir tous les champs";
}
else{
    if (is_numeric($_GET['id'])) {
        include_once 'modele/connexion_bdd.php';

    	$titre = htmlspecialchars($_POST['titre']);
    	$contenu = htmlspecialchars($_POST['contenu']);
    	$date = htmlspecialchars($_POST['date']);

    	$query = $bdd->prepare('UPDATE articles SET titre = :titre, contenu = :contenu, date = :date WHERE id = :id');
    	$query->execute(array(
    		':titre' => $titre,
    		':contenu' => $contenu,
    		':date' => $date,
    		':id' => $_GET['id']
    		));
    	$query->closeCursor();

    	header('Location: index_art.php');
    }
    else{
    	echo "id n'est pas un nombre";
    	header('Refresh: 5;url=index_art.php');
    }
}
