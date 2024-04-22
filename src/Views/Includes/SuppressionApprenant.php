<?php
include __DIR__ . '/Includes/header.php';
?>

<!-- Edition d'un apprenants -->

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Accueil</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Promotion</button>
  </div>
</nav>

<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
  <div class="card-text mb-3 bg-light p-4 d-flex">
    <div>
      <h4>Edition d'un apprenants</h4>
      <p>les changements apliqués sont définitifs</p>
    </div>
  </div>
  <div class="d-flex flex-column p-4 mb-3">
    <div class="mb-3">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" class="form-control" id="nom" placeholder=".....">
    </div>
    <div class="mb-3">
      <label for="prenom" class="form-label">Prénom</label>
      <input type="text" class="form-control" id="prenom" placeholder=".....">
    </div>
    <div class="mb-3">
      <label for="adressemail" class="form-label">Adresse email</label>
      <input type="email" class="form-control" id="adressemail" placeholder=".....">
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="compteactive">
      <label class="form-check-label" for="compteactive">Compte activé</label>
    </div>
    <div class="d-flex justify-content-between">
      <a href="" type="button" class="btn btn-primary">Retour</a>
      <div>
        <a href="" type="button" class="btn btn-danger">Supprimer</a>
        <a href="" type="button" class="btn btn-primary">Sauvegarder</a>
      </div>
    </div>
  </div>
</div>