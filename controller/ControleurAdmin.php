<?php 

require_once 'model/billet.php';
require_once 'model/admin.php';
require_once 'view/viewClass.php';

class ControleurAdmin {

	private $signCom;

	public function __construct() {
		$this->administration = new Admin();
		$this->billet = new Billet();
	}

	// Afficher formulaire de connexion
	public function connexion() {
		$vue = new View("Connexion");
		$vue->generer();
	}
	
	// Espace administration
	public function admin(){
		$commentaires = $this->administration->getSignCom();
		$billets = $this->billet->getBillets();
		$vue = new View("Admin");
		$vue->generer(array('billets' => $billets, 'commentaires' => $commentaires));
	}
	
	
	// Afficher commentaire signalés panel Admin
	public function displaySignCom(){
		$commentaires = $this->administration->getSignCom();
	}
	
	// Moderer commentaire
	public function moderateCom($contenus, $idCommentaire){
		$this->administration->modSignCom($contenus, $idCommentaire);
		header('Location: index.php?action=administration');
	}
	
	
	
	
	// Creation Billet
	public function create($titre, $contenu)
	{
		$this->administration->create($titre, $contenu);
		header('Location: index.php?action=administration');
	}
	
	// Suppression Billet
	public function suppress($idBillet)
	{
		$this->administration->suppress($idBillet);
		header('Location: index.php?action=administration');
	}
	
	
	// Modification Billet
	public function update($idBillet, $titreBillet, $contenuBillet)
	{
		$this->administration->update($idBillet, $titreBillet, $contenuBillet);
	}

}