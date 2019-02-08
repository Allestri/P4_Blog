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


<h2>Modération commentaire</h2>
<?php
foreach ($commentaire as $signComs): ?>
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


