  <!-- Header -->
  <header class="bg-success py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2"><?= $sub_title ?></h1>
          <p class="lead mb-5 text-white-50"><?= $_SESSION['date'] ?><?php 
          if(isset($_SESSION['nameAdmin'])) {
            echo(' Bonjour '.$_SESSION['nameAdmin'].'.');
          };?></p>
          </p>
        </div>
      </div>
    </div>
  </header>