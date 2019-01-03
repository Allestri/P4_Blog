<?php $titre = 'Accueil de mon Blog'; ?>

<!-- Template contenus -->
<? ob_start(); ?>

<?php foreach ($billets as $billet): ?>
<article>
	<header>
		<a href="<?= "billet.php?id=" . $billet['id'] ?>">
			<h1 class="titreBillet"><?= $billet['titre'] ?></h1>
		</a>
		<time><?= $billet['date'] ?></time>
	</header>
	<p><?= $billet['contenu'] ?></p>
</article>
<hr />
<?php endforeach; ?>

<!-- Fin du template contenus-->
<?php $content = ob_get_clean(); ?>

<?php require 'view/template.php'; ?>
