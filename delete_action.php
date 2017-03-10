<?php



if (is_numeric($_GET['id'])) {
    $id=$_GET['id'];
$query = $bdd->prepare("DELETE FROM articles WHERE id=?");
$query->execute(array($id));
$query->closeCursor();
header('location:index_art.php');

}
else{
	echo "id n'est pas un nombre";
	header('Refresh: 5;url=index_art.php');
}

/*
if (is_numeric($_GET['id'])) {
	include_once 'modele/connexion_bdd.php';
	$query = $bdd->prepare();
	$query->execute('DELETE FROM articles WHERE id =  ? ');
	$query->closeCursor();

	header('Location: index_art.php');
}
else{
	echo "id n'est pas un nombre";
	header('Refresh: 5;url=index_art.php');
}*/
