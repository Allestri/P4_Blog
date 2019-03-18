<h1>Historique de modération</h1>
<div id="titlewrapper">
	<h2>Modifications</h2>
	<h2>Suppressions</h2>
</div>
<div id="wrapper-logs">
	<!-- Commentaires edités -->
	<div id="editwrapper" class="wrapperlogs">
		<?php 
		foreach ($logsMod as $historiqueEdit): ?>
		<div class="comment logs box">
			<div class="editstatus">
				<a href="<?="index.php?action=billet&id=" . $historiqueEdit['post_id']?>"/>Ce commentaire a été modifié le <time><?= $historiqueEdit['mod_date_fr'] ?></time></a>
			</div>
			<p>Auteur : <?= $historiqueEdit['author'] ?></p>
			<p>Posté le <time><?= $historiqueEdit['post_date_fr'] ?></time></p>
			<p>Commentaire :</p> <?= $historiqueEdit['oldcontent'] ?></p>
			<hr>
			<h3 class="newcomstatus">Contenus après modération</h3>
			<div class="newcomment">
				<p><?= $historiqueEdit['newcontent'] ?></p>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	<!-- Commentaires effacés -->
	<div id="deletewrapper" class="wrapperlogs">
		<?php
		foreach ($logsDel as $historiqueDel): ?>
		<div class="comment logs box">
			<div class="comstatus">
				<p>Un commentaire a été supprimé le <time><?= $historiqueDel['mod_date_fr'] ?></time></p>
			</div>
			<p>Auteur : <?= $historiqueDel['author'] ?>
			<p>Posté le <time><?= $historiqueDel['post_date_fr'] ?></time></p>
			<p>Commentaire : <?= $historiqueDel['oldcontent'] ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</div>