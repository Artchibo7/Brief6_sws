<?php
include __DIR__ . '/Includes/header.php';
?>

<!-- Partie création de la promotion-->

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Accueil</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Promotion</button>
  </div>
</nav>

<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
  <div class="card-text mb-3 bg-light p-4 d-flex">
    <div>
      <h4>Création d'une promotion</h4>
    </div>
  </div>
  <div class="d-flex flex-column p-4 mb-3">
    <div class="mb-3">
      <label for="nomdelapromotion" class="form-label">Nom de la promotion</label>
      <input type="text" class="form-control" id="nomdelapromotion" placeholder=".....">
    </div>
    <div class="mb-3">
      <label for="datedebut" class="form-label">Date de début</label>
      <input type="date" class="form-control" id="datedebut" placeholder="">
    </div>
    <div class="mb-3">
      <label for="datedefin" class="form-label">Date de fin</label>
      <input type="date" class="form-control" id="datedefin" placeholder="">
    </div>
    <div class="mb-3">
      <label for="placesdisponibles" class="form-label">Place(s) disponible(s)</label>
      <input type="number" class="form-control" id="placesdisponibles" placeholder="">
    </div>
    <div class="d-flex justify-content-between">
      <a href="" type="button" class="btn btn-primary justify-self-start">retour</a>
      <a href="" type="button" class="btn btn-primary align-self-end">sauvegarder</a>
    </div>
  </div>
</div>