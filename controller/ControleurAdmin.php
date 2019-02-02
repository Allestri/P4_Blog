<?php 


require_once 'view/viewClass.php';

class ControleurAdmin {


	// Afficher formulaire de connexion
	public function connexion() {
	
	$vue = new View("Connexion");
	$vue->generer();
	}
	
	// Espace administration
	public function admin(){
	
	$vue = new View("Administration");
	$vue->generer();
	}

}