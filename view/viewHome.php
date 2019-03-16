<?php $this->titre = 'Accueil de mon Blog'; ?>

<!-- Template contenus -->
<div id="wrapper-home">
	<?php foreach ($billets as $billet): ?>
	<div class="wrapper">
		<article class="billet box">
			<header>
				<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
					<h1 class="postTitle"><?= $billet['titre'] ?></h1>
				</a>
				<div class="timeinfo">
					<time><i>Le <?= $billet['date_fr'] ?></i></time>
				</div>
			</header>
			<div class="wrapper">
				<p><?= $billet['contenu'] ?></p>
			</div>
		</article>
	</div>
	<?php endforeach; ?>
</div>

<!-- Fin du template contenus-->

