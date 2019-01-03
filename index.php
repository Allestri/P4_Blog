<?php

require 'model/model.php';

try {
	$billets = getBillets();
	require 'view/view.php';
	
}
catch (Exception $e) {
	$errorMessage = $e->getMessage();
	require 'view/errorView.php';
}
