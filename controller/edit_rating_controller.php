<?php

session_start();

// Importing functions

foreach (glob(__DIR__ . '/../functions/*.php') as $fitxer) {
    include($fitxer);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

    if (isset($_POST['rating']) && isset($_POST['id_film'])) {

        // Envoirment variables
        $rate = $_POST['rating'];
        $id_film = $_POST['id_film'];

        // Check the $rate is less than 10
        if (!checkLower10($rate)) {
            header('Location: ../view/edit_rating_view.php?error=1');
            exit();
        }

        foreach ($_SESSION['films'] as $key => $film) {

            if ($film['id'] == $_POST['id_film']) {

                $_SESSION['films'][$key]['rating'] = $rate;

            }
        }

        header('Location: ../view/app_view.php');
        exit();

    }
}



?>