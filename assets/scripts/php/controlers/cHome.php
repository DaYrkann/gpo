<?php
/**
*
*
*
*
*/
if($_POST['act'] != "Home") {
	$view = 'assets/scripts/php/views/connexion/vError.php';
	$connected = false;
} else {
	$view = 'assets/scripts/php/views/home/vHome.php';
}
?>