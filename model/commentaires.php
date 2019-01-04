<?php

require_once 'model/model.php';

class Commentaire extends Model {

  // Renvoie la liste des commentaires associés à un billet
  public function getCommentaires($idBillet) {
    $sql = 'select COM_ID as id, COM_DATE as date,'
      . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
      . ' where BIL_ID=?';
    $commentaires = $this->executerRequete($sql, array($idBillet));
    return $commentaires;

  }
}