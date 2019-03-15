<div id="wrapper-admin">
	
	<div id="admin">
	
		<h1>Administration</h1>
		<div class="boxadmin">
			<i class="fas fa-plus-circle"></i>
			<h2 class="moderationstatus"><a href="index.php?action=create">Creer un nouveau Billet</a></h2>
		</div>
		<div class="buttonRow boxsort">
			<a href="index.php?action=administration&sort=desc" class="button left">Plus Récent</a>
			<a href="index.php?action=administration&sort=asc" class="button right">Plus Ancien</a>
		</div>
		
		<div id="billet-wrapper">
		<?php
			foreach ($billets as $billet): ?>
			<div class="adminbillet">
				<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
					<h3><?= $billet['titre'] ?></h3>
				</a>
				<div class="buttonAdmin">
					<a href="<?= "index.php?action=vueModifier&id=" . $billet['id'] ?>" title="Modifier Billet" class="fas fa-pen-square"></a>
					<a href="<?= "index.php?action=supprimer&id=" . $billet['id'] ?>" title="Supprimer Billet" class="fas fa-trash"></a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
		
	<div id="moderation">
		<h1>Modération commentaire</h1>
		<div class="boxadmin">
			<?php 
				if($signComNbr['nbsigncoms'] > 1) {
					echo "<i class='fas fa-exclamation-triangle'></i>
					<h2 class='moderationstatus'>Il y a actuellement " . $signComNbr['nbsigncoms'] . " commentaires à modérer</h2>";
				} else if($signComNbr['nbsigncoms'] == 1) {
					echo "<i class='fas fa-exclamation-triangle orange'></i>
					<h2 class='moderationstatus'>Il y a actuellement " . $signComNbr['nbsigncoms'] . " seul commentaire à modérer</h2>";
				} else {
					echo "<i class='fas fa-check-circle'></i>
					<h2 class='moderationstatus'>Tout va bien, il n'y a rien à modérer.</h2>";
				}
			?>
		</div>
		<div class="boxadmin">
			<i class='fas fa-history'></i>
			<h2 class="moderationstatus"><a href='index.php?action=logs'>Accéder à l'historique de modération</a></h2>
		</div>
		<?php
		foreach ($commentaires as $signComs): ?>
		
		<article class="comment box">
			<header>
			<!-- Titre du commentaire !-->
				<p>Commentaire ID : <?= $signComs['COM_ID'] ?> </p>
				<p>Posté par : <strong><?= $signComs['COM_AUTEUR']?></strong> le <?= $signComs['COM_DATE']?></p>
			</header>
			<p><?= $signComs['COM_CONTENU'] ?></p>
			<button class="buttonDisplay">Modérer</button>
			<div class="editcom">
				<form method="post" action="index.php?action=moderer">
					<input type="hidden" name="cid" value="<?= $signComs['COM_ID'] ?>" />
					<textarea name="modCom" /></textarea>
					<button class="button left">Modérer commentaire</button>
				</form>
				<a class="button right" href="index.php?action=suppresscom&id=<?= $signComs['COM_ID'] ?>">Supprimer Commentaire</a>
			</div>
		</article>

		<?php endforeach; ?>
	</div>
</div>

