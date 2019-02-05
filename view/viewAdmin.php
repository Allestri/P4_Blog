<?php

echo "<h1>Bienvenue dans l'administration</h1>";

foreach ($commentaire as $signComs): ?>
<article>
	<header>
	<!-- Titre du commentaire !--> 
		<p>Commentaire ID : <?= $signComs['COM_ID'] ?> </p>
		<p>Posté par : <strong><?= $signComs['COM_AUTEUR']?></strong> le <?= $signComs['COM_DATE']?></p>
	</header>
	<p><?= $signComs['COM_CONTENU'] ?></p>
</article>
<hr />
<?php endforeach; ?>


