<div id="wrapper-home">
	<h2>Créer un Billet</h2>
		<form method="POST" action="index.php?action=creer" id="creer_form">
			<input type="text" name="titre" placeholder="Titre" /><br/>
			<textarea id="editable" rows="4" cols="20" name="content" placeholder="Contenus de votre billet" form="creer_form"></textarea>
		</form>
	</div>
	<div class="buttonRow">
		<button class="button left" form="creer_form">Créer</button>
		<a href="index.php?action=administration&sort=desc" class="button right">Retour Administration</a>
	</div>
</div>