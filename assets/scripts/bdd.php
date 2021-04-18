<?php
function connectBDD() {
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=gestion_parc_ordi;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		return $bdd;
	} catch (Exception $e) {
		erreur('Erreur : ' .$e->getMessage());
	}

	return $bdd;
}
?>