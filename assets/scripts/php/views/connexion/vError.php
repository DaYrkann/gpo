<?php 
	$title = "Gestion Parc - Error !";
	$sub_title = "ERROR CONNECTION REFUSED";
	$deconnexion = "";
	ob_start();
?>
<form action="index.php" method="POST" id="redirection">
	<input type="hidden" name="act" value="">
</form>

<script src="assets/scripts/js/redirection.js"></script>
<?php
	$content = ob_get_clean();
	require 'assets/scripts/php/views/template.php';
?>