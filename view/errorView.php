<?php $titre = 'Mon Blog'; ?>

<?php ob_start() ?>
<p>Une erreur est survenue : <?=errorMessage ?></p>
<?php $contenu = ob_get_clean();

<?php require 'view/template.php'; ?>