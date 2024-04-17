<?php
include __DIR__ . '/header.php';
?>

<!-- Partie promotion -->
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Accueil</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Promotion</button>
    </div>
</nav>

<!-- Toutes les promotions -->


<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
    <div class="card-text mb-3 bg-light p-4 d-flex">
        <div>
            <h3>Toutes les promotions</h3>
            <p>tableau des promotions de Simplon</p>
        </div>
        <div class="ms-auto">
            <a href="" type="button" class="btn btn-success align-self-end">Ajouter une promotion</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Promotion</th>
                <th scope="col">Début</th>
                <th scope="col">Fin</th>
                <th scope="col">Places</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>


