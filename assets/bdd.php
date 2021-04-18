<?php
function connectBDD() {
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=u528176900_gestion_parc;charset=utf8', 'u528176900_yann', 'D@rK1102', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		return $bdd;
	} catch (Exception $e) {
		erreur('Erreur : ' .$e->getMessage());
	}

	return $bdd;
}
?>