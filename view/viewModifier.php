<div id="wrapper-home">
	<h2>Modifier un Billet</h2>
		<form method="POST" action="<?= "index.php?action=modifier&id=" . $billet['id']?>" id="modifier_form">
			<input type="text" name="titre" value="<?= $billet['titre'] ?>" /><br/>
			<input type="text" name="contenus" value="<?= $billet['contenu'] ?>" /><br/>
			<textarea id="editable" rows="4" cols="20" name="contenus" form="creer_form"><?= $billet['contenu'] ?></textarea>
		</form>

	<div class="buttonRow">
		<button class="button left" form="modifier_form">Modifier le Billet</button>
		<a href="index.php?action=administration&sort=desc" class="button right">Retour Administration</a>
	</div>
</div>
