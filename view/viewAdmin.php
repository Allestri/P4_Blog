<?php
session_start();
?>
<h1>Bienvenue dans l'administration</h1>
<h2>Créer un billet</h2>

<form method="POST" action="index.php?action=creer">
	<label>Titre<input type="text" name="titre" /></label><br/>
	<label>Contenus<input type="text" name="contenu" /></label><br/>
	<button>Créer un billet</button>
</form>
<hr/>

<!-- A modifier --
<h2>Supprimer un Billet</h2>

<form method="POST" action="index.php?action=supprimer" id="supprimer_form">
	<select name="idBillet" form="supprimer_form">
	?php
	foreach ($billets as $billet): ?>
		<option value="?= $billet['id']?>">Billet ?= $billet['id'] ?></option>
	?php endforeach; ?>
	</select>
	<br/>
	<button>Supprimer Billet</button>
</form>
<hr/>
-->


<h2>Modifier un Billet</h2>

<form method="POST" action="index.php?action=modifier" id="modifier_form">
	<select name="idBillet" form="modifier_form">
	<?php
	foreach ($billets as $modBillet): ?>
		<option value="<?= $modBillet['id']?>">Billet <?= $modBillet['id'] ?></option>
	<?php endforeach; ?>
	</select>
	<br/>
	<input type="text" name="titre" /><br/>
	<input type="text" name="contenus" /><br/>
	<button>Modifier Billet</button>
</form>
<hr/>


<h2>Modération commentaire</h2>
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
