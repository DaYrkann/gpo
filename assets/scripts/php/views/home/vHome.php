<?php
	$title = "Gestion Parc - Acceuil";
	$sub_title = "Acceuil";	
	$deconnexion ='<button type="button"class="shadow btn btn-primary rounded-pill" id="btn_nav_deconnect">Déconnexion</button>';
	ob_start();
?>
<!-- Page Content -->
<form action="index.php" method="POST" id="attribution">
	<input type="hidden" name="act" value="App" />
	<input type="hidden" name="section" value="attribution" />
</form>
</form>
<form action="index.php" method="POST" id="utilisateur">
	<input type="hidden" name="act" value="App" />
	<input type="hidden" name="section" value="utilisateur" />
</form>
<form action="index.php" method="POST" id="poste">
	<input type="hidden" name="act" value="App" />
	<input type="hidden" name="section" value="poste" />
</form>
<div class="container">
	<div class="row">
		<div class="col-md-4 mb-5">
			<form action="index.php" method="POST" id="choix">
				<div classe="row justify-content-center">
					<button type="button" class="shadow btn btn-primary rounded-pill" id="btn_users">Utilisateurs</button>
					<button type="button" class="shadow btn btn-primary rounded-pill" id="btn_comp">Ordinateurs</button>
					<button type="button" class="shadow btn btn-primary rounded-pill" id="btn_attrib">Attribution</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="assets/scripts/js/navApp.js"></script>
<?php
	$content = ob_get_clean();
	require 'assets/scripts/php/views/template.php';
?>