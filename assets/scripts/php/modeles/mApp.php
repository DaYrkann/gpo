<?php
	require 'assets/scripts/php/bdd.php';

	function PDOBindArray(&$poStatement, &$paArray) {
		foreach ($paArray as $k=>$v) {
			@$poStatement->bindValue(':'.$k,$v);
		}
	}

	function allData(string $data) {
		$bdd = connectBDD();
		$return = array();
		$req = "SELECT * FROM $data";
		$stm = $bdd->prepare($req);
		$stm->execute();
		$return = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $return;
	}

	function createData(string $section, string $data1, string $data2, string $data3, string $data4) {
		try {
			$bdd = connectBDD();
			$stm = $bdd->prepare("INSERT INTO $section VALUES (:id, :value1, :value2, :value3)");
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

	function deleteData(string $section, string $code) {
		$bdd = connectBDD();
		$stm = $bdd->prepare("DELETE FROM $section where id = '$code'");
		var_dump($stm);
		exit();
		$stm->execute();
	}