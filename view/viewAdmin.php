<?php

echo "<h1>Bienvenue dans l'administration</h1>";

foreach ($signCom as $signComs): ?>
<article>
	<header>
	Titre du commentaire.
	</header>
	<p><?= $billet['contenu'] ?></p>
</article>
<hr />
<?php endforeach; ?>


