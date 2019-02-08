<?php

require_once 'model/model.php';

class Commentaire extends Model {

	// Renvoie la liste des commentaires associés à un billet
	public function getCommentaires($idBillet) {
		$sql = 'select COM_ID as id, DATE_FORMAT(COM_DATE, \'%d/%m/%Y à %Hh%imin%ss\') 
		AS date_fr, COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE where BIL_ID=?';
		$commentairest = $this->executerRequete($sql, array($idBillet));
	return $commentairest;
	}
  
	// Ajouter un commentaire dans la base
	public function ajouterCommentaire($auteur, $contenu, $idBillet) {
		$sql = 'insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID) values(NOW(), ?, ?, ?)';
		$this->executerRequete($sql, array($auteur, $contenu, $idBillet));
	}
	
	// Signaler commentaire
	public function signalerCommentaire($idCommentaire) {
		$sql = 'UPDATE T_COMMENTAIRE SET COM_SIGNALER = 1 WHERE COM_ID = ?';
		$this->executerRequete($sql, array($idCommentaire));
	}
  
}