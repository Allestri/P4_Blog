<?php

class Model {

	// Renvoie la liste des billets du blog
	public function getBillets()
	{
		$bdd = $this->getDb();
		$billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
			  . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
			  . ' order by BIL_ID desc');
		return $billets;
	}

	// Renvoie les infos sur un billet
	public function getBillet($idBillet)
	{
		$bdd = $this->getDb();
		$billet = $bdd->prepare('select BIL_ID as id, BIL_DATE as date,'
		. ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
		. ' where BIL_ID=?');
		$billet->execute(array($idBillet));
		
		if($billet->rowCount() == 1) {
			return $billet->fetch(); // Accès a la première ligne de resultat
		} else {
			throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
		}
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
