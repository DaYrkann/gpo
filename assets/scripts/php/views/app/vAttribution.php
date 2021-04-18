<?php
	$title = "Gestion Parc - Attribution";
	$sub_title = "Attribution";
	$deconnexion ='<button type="button"class="shadow btn btn-primary rounded-pill row justify-content-end" id="btn_nav_deconnect">Déconnexion</button>';
	ob_start();	
?>
<!-- Page Content -->
<div class="container">
	<div class="row">
		<div class="col-md-4 mb-5">
			<div class="d-flex justify-content-center bd-hisghlight">
				<form action="index.php" method="POST" id="attribution">
					<select class="form-select">
						<option selected>Liste Utilisateurs></option>
<?php
						for ($i = 0; $i < $maxUsers; $i++) {
?>			
							<option value="<?= $dataUsers[$i]['Id'] ?>"><?= $dataUsers[$i]['Nom'].' '.$dataUsers[$i]['Prenom'] ?></option>
<?php
						}
?>
					</select>
					<select class="form-select">
						<option selected>Liste Poste</option>
<?php
						for($i = 0; $i < $maxComp; $i++) {
?>
							<option value="<?= $dataComp[$i]['Id'] ?>"><?= $dataComp[$i]['Marque'] ?></option>	
<?php					
						}
?>					
					</select>
					<select class="form-select">
						<option selected>Creneau horaire</option>
<?php
						for($i = 0; $i < $maxTime; $i++) {
?>
							<option value="<?= $dataTime[$i]['Creneau'] ?>"><?= $dataTime[$i]['Creneau'] ?></option>	
<?php				
						}
?>					
					</select>
					<input type="hidden" name="act" value="App" />
					<input type="hidden" name="section" value="attribution" />
					<input type="hidden" name="act2" value="attribTime" />
				</form>
				<button type="button" class="shadow btn btn-info rounded-pill" id="btn_attrib">Attribution</button>
				<button type="button" id="btn_return" class="shadow btn btn-info rounded-pill ">Retour</button>
			</div>
		</div>
	</div>
	<div class="row">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Horaires</th>
					<th scope="col">Jours</th>
					<th scope="col">Utilisateurs</th>
					<th scope="col">Postes</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
<?php
				if(isset($listeTime)) {
					for($i = 0; $i < $maxListeTime; $i++) {
?>
						<tr>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6</td>
						</tr>
<?php		
					}
				}
?>	
			</tbody>
		</table>
	</div>
</div>
<script src='assets/scripts/js/navApp.js'></script>
<?php
	$content = ob_get_clean();
	require 'assets/scripts/php/views/template.php';
?>
 