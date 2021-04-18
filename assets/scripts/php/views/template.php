<!DOCTYPE html>
<html lang="en">

<?php require_once 'assets/scripts/php/views/head.php'; ?>
<body>
<?php
	require_once 'assets/scripts/php/views/navigation.php'; 
	require_once 'assets/scripts/php/views/header.php';
?>
<?= $content ?>
<?php
	require_once 'assets/scripts/php/views/footer.php';
?>
  <!-- Bootstrap core JavaScript -->
  <script src="assets/scripts/css/bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="assets/scripts/css/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>