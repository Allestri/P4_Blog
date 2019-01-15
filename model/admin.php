<?php

require_once "model/model.php"

Class Admin extends Model 

{
	// Liste commentaires signalés
	public function getSignCom
	{
		$sql = "SELECT * FROM `t_commentaire` WHERE COM_SIGNALER = 1";
	}

}

