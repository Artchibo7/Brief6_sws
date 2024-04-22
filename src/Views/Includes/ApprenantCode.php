<?php
include __DIR__ . '/Includes/header.php';
?>

<!-- Partie apprenants -->

<nav>
  <div class="nav nav-tabs" id="nav-tab1" role="tablist">
    <button class="nav-link active" id="nav-home-tab1" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Accueil</button>
  </div>
</nav>

<!-- Partie aprèss midi -->

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
          <label for="inputPassword5" class="form-label">Code*</label>
          <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder=".....">
          <a href="" type="button" class="btn btn-primary align-self-end">Valider sa presnece</a>
        </div>
      </div>
    </div>

    <!-- Partie matin -->

    <div class="card-text mb-3 bg-light p-4 d-flex">
      <div>
        <h3>DWWM3-matin</h3>
        <p>15 participants</p>
      </div>
      <div class="ms-auto">
        <p><?php echo date('d-m-Y'); ?></p>
        <div class="">
          <a href="" type="button" class="btn btn-secondary align-self-end">Signatures recueillies</a>
        </div>
      </div>
    </div>
  </div>
</div>