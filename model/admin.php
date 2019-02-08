<?php

require_once "model/model.php";

Class Admin extends Model 

{

	// Recuperation infos compte
	public function getAccountInfo($username)
	{
		$sql = "SELECT id, pass FROM members WHERE name = ?";
		$admin = $this->executerRequete($sql, array($username));
	}
	
	
	// Liste commentaires signalés
	public function getSignCom()
	{
		$sql = "SELECT * FROM `t_commentaire` WHERE COM_SIGNALER = 1";
		$signCom = $this->executerRequete($sql);
		return $signCom;
	}
	
	// Modérer commentaire signalés
	public function modSignCom($idCommentaire, $contenus)
	{
		$sql = 'UPDATE t_commentaire SET COM_CONTENU = ? WHERE COM_ID = ?';
		$this->executerRequete($sql, array($idCommentaire, $contenus));
	}

	// Supprimer commentaire signalé 

}

