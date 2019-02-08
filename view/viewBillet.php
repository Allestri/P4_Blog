<?php $title = "Mon Blog - " . $billet['titre']; ?>

<article>
  <header>
    <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
    <time><?= $billet['date_fr'] ?></time>
  </header>
  <p><?= $billet['contenu'] ?></p>
</article>
<hr />
<header>
  <h1 id="titreReponses">Réponses à <?= $billet['titre'] ?></h1>
</header>

<?php foreach ($commentairest as $commentaire): ?>
  <p><?= $commentaire['auteur'] ?> le <?= $commentaire['date_fr'] ?> 
	<form method="post" action="index.php?action=signaler">
		<input type="hidden" name="idBillet" value="<?= $billet['id'] ?>" />
		<input type="hidden" name="idCom" value="<?= $commentaire['id'] ?>" />
		<button>Signaler</button>
	</form>
  </p>
  <p><?= $commentaire['contenu'] ?></p>
<?php endforeach; ?>

<form method="post" action="index.php?action=commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4" placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input type="submit" value="Commenter" />
</form>

