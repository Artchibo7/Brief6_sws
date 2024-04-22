<?php
include __DIR__ . '/header.php';
?>

<!-- Ajouter apprenant -->

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-Acceuil-tab" data-bs-toggle="tab" data-bs-target="#nav-Acceuil" type="button" role="tab" aria-controls="nav-Acceuil" aria-selected="true">Accueil</button>
    <button class="nav-link" id="nav-Promotion-tab" data-bs-toggle="tab" data-bs-target="#nav-Promotion" type="button" role="tab" aria-controls="nav-Promotion" aria-selected="false">Promotion</button>
  </div>
</nav>

<div class="tab-pane fade" id="nav-Promotion" role="tabpanel" aria-labelledby="nav-Promotion-tab" tabindex="0">
  <div class="card-text mb-3 bg-light p-4 d-flex">
    <div>
      <h3>Promotion DWWM3</h3>
      <p>information généralde la DWWM3</p>
    </div>
    <div class="ms-auto">
      <a href="" type="button" class="btn btn-success align-self-end">Ajouter apprenant</a>
    </div>
  </div>
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <button class="nav-link active" id="nav-Tableau apprenants-tab" data-bs-toggle="tab" data-bs-target="#nav-Tableau apprenants" type="button" role="tab" aria-controls="nav-Tableau apprenants" aria-selected="true">Tableau apprenants</button>
      <button class="nav-link" id="nav-Retards-tab" data-bs-toggle="tab" data-bs-target="#nav-Retards" type="button" role="tab" aria-controls="nav-Retards" aria-selected="false">Retards</button>

    </div>
  </nav>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nom de famille</th>
        <th scope="col">Prénom</th>
        <th scope="col">Mail</th>
        <th scope="col">compte activé</th>
        <th scope="col">Rôle</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Bo</th>
        <td>Arthur</td>
        <td>trt@trt.trt</td>
        <td>oui</td>
        <td>Formateur</td>
        <td>
          <a href="editer">editer</a>
          <a href="supprimer">supprimer</a>
        </td>
      </tr>
      <tr>
        <th>Jacob</th>
        <td>Jacob</td>
        <td>trt@Thornton</td>
        <td>oui</td>
        <td>User</td>
        <td>
          <a href="editer">editer</a>
          <a href="supprimer">supprimer</a>
        </td>
      </tr>
      <tr>
        <th>Bult</th>
        <td>Larry</td>
        <td>trt@twitter</td>
        <td>non</td>
        <td>inconito</td>
        <td>
          <a href="editer">editer</a>
          <a href="supprimer">supprimer</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>