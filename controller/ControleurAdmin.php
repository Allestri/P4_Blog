<?php 

require_once 'model/billet.php';
require_once 'model/commentaires.php';
require_once 'view/viewClass.php';

class ControleurAdmin {


	public function __construct() {
		$this->commentaire = new Commentaire();
	}

	// Afficher formulaire de connexion
	public function connexion() {
		$vue = new View("Connexion");
		$vue->generer();
	}
	
	// Espace administration
	public function admin(){
		$vue = new View("Admin");
		$vue->generer();
	}
	
	
	// Afficher commentaire signalés panel Admin
	public function DisplaySignCom($idCommentaire){
		$commentaires = $this->commentaire->getSignCom($idCommentaire);
	}

}