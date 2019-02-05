<?php 

require_once 'model/billet.php';
require_once 'model/admin.php';
require_once 'view/viewClass.php';

class ControleurAdmin {

	private $signCom;

	public function __construct() {
		$this->commentaire = new Admin();
	}

	// Afficher formulaire de connexion
	public function connexion() {
		$vue = new View("Connexion");
		$vue->generer();
	}
	
	// Espace administration
	public function admin(){
		$commentaires = $this->commentaire->getSignCom();
		$vue = new View("Admin");
		$vue->generer(array('commentaire' => $commentaires));
	}
	
	
	// Afficher commentaire signalés panel Admin
	public function displaySignCom(){
		$commentaires = $this->commentaire->getSignCom();
	}

}