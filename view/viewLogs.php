<div id="wrapper-home">
	<h1>Historique de modération</h1>
	<?php 
	foreach ($logs as $historique): ?>
	<div class="comment box">
		<p>Ce commentaire a été édité le <?= $historique['log_date'] ?></p>
		<p><a href="<?="index.php?action=billet&id=" . $historique['post_id']?>"/>Commentaire par </a><?= $historique['author'] ?> posté le <?= $historique['date_fr'] ?></p>
		<p><?= $historique['content'] ?></p>
	</div>
	<?php endforeach; ?>
</div>