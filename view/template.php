<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="public/style.css" />
		<title><?php $title ?></title>
		<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=gx3hkd8a680littsdy0nnyqcg5rzlnpkda583h04kotftzma"></script>
		<script>tinymce.init({ selector:'textarea' });</script>
	</head>
	<body>
		<div id="global">
			<div id="header">
				<a href="index.php"><h1 id="titreBlog">Billet simple pour l'Alaska</h1></a>
				<p><a href="index.php?action=connexion">Connexion</a></p>
			</div>
			<div id="contenu">
				<?= $content ?> 
			</div>
			<footer id="piedBlog">
				Blog réalisé avec PHP, HTML5 et CSS.
			</footer>
		</div>
	</body>
</html>