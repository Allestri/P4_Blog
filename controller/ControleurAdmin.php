<?php 


require_once 'view/viewClass.php';

class ControleurAdmin {


	// Afficher formulaire de connexion
	public function connexion() {
	
	$vue = new View("Connexion");
	$vue->generer();
	}

}