<?php include 'includes/header_art.php'; ?>

	<div class="container">
		<div class="row">
			<h1 class="center">Editer un article</h1>
		</div>
		<div class="row">
			<form class="col s12" action="edit_article_action.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<div class="row">
					<div class="input-field">
						<label for="titre">Titre</label>
						<input id="titre" type="text" name="titre" required="">
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<label for="contenu">Contenu</label>
						<input id="contenu" type="text" name="contenu">
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<label for="date">Date</label>
						<input id="date" type="date" name="date">
					</div>
				</div>
				<div class="row center">
					<input class="waves-effect waves-light btn" type="submit" value="Envoyer">
				</div>
			</form>
		</div>
	</div>

<?php include 'includes/footer_art.php'; ?>
