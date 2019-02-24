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
		<div id="container">
			<div id="header">
				<a href="index.php"><h1 id="titreBlog">Billet simple pour l'Alaska</h1></a>
		
					<div id="connexion">
						<p><input type="text" placeholder="Identifiant"/></p>
						<p><input type="text" placeholder="Mot de passe"/></p>
						<p><a href="index.php?action=connexion">Connexion</a></p>
						<p><a href="index.php?action=deconnexion">Deconnexion</a></p>
						<p><a href="index.php?action=administration">Administration</a></p>
					</div>
					
			</div>
			<div id="contenu">
				<p>Connecté</p>
				<p>Deconnecté</p>
				<?= $content ?> 
			</div>
			<footer id="piedBlog">
				Blog réalisé avec PHP, HTML5 et CSS.
			</footer>
		</div>
	</body>
</html>