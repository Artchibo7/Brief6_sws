<?php
include_once __DIR__ . '/Includes/header.php';
include_once __DIR__ . '/Includes/colonne.php';

if ($_SESSION['role'] == 'user') {
    echo '<div>Vous $etes connecté!</div>';
?>

<div id="message">
    <?php
    if (isset( $_SESSION['message']) 
    ) {
        echo '<div class="alert bg-success" role="alert">' . $_SESSION['message'] . '</div>';
        echo '<div>
                <p>Alerte zone rouge!!!</p>
            </div>';
        unset($_SESSION['message']);
    }
    ?>
</div>

<?php } ?>

