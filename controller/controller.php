<?php

require 'model/model.php';

// Affiche la liste de tous les billets du blog
function accueil()
{
	$billets = getBillets();
	require 'view/view.php';
}

// Affiche les details sur un billets
function billet($idBillet)
{
	$billet = getBillet($idBillet);
	$commentaires = getCommentaires($idBillet);
	require 'view/viewBillet.php';
}

// Affiche une erreur
function erreur($msgErreur)
{
	require 'view/errorView.php';
}