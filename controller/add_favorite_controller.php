<?php 

session_start();

// Get the ID of the film to add

$id_film = $_GET['id_film'];

// Add film to watchlist of logged user

array_push($_SESSION['user_logged']['favorites'], $id_film);

header('Location: ../view/favorites_list_view.php');
exit();

?>