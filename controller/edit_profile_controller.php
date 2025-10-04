<?php

session_start();

foreach (glob(__DIR__ . '/../functions/*.php') as $fitxer) {
    include($fitxer);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        isset($_POST['name'])
        && isset($_POST['username'])
        && isset($_POST['password'])
        && isset($_POST['repeted_password'])
        && isset($_POST['mail'])
    ) {

        // Envoirment variables
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repeted_password = $_POST['repeted_password'];
        $mail = $_POST['mail'];

        // Users Array
        $users = $_SESSION['users'];

        // Check if the username match the regex

        if (!checkUsernameRegex($username)) {
            header('Location: ../view/edit_profile_view.php?login_error=1');
            exit();
        }

        // Check if password matches regex

        if (!checkPasswordRegex($password)) {
            header('Location: ../view/edit_profile_view.php?login_error=2');
            exit();
        }

        // Check if the password and repeted password are the same

        if (!samePasswordRegister($password, $repeted_password)) {
            header('Location: ../view/edit_profile_view.php?login_error=3');
            exit();
        }

        // Check the mail match requirements

        if (checkMailRegex($mail)) {
            header('Location: ../view/edit_profile_view.php?login_error=4');
            exit();
        }

        $_SESSION['user_logged']['name'] = $name;
        $_SESSION['user_logged']['username'] = $username;
        $_SESSION['user_logged']['password'] = $password;
        $_SESSION['user_logged']['mail'] = $mail;

        header('Location: ../view/app_view.php');
        exit();

    }
}



?>