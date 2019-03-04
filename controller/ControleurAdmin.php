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
	
	// Afficher formulaire Modif Billet
	public function updateView($idBillet) {
		$billet = $this->billet->getBillet($idBillet);
		$vue = new View("Modifier");
		$vue->generer(array("billet" => $billet));
	}
	
	
	public function deconnexion() {
		session_unset();
		session_destroy();
		header('Location: index.php');
	}
	
	
	public function admin() {
		if(isset($_SESSION['userId'])) {
		
			$commentaires = $this->administration->getSignCom();
			$billets = $this->billet->getBillets();
			// Generation vue.
			$vue = new View("Admin");
			$vue->generer(array('billets' => $billets, 'commentaires' => $commentaires));
		} else {
			header('Location: index.php');
			echo 'Mauvaise session';
		}
	}

	// Espace administration
	public function connexionAdmin(){
		
		if(isset($_POST['username']) && isset($_POST['password'])) {
		
			$username = ($_POST['username']);
			$password = ($_POST['password']);
			$admin = $this->administration->getAccountInfo($username);
			// $pass_hache = password_hash($password, PASSWORD_DEFAULT); 
			$isPassCorrect = password_verify($password, $admin['pass']);
			// echo $isPassCorrect;
			
			if($username == 'Admin' && $isPassCorrect) {
			
				$_SESSION['userId'] = $username;
				$commentaires = $this->administration->getSignCom();
				// $admin = $this->administration->getAccountInfo($username);
				
				// Billets Croissant / Decroissant
				$sortPost = "desc";
				$_SESSION['sort'] = $sortPost;
				
				if($_SESSION['sort'] == 'desc') {
					$billets = $this->billet->getBillets();
					} else {
					$billets = $this->billet->getBilletsAsc();
				}
				// Generation vue.
				$vue = new View("Admin");
				$vue->generer(array('admin' => $admin, 'billets' => $billets, 'commentaires' => $commentaires));
			} else {
				header('Location: index.php?action=connexion');
				echo 'Mauvais identifiant';
			}
		}
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
		header('Location: index.php?action=administration');
	}
		

}