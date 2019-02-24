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
	
	// if(isset($_SESSION['userId']) {
		
		if(isset($_POST['username']) && isset($_POST['password'])) {
		
			$username = ($_POST['username']);
			$password = ($_POST['password']);
			$admin = $this->administration->getAccountInfo($username);
			// $pass_hache = password_hash($password, PASSWORD_DEFAULT); 
			$isPassCorrect = password_verify($password, $admin['pass']);
			echo $isPassCorrect;
			if($username == 'Admin' && $isPassCorrect) {
			
				$_SESSION['userId'] = $username;
				$commentaires = $this->administration->getSignCom();
				// $admin = $this->administration->getAccountInfo($username);

				//print_r($admin);
					
				$billets = $this->billet->getBillets();
				// Generation vue.
				$vue = new View("Admin");
				$vue->generer(array('admin' => $admin, 'billets' => $billets, 'commentaires' => $commentaires));
			} else {
				echo 'Mauvais identifiant';
				header('Location: index.php?action=connexion');
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