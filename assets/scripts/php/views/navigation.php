<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Gestion de Parc Ordinateurs</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <?= $deconnexion ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <form action ="index.php" method="POST" id="home">
  <input type="hidden" name="act" value="Home" />
</form>
<form action="index.php" method="POST" id="deconnexion">
  <input type="hidden" name="act" value="Deconnect" />
</form>