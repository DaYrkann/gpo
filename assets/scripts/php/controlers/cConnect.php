<?php
/**
* Controle les bons paramètre de connexion, appel la base de donnée ou renvoie vers la page de connexion
*/

	require 'assets/scripts/php/modeles/mConnect.php';

	if($_POST['act'] != 'Connect') {
		$view = 'assets/scripts/php/views/connexion/vConnect.php';
	} else {
		$login = htmlspecialchars($_POST['login']);
		$password = htmlspecialchars($_POST['password']);
		if (verifIdAdmin($login, $password)) {
			$_POST['act'] = 'Home';
			$view = 'assets/scripts/php/views/connexion/vConnectOk.php';
		} else {
			echo('test');
			exit();
			$view = 'assets/scripts/php/views/connexion/vError.php';
		}
	}


?>
