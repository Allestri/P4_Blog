<div id="wrapper">
	<h1>Bienvenue dans l'administration</h1>
	<div id="admin">
		
		<div class="crud">
			<h2>Créer un billet</h2>
			<hr>
			<div class="form">
				<form method="POST" action="index.php?action=creer" id="creer_form">
					<input type="text" placeholder="Titre" name="titre" /><br/><br/>
					<textarea rows="4" cols="20" form="creer_form" placeholder="Contenus" name="contenu"></textarea>
				</form>
			</div>
			<div class="buttonRow">
				<button class="button" form="creer_form">Créer Billet</button>
			</div>
		</div>

		<!-- A modifier -->
		<div class="crud">
			<h2>Supprimer un Billet</h2>
			<hr>
			<div class="form">
				<form method="POST" action="index.php?action=supprimer" id="supprimer_form">
					<select name="idBillet" form="supprimer_form">
					<?php
					foreach ($billets as $billet): ?>
						<option value="<?= $billet['id']?>">Billet <?= $billet['id'] ?></option>
					<?php endforeach; ?>
					</select>
					<br/>
				</form>
			</div>
			<div class="buttonRow">
				<button class="button" form="supprimer_form">Supprimer Billet</button>
			</div>
		</div>


		<div class="crud">
			<h2>Modifier un Billet</h2>
			<hr>
			<div class="form">
				<form method="POST" action="index.php?action=modifier" id="modifier_form">
					<select name="idBillet" form="modifier_form">
					<?php
					foreach ($billets as $modBillet): ?>
						<option value="<?= $modBillet['id']?>">Billet <?= $modBillet['titre'] ?></option>
					<?php endforeach; ?>
					</select>
					<br/>
					<input type="text" placeholder="Titre" name="titre" /><br/>
					<input type="text" placeholder="Contenus" name="contenus" /><br/>
				</form>
			</div>
			<div class="buttonRow">
				<button class="button left" form="modifier_form">Modifier Billet</button>
				<button class="button right">Actualiser</button>
			</div>
		</div>
	</div>
	<hr>
		
	<?php
	/* foreach ($admin as $pseudo): ?>
	<p>Nom: <?= $pseudo['name'] ?></p>
	<p>Mot de passe: <?= $pseudo['pass'] ?></p>
	<?php endforeach; */?> 

	<div id="moderation">
		<h1>Modération commentaire</h1>
		<?php
		foreach ($commentaires as $signComs): ?>
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
		<hr />
		<?php endforeach; ?>
	</div>
</div>

