<?php

use src\Repositories\PromotionRepository;

include_once __DIR__ . '/../Includes/header.php';

include_once __DIR__ . '/../Includes/colonne.php';
if (isset($_SESSION['connecté'])) {
    echo '<div><a href="/" class="btn btn-info m-3">dashoard</a>';
};


$PromotionRepository = new PromotionRepository();


$PromotionRepository->displayAllPromotion();


 
