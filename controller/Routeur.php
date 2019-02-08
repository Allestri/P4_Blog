<?php

require_once 'controller/ControleurAccueil.php';
require_once 'controller/ControleurBillet.php';
require_once 'controller/ControleurAdmin.php';
require_once 'view/viewClass.php';

class Routeur {

	private $ctrlAccueil;
	private $ctrlBillet;
	private $ctrlAdmin;

	public function __construct() {
		$this->ctrlAccueil = new ControleurAccueil();
		$this->ctrlBillet = new ControleurBillet();
		$this->ctrlAdmin = new ControleurAdmin();
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
					$idBillet = $this->getParametre($_POST, 'idBillet');
					$idCom = $this->getParametre($_POST, 'idCom');
					$this->ctrlBillet->signaler($idBillet, $idCom);
				}
				else if ($_GET['action'] == 'connexion') {
					$this->ctrlAdmin->connexion();
				} 
				else if ($_GET['action'] == 'administration') {
					$this->ctrlAdmin->admin();
				}
				else if ($_GET['action'] == 'creer') {
					$titreBillet = $this->getParametre($_POST, 'titre');
					$contenuBillet = $this->getParametre($_POST, 'contenu');
					$this->ctrlAdmin->create($titreBillet, $contenuBillet);
				}
				else if($_GET['action'] == 'supprimer') {
					$idBillet = $this->getParametre($_POST, 'idBillet');
					$this->ctrlAdmin->suppress($idBillet);
				}
				else if($_GET['action'] == 'modifier') {
					$idBillet = $this->getParametre($_POST, 'idBillet');
					$titreBillet = $this->getParametre($_POST, 'titre');
					$contenuBillet = $this->getParametre($_POST, 'contenus');
					$this->ctrlAdmin->update($idBillet, $titreBillet, $contenuBillet);
				}
				else if ($_GET['action'] == 'moderer') {
					$idCom = $this->getParametre($_POST, 'cid');
					$modCom = $this->getParametre($_POST, 'modCom');
					$this->ctrlAdmin->moderateCom($idCom, $modCom);
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