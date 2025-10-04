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

$watchlist_app = [];

// Iterem el array de pel·licules
foreach ($films as $film) {
    // definim la variable boleana en false cada iteracio
    $inWatchlist = false;

    // iterem el array de la watchlist de l'usuari logged
    foreach($_SESSION['user_logged']['watchlist'] as $id_film){
        // Si coincideix, la boleana cambia a true i tanquem el bucle de la watchlist
        if($film['id'] == $id_film){
            $inWatchlist = true;
            break;
        }
    }
    // En cas de no coincidir, s'afegeix al array 
    if(!$inWatchlist){
        array_push($watchlist_app, $film);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/../styles/styles.css">

    <title>Films List</title>
</head>

<body>

    <h1><?= $text['films_list'] ?></h1>

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

                    <a href="../controller/add_film_controller.php?id_film=<?= $film['id'] ?>" class="btn btn-primary">+ <?= $text['add_watchlist'] ?></a>
                </div>
            </div>

            <?php

        }

        ?>

    </div>
    <?php

    include('../templates/footer.php');

    ?>

</body>

</html>