<?php
include_once __DIR__ . '/Includes/header.php';
?>

<!-- Partie de connexion confirmation mot de passe -->
<div class="container bg-light p-4  col-md-5 mt-5 shadow-lg p-3 mb-5">
  <form id="form" class="d-flex flex-column mb-3">
    <div class="text-center">
      <h2>Bienvenue</h2>
      <p>Pour clôturer votre inscription et créer votre compte, veuillez choisir un mot de passe!</p>
    </div>
    <div id="confirmationMotDePasse" class="mb-3">
      <label for="motdepasse" class="form-label">Mot de passe*</label>
      <input type="password" class="form-control" id="motdepasse" placeholder="*****">
    </div>
    <div class="mb-3">
      <label for="confirmationmotdepasse" class="form-label">Confirmez mot de passe*</label>
      <input type="password" class="form-control" id="confirmationmotdepasse" placeholder="*****">
    </div>
    <button type="submit" class="btn btn-primary">Connexion</button>
  </form>
</div>