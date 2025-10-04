<?php 

session_start();

// Get the ID of the film to add

$id_film = $_GET['id_film'];

// Add film to watchlist of logged user

array_push($_SESSION['user_logged']['watchlist'], $id_film);

header('Location: ../view/app_view.php');
exit();

?>