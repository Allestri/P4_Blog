<h1>Historique de modération</h1>
<div id="wrapper-logs">
	<!-- Commentaires edités -->
	<div id="editwrapper" class="wrapperlogs">
		<h1>Modifications</h1>
		<?php 
		foreach ($logsMod as $historiqueEdit): ?>
		<div class="comment logs box">
			<div class="editstatus">
				<a href="<?="index.php?action=billet&id=" . $historiqueEdit['post_id']?>"/>Ce commentaire a été modifié le <?= $historiqueEdit['mod_date_fr'] ?>
			</div>
			<p>Posté par</a><strong> <?= $historiqueEdit['author'] ?> </strong>posté le <?= $historiqueEdit['post_date_fr'] ?></p>
			<p><?= $historiqueEdit['com_id'] ?></p>
			<p><?= $historiqueEdit['oldcontent'] ?></p>
			<div class="newcomment">
				<p><?= $historiqueEdit['newcontent'] ?></p>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	<!-- Commentaires effacés -->
	<div id="deletewrapper" class="wrapperlogs">
		<h1>Suppressions</h1>
		<?php
		foreach ($logsDel as $historiqueDel): ?>
		<div class="comment logs box">
			<p>Un commentaire a été supprimé le <?= $historiqueDel['mod_date_fr'] ?></p>
			<p>Auteur : <?= $historiqueDel['author'] ?>
			<p>Posté le <?= $historiqueDel['post_date_fr'] ?></p>
			<p>Contenu: <?= $historiqueDel['oldcontent'] ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</div>