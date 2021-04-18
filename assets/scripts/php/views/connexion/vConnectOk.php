<?php 
	$title = "Gestion Parc - Connexion";
	$sub_title = "CONNEXION SUCCESS";
	$deconnexion = "";
	ob_start();
?>
<form action="index.php" method="POST" id="redirection">
	<input type="hidden" name="act" value="Home">
</form>
<script src="assets/scripts/js/redirection.js"></script>
<?php 
	$content = ob_get_clean();
	require 'assets/scripts/php/views/template.php';
?>