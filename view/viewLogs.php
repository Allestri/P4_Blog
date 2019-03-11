<div id="wrapper-home">
	<h1>Historique de modération</h1>
	<?php 
	foreach ($logs as $historique): ?>
	<div class="comment box">
		<?= $historique['author'] ?>
	</div>
	<?php endforeach; ?>
</div>