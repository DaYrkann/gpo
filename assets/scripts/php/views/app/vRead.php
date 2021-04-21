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
<?php
		if($section == 'Utilisateur') {
?>
			<th scope="col"><?= $column3; ?></th>
<?php
	}
?>	      
	      <th class="delete" scope="col" hidden>Supprimer</th>
	    </tr>	
	</thead>
	<tbody>
		<form action="index.php" method="POST" id="delete">
<?php
	if($section == 'Utilisateur') {
		for($contUser = 0; $contUser < $max; $contUser++) {
?>
		<tr>
			<td><?= $contUser+1 ?></td>
			<td><input name ="data" type="text" value="<?= $data[$contUser]['Nom']  ?>" disabled /></td>
			<td><input name ="data" type="text" value="<?= $data[$contUser]['Prenom'] ?>" disabled /></td>
			<td><input name ="data" type="text" value="<?= $data[$contUser]['Mail']  ?>" disabled/></td>
			<td>
					<input type="radio" name="delete" value="<?= $data[$contUser]['CodeUser']; ?>" hidden / >
					<input type="hidden" name="act" value="App" />
					<input type="hidden" name="section" value="<?= $section; ?>" />
					<input type="hidden" name="act2" value="delete" />
			</td>
		</tr>
	</form>
<?php
		}
	} else {
?>
		<form action="index.php" method="POST" id="<?= 'delete'.$contComp ?>">
<?php
		for($contComp = 0; $contComp < $max; $contComp++) {
?>
			<tr>
				<td><?= $contComp+1 ?></td>
				<td><input name ="data" type="text" value="<?= $data[$contComp]['Marque']  ?>" disabled /></td>
				<td><input name ="data" type="text" value="<?= $data[$contComp]['NumSerie'] ?>" disabled /></td>
				<td>
						<input type="radio" name="delete" vname = "data" alue="<?= $data[$contComp]['CodePoste']; ?>" hidden / >
						<input type="hidden" name="act" value="App" />
						<input type="hidden" name="section" value="<?= $section; ?>" />
						<input type="hidden" name="act2" value="delete" />
				</td>
			</tr>
		</form>
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
