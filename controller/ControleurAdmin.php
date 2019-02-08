<?php 

require_once 'model/billet.php';
require_once 'model/admin.php';
require_once 'view/viewClass.php';

class ControleurAdmin {

	private $signCom;

	public function __construct() {
		$this->commentaire = new Admin();
		$this->billet = new Billet();
	}

	// Afficher formulaire de connexion
	public function connexion() {
		$vue = new View("Connexion");
		$vue->generer();
	}
	
	// Espace administration
	public function admin(){
		$commentaires = $this->commentaire->getSignCom();
		$billets = $this->billet->getBillets();
		$vue = new View("Admin");
		$vue->generer(array('billets' => $billets, 'commentaire' => $commentaires));
	}
	
	
	// Afficher commentaire signalés panel Admin
	public function displaySignCom(){
		$commentaires = $this->commentaire->getSignCom();
	}
	
	// Moderer commentaire
	public function moderateCom($idCommentaire, $contenus){
		$this->commentaire->modSignCom($idCommentaire, $contenus);
	}
	
	
	
	
	// Creation Billet
	public function create($titre, $contenu)
	{
		$this->commentaire->create($titre, $contenu);
		header('Location: index.php?action=administration');
	}
	
	// Suppression Billet
	public function suppress($idBillet)
	{
		$this->commentaire->suppress($idBillet);
		header('Location: index.php?action=administration');
	}
	
	
	// Modification Billet
	

}