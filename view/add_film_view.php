<?php

session_start();

include('../language/ca.php');
include('../templates/admin_navbar_app.php');

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
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Cineverse add film</title>
</head>

<body>


    <div class="d-flex justify-content-center align-items-center vh-100">

        <form class="login_viewForm p-5 border rounded shadow" action="../controller/add_new_film_controller.php"
            method="POST" enctype="multipart/form-data">
            <div class="mb-3">

                <h1>Afegir Pel·licula</h1>

                <label class="form-label" for="title"><?= $text['title'] ?></label>
                <input type="text" class="form-control" name="title" id="title">

                <label class="form-label" for="producer"><?= $text['producer'] ?></label>
                <input type="text" class="form-control" name="producer" id="producer">

                <label class="form-label" for="year"><?= $text['year'] ?></label>
                <input type="text" class="form-control" name="year" id="year">

                <label class="form-label" for="genre"><?= $text['genre'] ?></label>
                <input type="text" class="form-control" name="genre" id="genre">

                <label class="form-label" for="rating"><?= $text['rating'] ?></label>
                <input type="text" class="form-control" name="rating" id="rating">

                <label class="form-label" for="fileToUpload"><?= $text['file'] ?></label>
                <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
            </div>
            <button type="submit" class="btn btn-dark w-100"><?= $text['submit_button'] ?></button>
            <?php

            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo $text['error_film1'];
                }
                if (isset($_GET['error']) && $_GET['error'] == 2) {
                    echo $text['rating_error'];
                }
                if (isset($_GET['error_image']) && $_GET['error_image'] == 1) {
                    echo $text['error_image1'];
                }
                if (isset($_GET['error_image']) && $_GET['error_image'] == 2) {
                    echo $text['error_image2'];
                }

            }

            ?>
        </form>
    </div>

    <?php

    include('../templates/footer.php');

    ?>

</body>

</html>