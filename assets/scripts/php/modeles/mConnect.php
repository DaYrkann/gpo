	<?php
/**
* Script de connexion de l'administrateur à l'application
* @param $login
* @param $password
*/
	require 'assets/scripts/php/bdd.php';
	function verifIdAdmin(string $login, string $password) {
		$bdd = connectBDD();
		$req = $bdd->query("SELECT * FROM admin WHERE Login ='".$login."'");
		$return = $req->fetch();
		$passwordBDD = $return['Password'];
		if(md5($password) == $passwordBDD) {
			$_SESSION['nameAdmin'] = $return['Login'];
			$_SESSION['date'] = date("d.m.y");
			$_SESSION['connected'] = true;
			return true;
		} else {
			return false;
		}
	}
?>
