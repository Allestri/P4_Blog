<div id="wrapper">
	
	<div id="admin">
		<h1>Administration</h1>
		<?php
		foreach ($billets as $billet): ?>
		<div class="billet">
			<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>"><i class="far fa-edit"></i><i class="far fa-trash-alt"></i>
				<h3><?= $billet['titre'] ?></h1>
			</a>
		</div>
		<?php endforeach; ?>
	</div>
		
	<?php
	/* foreach ($admin as $pseudo): ?>
	<p>Nom: <?= $pseudo['name'] ?></p>
	<p>Mot de passe: <?= $pseudo['pass'] ?></p>
	<?php endforeach; */?> 

	<div id="moderation">
		<h1>Modération commentaire</h1>
		<?php
		foreach ($commentaires as $signComs): ?>
		<div class="modCommentaire">
			<article>
				<header>
				<!-- Titre du commentaire !-->
					<p>Commentaire ID : <?= $signComs['COM_ID'] ?> </p>
					<p>Posté par : <strong><?= $signComs['COM_AUTEUR']?></strong> le <?= $signComs['COM_DATE']?></p>
				</header>
				<p><?= $signComs['COM_CONTENU'] ?></p>
				<form method="post" action="index.php?action=moderer">
					<input type="hidden" name="cid" value="<?= $signComs['COM_ID'] ?>" />
					<input type="text" name="modCom" />
					<button>Modérer commentaire</button>
				</form>
			</article>
		</div>
		<?php endforeach; ?>
	</div>
</div>

