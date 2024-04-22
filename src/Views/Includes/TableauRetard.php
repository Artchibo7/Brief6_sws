<?php
include_once __DIR__ . '/Includes/header.php';
?>

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Accueil</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Promotion</button>
  </div>
</nav>

<!-- Partie Accueil -->

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active p-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <H4>Cours du jour</H4>
    <div class="card-text mb-3 bg-light p-4 d-flex">
      <div>
        <h3>DWWM3-après midi</h3>
        <p>15 participants</p>
      </div>
      <div class="ms-auto">
        <p><?php echo date('d-m-Y'); ?></p>
        <div class="">
          <a href="" type="button" class="btn btn-warning align-self-end">Signatures recueillies</a>
        </div>
      </div>
    </div>
    <div class="card-text mb-3 bg-light p-4 d-flex">
      <div>
        <h3>DWWM3-matin</h3>
        <p>15 participants</p>
      </div>
      <div class="ms-auto">
        <p><?php echo date('d-m-Y'); ?></p>
        <div class="">
          <a href="" type="button" class="btn btn-success align-self-end">Signatures recueillies</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Partie promotion -->

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
    <div class="card-text mb-3 bg-light p-4 d-flex">
      <div>
        <h3>Toutes les promotions</h3>
        <p>tableau des promotions de Simplon</p>
      </div>
      <div class="ms-auto">
        <a href="" type="button" class="btn btn-success align-self-end">Ajouter la promotion</a>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Promotion</th>
          <th scope="col">Début</th>
          <th scope="col">Fin</th>
          <th scope="col">Places</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <a href="voir">voir</a>
            <a href="editer">editer</a>
            <a href="supprimer">supprimer</a>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>
            <a href="voir">voir</a>
            <a href="editer">editer</a>
            <a href="supprimer">supprimer</a>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
          <td>
            <a href="voir">voir</a>
            <a href="editer">editer</a>
            <a href="supprimer">supprimer</a>
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
          <td>
            <a href="voir">voir</a>
            <a href="editer">editer</a>
            <a href="supprimer">supprimer</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>