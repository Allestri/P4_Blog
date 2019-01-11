<?php

require_once 'controller/ControleurAccueil.php';
require_once 'controller/ControleurBillet.php';
require_once 'view/viewClass.php';

class Routeur {

	private $ctrlAccueil;
	private $ctrlBillet;

	public function __construct() {
		$this->ctrlAccueil = new ControleurAccueil();
		$this->ctrlBillet = new ControleurBillet();
	}

	// Traite une requête entrante
	public function routerRequete() {
		try {
			if (isset($_GET['action'])) {
				if ($_GET['action'] == 'billet') {
				$idBillet = intval($this->getParametre($_GET, 'id'));
				if ($idBillet != 0) {
					$this->ctrlBillet->billet($idBillet);
				}
				else
					throw new Exception("Identifiant de billet non valide");
				}
				else if ($_GET['action'] == 'commenter') {
					$auteur = $this->getParametre($_POST, 'auteur');
					$contenu = $this->getParametre($_POST, 'contenu');
					$idBillet = $this->getParametre($_POST, 'id');
					$this->ctrlBillet->commenter($auteur, $contenu, $idBillet);
				}
				else if ($_GET['action'] == 'signaler') {
					$idBillet = $this->getParametre($_POST, 'id');
					$idCom = $this->getParametre($_POST, 'idCom');
				}
				else
					throw new Exception("Action non valide");
			}
			else { // Aucune action definie : affichage de l'accueil
				$this->ctrlAccueil->accueil();
			}
		}
		catch (Exception $e) {
			$this->erreur($e->getMessage());
		}
	}

	// Affiche une erreur
	private function erreur($msgErreur) {
		$vue = new View("Error");
		$vue->generer(array('msgErreur' => $msgErreur));
	}
	  
	  
	// Recherche un paramètre dans un tableau
	private function getParametre($tableau, $nom) {
		if (isset($tableau[$nom])) {
			return $tableau[$nom];
		} else
			throw new Exception("Parametre '$nom' absent");
	}
  
}