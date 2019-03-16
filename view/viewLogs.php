<div id="wrapper-home">
	<div class="wrapperlogs">
		<h1>Historique de modération</h1>
		<?php 
		foreach ($logs as $historique): ?>
		<div class="comment box">
			<div class="editstatus">
				<a href="<?="index.php?action=billet&id=" . $historique['post_id']?>"/>Commentaire
				<?php
				if($historique['mod_type'] == 'modified'){
					echo 'modifié';
				} else {
					echo 'supprimé';
				}
				?>
				le <?= $historique['log_date_fr'] ?>
			</div>
			<p>Posté par</a><strong> <?= $historique['author'] ?> </strong>posté le <?= $historique['date_fr'] ?></p>
			<p><?= $historique['content'] ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</div>