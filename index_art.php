<?php

	include "includes/header_art.php";
	include_once 'modele/connexion_bdd.php';

$result = $bdd->query('SELECT * FROM articles ORDER BY id DESC');

?>
	
	<div class="container">
		<div class="row">
			<h1 class="center">Liste de tous les articles</h1>
		</div>
		<div class="row">
			<table class="centered highlight">
				<thead>
					<tr>
						<th>id</th>
						<th>Titre</th>
						<th>Contenu</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php while ($donnee = $result->fetch()) { ?>
					<tr>
						<td><?php echo $donnee['id']; ?></td>
						<td><?php echo $donnee['titre']; ?></td>
						<td><?php echo $donnee['contenu']; ?></td>
						<td><?php echo $donnee['date']; ?></td>
						<td>
							<a href="delete_action.php?id=<?php echo $donnee['id']; ?>">Delete</a>
							<a href="edit_article.php?id=<?php echo $donnee['id']; ?>">Edit</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="row center">
			<a href="add_article.php" class="waves-effect waves-light btn">Ajouter un article</a>	
		</div>
	</div>
		
<?php include 'includes/footer_art.php'; ?>