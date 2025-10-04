<?php
session_start();

include('../language/ca.php');

if ($_SESSION['user_logged']['rol'] == 'admin') {
    include('../templates/admin_navbar_app.php');
} else {
    include('../templates/navbar_app.php');
}

if (!isset($_SESSION['user_logged'])) {
    header('Location: ./home.php');
    exit();
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

    <link rel="stylesheet" href="../styles/styles.css">

    <title>Edit Profile</title>
</head>

<body>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['id_user'])) {
            foreach ($_SESSION['users'] as $key => $user) {
                if ($_GET['id_user'] == $user['id']) {


                    ?>
                    <div class="d-flex justify-content-center align-items-center vh-100 ">
                        <form class="register_viewForm p-5 border rounded shadow" action="../controller/edit_profile_controller.php"
                            method="POST">
                            <h1><?= $text['profile_edit_title'] ?></h1>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><?= $text['register_name'] ?></label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    value="<?= $_SESSION['user_logged']['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><?= $text['register_username_field'] ?></label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="<?= $_SESSION['user_logged']['username'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"><?= $text['register_password_field'] ?>
                                </label>
                                <input type="text" name="password" class="form-control" id="exampleInputPassword1"
                                    value="<?= $_SESSION['user_logged']['password'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="form-label"><?= $text['register_repeat_password_field'] ?></label>
                                <input type="text" name="repeted_password" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="<?= $_SESSION['user_logged']['password'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><?= $text['register_email_field'] ?></label>
                                <input type="email" name="mail" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="<?= $_SESSION['user_logged']['mail'] ?>">
                            </div>
                            <button type="submit" class="btn btn-dark w-100"><?= $text['edit_button'] ?> </button>

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

                    <?php

                }
            }
        }
    }

    ?>

</body>

</html>

<?php

include('../templates/footer.php');

?>