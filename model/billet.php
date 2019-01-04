<?php 

require_once 'model/model.php';

class Billet extends Model 
{
	// Renvoie la liste des billets du blog
	public function getBillets()
	{
		$sql = 'select BIL_ID as id, BIL_DATE as date,'
			  . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
			  . ' order by BIL_ID desc';
		$billets = $this->executerRequete($sql);
		return $billets;
	}
	
	// Renvoie les infos sur un billet
	public function getBillet($idBillet)
	{
		$sql = 'select BIL_ID as id, BIL_DATE as date,'
		. ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
		. ' where BIL_ID=?';
		$billet = $this->executerRequete($sql, array($idBillet));
		
		if($billet->rowCount() == 1) {
			return $billet->fetch(); // Accès a la première ligne de resultat
		} else {
			throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
		}
	}
	
}