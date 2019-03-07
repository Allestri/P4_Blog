<div id="wrapper-admin">
	
	<div id="admin">
		<h1>Administration</h1>
		<div class="buttonRow">
			<a href="index.php?action=create">Creer Billet</a>
			<a href="index.php?action=administration&sort=desc" class="button left">Plus Récent</a>
			<a href="index.php?action=administration&sort=asc" class="button right">Plus Ancien</a>
		</div>
		<div id="billet-wrapper">
		<?php
			foreach ($billets as $billet): ?>
			<div class="billet">
				<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
					<h3><?= $billet['titre'] ?></h1>
				</a>
				<div class="buttonAdmin">
					<a href="<?= "index.php?action=vueModifier&id=" . $billet['id'] ?>" class="fas fa-pen-square"></a>
					<a href="<?= "index.php?action=supprimer&id=" . $billet['id'] ?>" class="fas fa-trash"></a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
		
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

