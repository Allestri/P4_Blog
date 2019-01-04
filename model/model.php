<?php

abstract class Model {

	// Objet PDO d'accès à la BD
	private $bdd;
	
	// Execute une requête SQL eventuellement paramatrée
	protected function executerRequete($sql, $params = null) {
		if ($params == null) 
		{
			$resultat = $this->getBdd()->query($sql); // execution directe
		} else {
			$resultat = $this->getBdd()->prepare($sql); // requête preparée
			$resultat->execute($params);
		}
		return $resultat;
	}
	
	private function getBdd()
	{
		if($this->bdd == null) 
		{
			//Creation de la connexion
			$this->bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
    return $this->bdd;
  }
	
	// Renvoie la liste des commentaires associés à un billet
	public function getCommentaires($idBillet)
	{
		$bdd = $this->getDb();
		$commentaires = $bdd->prepare('select COM_ID as id, COM_DATE as date,'
		. ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
		. ' where BIL_ID=?');
		$commentaires->execute(array($idBillet));
		
		return $commentaires;
	}
	
	// Connexion Base de données
	private function getDb() 
	{
		$bdd = new PDO('mysql:host=localhost;dbname=tp_blog_mvc_2;charset=utf8','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		return $bdd;
	}

}
