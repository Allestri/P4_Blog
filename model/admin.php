<?php

require_once "model/model.php";

Class Admin extends Model 

{

	// Recuperation infos compte
	public function getAccountInfo($username)
	{
		$sql = "SELECT * FROM members WHERE name = ?";
		$admin = $this->executerRequete($sql, array($username));
		return $admin->fetch();
	}
	
	
	// Liste commentaires signalés
	public function getSignCom()
	{
		$sql = "SELECT * FROM `t_commentaire` WHERE COM_SIGNALER = 1";
		$signCom = $this->executerRequete($sql);
		return $signCom;
	}
	
	// Modérer commentaire signalés
	public function modSignCom($contenus, $idCommentaire)
	{
		$sql = 'UPDATE t_commentaire SET COM_CONTENU = ? WHERE COM_ID = ?';
		$this->executerRequete($sql, array($contenus, $idCommentaire));
	}

	// Supprimer commentaire signalé 
	
	//
	
	// Creation Billet
	public function create($titre, $content)
	{
		$sql = "INSERT INTO t_billet(BIL_DATE, BIL_TITRE, BIL_CONTENU) VALUES(NOW(), ?, ?)";
		$this->executerRequete($sql, array($titre, $content));
	}
	
	// Suppression Billet
	public function suppress($idBillet)
	{
		$sql = 'DELETE FROM t_billet WHERE bil_id = ?';
		$this->executerRequete($sql, array($idBillet));
	}
	
	// Modification Billet
	public function update($idBillet, $titreBillet, $contenuBillet)
	{
		$sql = "UPDATE t_billet SET bil_titre = ?, bil_contenu = ? WHERE bil_id = ?";
		$this->executerRequete($sql, array($titreBillet, $contenuBillet, $idBillet));
	}

}

