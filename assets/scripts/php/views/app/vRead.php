<?php 
	$title = "Gestion Parc - ".$section."";
	$sub_title = $section;
	$deconnexion ='<button type="button"class="shadow btn btn-primary rounded-pill row justify-content-end" id="btn_nav_deconnect">Déconnexion</button>';
	ob_start();	
?>
<!-- Page Content -->
<table class="table" id="liste">
	<thead class="thead-dark">
		<tr>
	      <th scope="col">#</th>
	      <th scope="col"><?= $column1; ?></th>
	      <th scope="col"><?= $column2; ?></th>
	      <th scope="col"><?= $column3; ?></th>
	      <th class="delete" scope="col" hidden>Supprimer</th>
	    </tr>	
	</thead>
	<tbody>
<?php
	if($section == 'Utilisateur') {
		for($i = 0; $i < $max; $i++) {
?>
	<tr>
		<td><?= $i+1 ?></td>
		<td><input type="text" value="<?= $data[$i]['Nom']  ?>" disabled /></td>
		<td><input type="text" value="<?= $data[$i]['Prenom'] ?>" disabled /></td>
		<td><input type="text" value="<?= $data[$i]['Mail']  ?>" disabled/></td>
		<td>
			<form action="index.php" method="POST" id="delete">
				<input type="radio" name="id" value="<?= $data[$i]['Id']; ?>" hidden / >
				<input type="hidden" name="act" value="App" />
				<input type="hidden" name="section" value="<?= $section; ?>" />
				<input type="hidden" name="act2" value="delete" />
			</form>
		</td>
	</tr>
<?php
		}
	} else {
		for($i = 0; $i < $max; $i++) {
?>
	<tr>
		<td><?= $i+1 ?></td>
		<td><input type="text" value="<?= $data[$i]['Marque']  ?>" disabled /></td>
		<td><input type="text" value="<?= $data[$i]['NumSerie'] ?>" disabled /></td>
		<td><input type="text" value="<?= $data[$i]['Disponibilite']  ?>" disabled/></td>
		<td>
			<form action="index.php" method="POST" id="delete">
				<input type="radio" name="id" value="<?= $data[$i]['Id']; ?>" hidden / >
				<input type="hidden" name="act" value="App" />
				<input type="hidden" name="section" value="<?= $section; ?>" />
				<input type="hidden" name="act2" value="delete" />
			</form>
		</td>
	</tr>
<?php	
		}				
	}
?>
	<tr id="nouveau" hidden>
		<form action="index.php" method="POST" id="new">
			<td><input type="text" id="input1" name="data1" disabled /></td>
			<td><input type="text" id="input2" name="data2" /></td>
			<td><input type="text" id="input3" name="data3" disabled /></td>
			<td><input type="text" id="input4" name="data4" /></td>
			<td></td>
			<input type="hidden" name="act" value="App" />
			<input type="hidden" name="section" value="<?= $section; ?>" />
			<input type="hidden" name="act2" value="create" />
		</form>
	</tr>
  	</tbody>
</table>

		<button type="button" id="btn_create" class="shadow btn btn-primary rounded-pill ">Créer</button>
		<button type="button" id="btn_update" class="shadow btn btn-primary rounded-pill ">Modifier</button>
		<button type="button" id="btn_delete" class="shadow btn btn-primary rounded-pill ">Supprimer</button>
		<button type="button" id="btn_return" class="shadow btn btn-primary rounded-pill ">Retour</button>
		<button type="button" id="btn_valider_create" class="shadow btn btn-primary rounded-pill " hidden>Valider</button>
		<button type="button" id="btn_valider_delete" class="shadow btn btn-primary rounded-pill" hidden>Valider</button>
		<span id="messages"></span>

<script src='assets/scripts/js/cud.js'></script>
<?php
	$content = ob_get_clean();
	require 'assets/scripts/php/views/template.php';
?>