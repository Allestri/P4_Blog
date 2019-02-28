<?php $this->titre = 'Accueil de mon Blog'; ?>

<!-- Template contenus -->
<div id="wrapper-home">
	<?php foreach ($billets as $billet): ?>
	<article>
		<header>
			<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
				<h1 class="titreBillet"><?= $billet['titre'] ?></h1>
			</a>
			<time><?= $billet['date_fr'] ?></time>
		</header>
		<div id="wrapper">
			<p><?= $billet['contenu'] ?></p>
		</div>
	</article>
	<hr />
	<?php endforeach; ?>
</div>

<!-- Fin du template contenus-->

