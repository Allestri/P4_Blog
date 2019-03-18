<div id="wrapper-home">
	<div class="wrapperlogs">
		<h1>Historique de modération</h1>
		<?php 
		foreach ($logs as $historique): ?>
		<div class="comment logs box">
			<div class="editstatus">
				<a href="<?="index.php?action=billet&id=" . $historique['post_id']?>"/>Ce commentaire a été
				<?php
				if($historique['mod_type'] == 'modified'){
					echo 'modifié';
				} else {
					echo 'supprimé';
				}
				?>
				le <?= $historique['mod_date_fr'] ?>
			</div>
			<p>Posté par</a><strong> <?= $historique['author'] ?> </strong>posté le <?= $historique['post_date_fr'] ?></p>
			<p><?= $historique['com_id'] ?></p>
			<p><?= $historique['oldcontent'] ?></p>
			<div class="newcomment">
				<p><?= $historique['newcontent'] ?></p>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>