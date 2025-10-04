<?php 
session_start();

// Get film ID 

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id_film'])){

        $id_film = $_GET['id_film'];

        // Quit from watchlist of user_logged
        foreach($_SESSION['user_logged']['favorites'] as $key => $film){

            if($id_film == $film){

                unset($_SESSION['user_logged']['favorites'][$key]);
                // Redirect to app_view.php
                header ('Location: ../view/favorites_list_view.php');
                exit();
            }
        }

    }
}




?>