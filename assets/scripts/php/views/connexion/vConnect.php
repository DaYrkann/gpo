<?php
	$title = "Gestion Parc Ordinateurs - Connexion";
	$sub_title = "Connexion";
  $deconnexion = "";
	ob_start()
?>
  <!-- Page Content -->
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-md-4 mb-5">
        <div class="card h-100" >
          <img class="card-img-top" src="https://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title">Connexion</h4>
            <form action="index.php" method="POST" id="Connection">
	            <label for="login">Login : </label>
	            <input class="row justify-content-end form-control" type="text" id="login" name="login" placeholder="Login" />
	            <label for="password">Password : </label>
	            <input class="row justify-content-end form-control" type="password" id="password" name="password" placeholder="Password" />
              <input type="hidden" name="act" value="Connect" />
          </div>
          	<div class="card-footer">
            	<button type="button"class="shadow btn btn-warning rounded-pill row justify-content-center" id="btn_connect">Valider</button>
            	&nbsp&nbsp&nbsp&nbsp
            	<span id="error"></span>
          	</div>
          </form>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <script src="assets/scripts/js/connect.js"></script>
<?php
	$content = ob_get_clean();
	require 'assets/scripts/php/views/template.php';
?>