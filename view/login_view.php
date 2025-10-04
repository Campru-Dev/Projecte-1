<?php
include("../templates/navbar_out.php");
include("../language/ca.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <title>Cineverse Login</title>
</head>

<body>

    <main class="loginMain">
        <div class="d-flex justify-content-center align-items-center vh-100 ">
            <form class="login_viewForm p-5 border rounded shadow" action="../controller/login_controller.php"
                method="POST">
                <h1><?= $text['login_title'] ?></h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><?= $text['username_field'] ?></label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><?= $text['password_field'] ?> </label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-dark w-100"><?= $text['submit_button'] ?> </button>

                <p><?= $text['register_text'] ?> <a href="../view/register_view.php"><?= $text['register_text_anchor'] ?></a></p>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    if (isset($_GET['login_error']) && $_GET['login_error'] == 1) {
                        echo $text['login_error_1'];
                    }
                    if (isset($_GET['login_error']) && $_GET['login_error'] == 2) {
                        echo $text['login_error_2'];
                    }
                    if (isset($_GET['login_error']) && $_GET['login_error'] == 3) {
                        echo $text['login_error_3'];
                    }
                    if (isset($_GET['login_error']) && $_GET['login_error'] == 4) {
                        echo $text['login_error_4'];
                    }

                }

                ?>

            </form>
        </div>
    </main>

</body>

</html>

<?php
include("../templates/footer.php");

?>