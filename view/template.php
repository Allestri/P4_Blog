<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="public/style.css" />
		<title><?php $title ?></title>
		<!-- Font Awesome CDN -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<!-- Tiny MCE -->
		<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=gx3hkd8a680littsdy0nnyqcg5rzlnpkda583h04kotftzma"></script>
		<script>tinymce.init({ selector:'textarea#editable' });</script>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<div id="brand">
					<a href="index.php">
						<img id="logo" src="public/images/logo2.png" alt="Logo Blog" title="Logo Alaska" />
					</a>
					<h1 id="blogTitle"><a href="index.php">Billet simple pour l'Alaska</a></h1>
				</div>
					
				<div id="login">
					<?php
					if(isset($_SESSION['userId'])){
						echo '<p><a href="index.php?action=administration&sort=desc" class="button-connexion" id="logintext">Administration</a></p>
							<a href="index.php?action=administration&sort=desc" class="fas fa-tasks button-connexion" id="loginlogo"></a>
							<p><a href="index.php?action=deconnexion" class="button-connexion" id="logintext">Deconnexion</a></p>
							<a href="index.php?action=deconnexion" class="fas fa-sign-out-alt button-connexion" id="loginlogo"></a>';
					}else {
						echo '<form method="POST" id="connexionAdmin" action="index.php?action=connexionAdmin">
						<input type="text" name="username" placeholder="Identifiant" required/>
						<input type="password" name="password" placeholder="Mot de passe" required/>
						<input type="submit" class="button-connexion" id="logintext" value="Connexion">
						</form>
						<button class="button-connexion" id="loginlogo" form="connexionAdmin"><i class="fas fa-sign-in-alt"></i></button>';
					}
					?>
				</div>
					
			</div>
				<?= $content ?> 
			<footer>
				Billet Simple pour l'Alaska, écrit par Jean Forteroche.
			</footer>
		</div>
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
		<!-- JS -->
		<script src="public/js/main.js"></script>
	</body>
</html>