<?php
/**
* Controler de l'application, formate les bonnes variable et donne les bonnes vues à afficher.
*
*
*/
	require 'assets/scripts/php/modeles/mApp.php';
	if($_POST['section'] != 'utilisateur' && $_POST['section'] != 'poste' && $_POST['section'] != 'attribution') {
		$view = 'assets/scripts/php/views/connexion/vError.php';
	} else {
		if($_POST['section'] == 'utilisateur') {
			$section = $_POST['section'];
			$data = allData($section);
			$section =  ucfirst($section);
			$id= 'CodeUser';
			$column1 = 'Nom';
			$column2 = 'Prenom';
			$column3 = 'Mail';
			$max = sizeof($data);
			
			$view = 'assets/scripts/php/views/app/vRead.php';
		} else if($_POST['section'] == 'poste') {
			$section = $_POST['section'];
			$data = allData($section);
			$section = ucfirst($section);
			$id= 'CodePoste';
			$column1 = 'Marque';
			$column2 = 'NumSerie';
			$max = sizeof($data);

			$view = 'assets/scripts/php/views/app/vRead.php';
		}
	}

	if(($_POST['section'] == 'Utilisateur' || $_POST['section'] == 'Poste') && $_POST['act2'] == 'create') {
			$data1 = $_POST['data1'];
			$data2 = $_POST['data2'];
			$data3 = $_POST['data3'];
			$data4 = $_POST['data4'];
			$section = lcfirst($_POST['section']);
			if(createData($section, $data1, $data2, $data3, $data4)) {
				$messages = ucfirst($section)." créé avec succès.";	
			} else {
				$messages = 'Entrée existante.';
			}
			

			$view = 'assets/scripts/php/views/app/vMessages.php';

		}

	if(($_POST['section'] == 'Utilisateur' || $_POST['section'] == 'Poste') && $_POST['act2'] == 'delete') {
		$code = $_POST['delete'];
		exit();
		$section = lcfirst($_POST['section']);
		deleteData($section, $code);
		$messages = 'Entrée éffacée !';

		$view = 'assets/scripts/php/views/app/vMessages.php';
	}

	if($_POST['section'] == 'attribution') {
		$section = 'utilisateur';
		$dataUsers = allData($section);
		$section = 'poste';
		$dataComp = allData($section);
		$section = 'horaire';
		$dataTime = allData($section);
		$dataListeTime = allData('attribution');
		$maxUsers = sizeof($dataUsers);
		$maxComp = sizeof($dataComp);
		$maxTime = sizeof($dataTime);
		$maxListeTime = sizeof($dataListeTime);
		if($maxListeTime != 0) {
			$listeTime = true;
		}
		$view = 'assets/scripts/php/views/app/vAttrib.php';
	} 

	if($_POST['section'] == 'attribution' && $_POST['act2'] == 'attribTime') {
		$jour = date('d-m-y');
		$data = $_POST['user'];
		$user = $data[0];
		$data = $_POST['comp'];
		$comp = $data[0];
		$data = $_POST['time'];
		$time = $data[0];
		$messages = "Attribution éffectuée.";

		$view = 'assets/scripts/php/views/app/vMessages.php';
	}

	if($_POST['section'] == 'attribution' && $_POST['act2'] == 'cancel') {
		$creneau = $_POST['cancel'];
		cancelTime($creneau);
		$messages = "Annulation éffectuée.";

		$view = 'assets/scripts/php/views/app/vMessages.php';
	}
?>
