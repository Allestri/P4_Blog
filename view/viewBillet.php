<?php $title = "Mon Blog - " . $billet['titre']; ?>

<div id="wrapper-home">
	<article class="billet">
	  <header>
		<h1 class="titreBillet"><?= $billet['titre'] ?></h1>
		<time><?= $billet['date_fr'] ?></time>
	  </header>
	  <p><?= $billet['contenu'] ?></p>
	</article>
	<hr class="block-separator">
	
	<div id="wrapper-comment">
		<header class="box">
		  <h1 id="titreReponses">Il y a 52 commentaires à <?= $billet['titre'] ?></h1>
		</header>

		<?php foreach ($commentairest as $commentaire): ?>
		<div class="comment box">
		  <div class="commentInfo"><b><?= $commentaire['auteur'] ?></b> posté le <?= $commentaire['date_fr'] ?> 
			<form method="post" action="index.php?action=signaler">
				<input type="hidden" name="idBillet" value="<?= $billet['id'] ?>" />
				<input type="hidden" name="idCom" value="<?= $commentaire['id'] ?>" />
				<button class="fas fa-exclamation-circle"></button>
			</form>
		  </div>

		  <p><?= $commentaire['contenu'] ?></p>
		</div>
		<?php endforeach; ?>

		<form method="post" action="index.php?action=commenter">
			<input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" required /><br />
			<textarea id="txtCommentaire" name="contenu" rows="4" placeholder="Votre commentaire" required></textarea><br />
			<input type="hidden" name="id" value="<?= $billet['id'] ?>" />
			<input type="submit" value="Commenter" />
		</form>
	</div>
</div>

