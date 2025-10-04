<?php
session_start();

if($_SESSION['user_logged']['rol'] == 'admin'){
    include('../templates/admin_navbar_app.php');
} else {
    include('../templates/navbar_app.php');
}

if (!isset($_SESSION['user_logged'])) {
    header('Location: ./home.php');
    exit();
}

$userLogged = $_SESSION['user_logged'];


$films = $_SESSION['films'];
$id_user = $_SESSION['user_logged']['id'];
$rol_user = $_SESSION['user_logged']['rol'];
$watch_list_user = $_SESSION['user_logged']['watchlist'];

$watchlist_app = [];

//Iterem la llista watchlist de l'usuari logged
foreach ($_SESSION['user_logged']['favorites'] as $id_film) {
    // Quan trobem les ids iterem la llista de pelicules
    foreach ($films as $film) {
        // Quan trobem una coincidencia amb les id's de les pelicules de l'usuari
        // l'afegim al array.
        if ($film['id'] == $id_film) {
            array_push($watchlist_app, $film);
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/../styles/styles.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cineverse Favorites</title>
</head>

<body>

    <h2><?= $text['favorite_films'] ?></h2>

    <div
        style="display: flex; justify-content: center; flex-wrap: wrap; gap: 73px; margin-top: 40px; margin-bottom: 40px">

        <?php

        foreach ($watchlist_app as $film) {

            ?>

            <div class="card" style="width: 18rem;">
                <img src="<?= $film['image'] ?>" class="card-img-top" alt="..." height="400px">
                <div class="card-body">
                    <h5 class="card-title"><?= $film['title'] ?></h5>
                    <p class="card-text"><?= $text['producer'] ?><?= $film['director'] ?></p>
                    <p class="card-text"><?= $text['year'] ?><?= $film['year'] ?></p>
                    <p class="card-text"><?= $text['genre'] ?><?= $film['genre'] ?></p>

                    <a href="../controller/delete_film_favorite.php?id_film=<?= $film['id'] ?>"
                        class="btn btn-danger">Delete <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                            <path
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                        </svg></a>
                </div>
            </div>

            <?php

        }

        ?>

    </div>

    <?php

    include('../templates/footer.php');

    ?>