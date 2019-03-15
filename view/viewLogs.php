<div id="wrapper-home">
	<h1>Historique de modération</h1>
	<?php 
	foreach ($logs as $historique): ?>
	<div class="comment box">
		<div class="editstatus">
			<a href="<?="index.php?action=billet&id=" . $historique['post_id']?>"/>Ce commentaire a été édité le <?= $historique['log_date'] ?>
		</div>
		<p>Commentaire par </a><strong> <?= $historique['author'] ?> </strong>posté le <?= $historique['date_fr'] ?></p>
		<p><?= $historique['content'] ?></p>
	</div>
	<?php endforeach; ?>
</div>