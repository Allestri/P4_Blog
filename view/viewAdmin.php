<div id="wrapper-admin">
	
	<div id="admin">
	
		<h1>Administration</h1>
		<div class="boxadmin">
			<i class="fas fa-plus-circle adminicon"></i>
			<h2 class="moderationstatus"><a href="index.php?action=create">Creer un nouveau Billet</a></h2>
		</div>
		<div class="buttonRow boxsort">

			<a href="index.php?action=administration&sort=desc" class="button">Plus Récent</a>
			<hr>
			<a href="index.php?action=administration&sort=asc" class="button">Plus Ancien</a>

		</div>
		
		<div id="billet-wrapper">
		<?php
			foreach ($billets as $billet): ?>
			<div class="adminbillet">
				<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
					<h3><?= $billet['titre'] ?></h3>
				</a>
				<i class="fas fa-comments"></i>
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
					echo "<i class='fas fa-exclamation-triangle adminicon'></i>
					<h2 class='moderationstatus'>Il y a actuellement " . $signComNbr['nbsigncoms'] . " commentaires à modérer</h2>";
				} else if($signComNbr['nbsigncoms'] == 1) {
					echo "<i class='fas fa-exclamation-triangle orange adminicon'></i>
					<h2 class='moderationstatus'>Il y a actuellement " . $signComNbr['nbsigncoms'] . " seul commentaire à modérer</h2>";
				} else {
					echo "<i class='fas fa-check-circle adminicon'></i>
					<h2 class='moderationstatus'>Tout va bien, il n'y a rien à modérer</h2>";
				}
			?>
		</div>
		<div class="boxadmin">
			<i class='fas fa-history adminicon'></i>
			<h2 class="moderationstatus"><a href='index.php?action=logs'>Accéder à l'historique de modération</a></h2>
		</div>
		<?php
		$nb = 0;
		foreach ($commentaires as $signComs): 
		$nb ++;
		?>
		
		<article class="comment box">
			<header>
			<!-- Titre du commentaire !-->
				<div class="modComInfo">
					<p>Commentaire ID : <?= $signComs['COM_ID'] ?> </p>
					<p>Posté par : <strong><?= $signComs['COM_AUTEUR']?></strong> le <?= $signComs['COM_DATE']?></p>
					<a class="fas fa-times-circle crosscom" title="Supprimer Commentaire" href="index.php?action=suppresscom&id=<?= $signComs['COM_ID'] ?>"></a>
				</div>
			</header>

			<div class="editcom">
				<form method="post" class="editform" action="index.php?action=moderer">
					<input type="hidden" name="cid" value="<?= $signComs['COM_ID'] ?>" />
					<textarea cols="40" rows="5" name="modCom" placeholder="Editer Commentaire" required/><?= $signComs['COM_CONTENU']?></textarea>
					<button class="button modbutton">Modérer commentaire</button>
				</form>
			</div>
		</article>

		<?php endforeach; ?>
	</div>
</div>

