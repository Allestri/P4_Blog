<?php $title = "Mon Blog - " . $billet['titre']; ?>

<div id="wrapper-home">
	<div id="wrapper-post">
		<article class="billet">
		  <header>
			<h1 class="titreBillet"><?= $billet['titre'] ?></h1>
			<time><?= $billet['date_fr'] ?></time>
		  </header>
		  <p><?= $billet['contenu'] ?></p>
		</article>
	</div>
	<hr class="block-separator">
	
	<div id="wrapper-comment">
		<header class="box">
		  <h1 class="commentTitle">Il y a <?= $commentNumber['nbcomments'] ?> commentaires à <?= $billet['titre'] ?></h1>
		</header>

		<?php foreach ($commentairest as $commentaire): ?>
		<div class="comment box">
		  <div class="commentInfo"><b><?= $commentaire['auteur'] ?></b> posté le <?= $commentaire['date_fr'] ?> 
			<form method="post" action="index.php?action=signaler">
				<input type="hidden" name="idBillet" value="<?= $billet['id'] ?>" />
				<input type="hidden" name="idCom" value="<?= $commentaire['id'] ?>" />
				<div class="signaler">
				<?php
					if($commentaire['signaler'] == 1){
						echo "Ce contenu a déjà été signalé";
					} else {
						echo '<button class="fas fa-exclamation-circle"></button>';
					};
					?>
				</div>
			</form>
		  </div>

		  <p><?= $commentaire['contenu'] ?></p>
		</div>
		<?php endforeach; ?>
		<header class="box">
			<h2 class="commentTitle">Commentez</h2>
		</header>
		<form id="commentform" method="post" action="index.php?action=commenter">
			<div class="form-bloc">
				<input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" required /><br />
				<textarea id="commentformcontent" name="contenu" rows="8" placeholder="Votre commentaire" required></textarea><br />
				<input type="hidden" name="id" value="<?= $billet['id'] ?>" />
			</div>
			<div class="form-bloc">
				<input type="submit" class="button submit" value="Poster" />
			</div>
		</form>
	</div>
</div>

