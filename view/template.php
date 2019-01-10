<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="public/style.css" />
    <title><?php $title ?></title>
  </head>
  <body>
    <div id="global">
      <header>
        <a href="index.php"><h1 id="titreBlog">Blog P4</h1></a>
        <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
      </header>
      <div id="contenu">
		<?= $content ?> 
      </div>
      <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS.
      </footer>
    </div>
  </body>
</html>