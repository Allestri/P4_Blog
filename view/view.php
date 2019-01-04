<?php $this->titre = 'Accueil de mon Blog'; ?>

<!-- Template contenus -->

<?php foreach ($billets as $billet): ?>
<article>
	<header>
		<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
			<h1 class="titreBillet"><?= $billet['titre'] ?></h1>
		</a>
		<time><?= $billet['date'] ?></time>
	</header>
	<p><?= $billet['contenu'] ?></p>
</article>
<hr />
<?php endforeach; ?>

<!-- Fin du template contenus-->

<?php require 'view/template.php'; ?>
