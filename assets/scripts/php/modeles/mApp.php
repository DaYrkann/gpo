<?php
	require 'assets/scripts/php/bdd.php';
	/**
	* BindParam d'array
	* @param {Object} $poStatement
	* @param {Array} $paAarray
	* 
	*/
	function PDOBindArray(&$poStatement, &$paArray) {
		foreach ($paArray as $k=>$v) {
			@$poStatement->bindValue(':'.$k,$v);
		}
	}

	/**
	* Récupérer les données demandé.
	* @param {String} $data
	* @return $return Un tableau associatif des données demandés.
	*/
	function allData(string $data) {
		$bdd = connectBDD();
		$return = array();
		$req = "SELECT * FROM $data";
		$stm = $bdd->prepare($req);
		$stm->execute();
		$return = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $return;
	}

	/**
	* Créer un nouvel utilisateur ou un poste dans la base de données.
	* @param {String} $section
	* @param {String} $data1
	* @param {String} $data2
	* @param {String} $data3
	* @param {String} $data4
	* @param {Boolean} true/false
	*/
	function createData(string $section, string $data1, string $data2, string $data3, string $data4) {
		try {
			$bdd = connectBDD();
			$stm = $bdd->prepare("
									INSERT INTO $section VALUES 
										(:id, :value1, :value2, :value3)
								");
			$data = array(
				'id' => $data1,
				'value1' => $data2,
				'value2' => $data3,
				'value3' => $data4,
			);
			PDOBindArray($stm,$data);
			$stm->execute();
			return true;
		} catch(Exception $e) {
			return false;
		}
		
	}
	/**
	* Suprimer un utilisateur ou un poste de la base de donnée.
	* @param {String} $section
	* @param {String} $code
	*/
	function deleteData(string $section, string $code) {
		$bdd = connectBDD();
		$stm = $bdd->prepare("DELETE FROM $section where id = :code ");
		$stm->bindParam(':code', $code);
		$stm->execute();
	}
	/**
	* Enregistre une attribution de créneau horaire dans la base de donnée et change la disponibilité d'une poste.
	* @param {String} $user
	* @param {String} $comp
	* @param {String} $time
	*/
	function attribTime($jour,string $user, string $comp, string $time) {
		$bdd = connectBDD();
		$stm = $bdd->prepare("
								INSERT INTO attribution VALUES
									(:jour, :user, :comp, :attrib)
							");
		$data = array(
			'jour' => $jour,
			'user' => $user,
			'comp' => $comp,
			'attrib' => $time

		);
		PDOBindArray($stm,$data);
		$stm->execute();
	}
	/*
	* Supprimer une attribution de creneau horaire de la base de données.
	* @param {String} $jour
	*/
	function cancelTime(string $jour) {
		$bdd = connectBDD();
		$stm = $bdd->prepare("
								DELETE FROM attribution
									WHERE Creneau = :creneau
							");
		$stm->bindParam(':creneau', $jour, PDO::PARAM_STR);
		$stm = $bdd->execute();
	}
