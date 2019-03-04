<div id="wrapper-admin">
	
	<div id="admin">
		<h1>Administration</h1>
		<div class="buttonRow">
			<a href="index.php?action=administration?sort=desc" class="button left">Newer</a>
			<a href="index.php?action=administration?sort=asc" class="button right">Older</a>
		</div>
		<?php
		foreach ($billets as $billet): ?>
		<div class="billet">
			<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
				<h3><?= $billet['titre'] ?></h1>
			</a>
			<a href="<?= "index.php?action=vueModifier&id=". $billet['id'] ?>" class="far fa-edit"></a>
			<a href="index.php?supprimer" class="far fa-trash-alt"></a>
		</div>
		<?php endforeach; ?>
	</div>
		
	<?php
	print_r($_SESSION['sort']);
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

