<?php
/**
* 
*
*
*/
	require 'assets/scripts/php/bdd.php';
	function verifIdAdmin(string $login, string $password) {
		$bdd = connectBDD();
		$req = $bdd->query("SELECT * FROM admin WHERE Login ='".$login."'");
		$return = $req->fetch();
		$passwordBDD = $return['Password'];
		if($password == $passwordBDD) {
			$_SESSION['nameAdmin'] = $return['Login'];
			$_SESSION['date'] = date("d.m.y");
			$_SESSION['connected'] = true;
			return true;
		} else {
			return false;
		}
	}
?>