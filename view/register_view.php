<?php

include("../templates/navbar_out.php");
include("../language/ca.php");

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

    <title>Document</title>
</head>

<body>

    <main class="registerMain">

        <div class="d-flex justify-content-center align-items-center vh-100 ">
            <form class="register_viewForm p-5 border rounded shadow" action="../controller/register_controller.php"
                method="POST">
                <h1><?= $text['register_title'] ?></h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><?= $text['register_name'] ?></label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><?= $text['register_username_field'] ?></label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><?= $text['register_password_field'] ?>
                    </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1"
                        class="form-label"><?= $text['register_repeat_password_field'] ?></label>
                    <input type="password" name="repeted_password" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><?= $text['register_email_field'] ?></label>
                    <input type="email" name="mail" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-dark w-100"><?= $text['submit_button'] ?> </button>

                <?php

                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    if (isset($_GET['register_error']) && $_GET['register_error'] == 1) {
                        echo $text['register_error_1'];
                    }
                    if (isset($_GET['register_error']) && $_GET['register_error'] == 2) {
                        echo $text['register_error_2'];
                    }
                    if (isset($_GET['register_error']) && $_GET['register_error'] == 3) {
                        echo $text['register_error_3'];
                    }
                    if (isset($_GET['register_error']) && $_GET['register_error'] == 4) {
                        echo $text['register_error_4'];
                    }
                    if (isset($_GET['register_error']) && $_GET['register_error'] == 5) {
                        echo $text['register_error_5'];
                    }

                    if (isset($_GET['register_code']) && $_GET['register_code'] == 0) {
                        echo $text['register_code_0'];
                    }
                }

                ?>

            </form>
        </div>

    </main>

    <?php

    include("../templates/footer.php");

    ?>