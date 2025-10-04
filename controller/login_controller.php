<?php

session_start();
foreach (glob(__DIR__ . '/../functions/*.php') as $fitxer) {
    include($fitxer);
}


if (
    $_SERVER['REQUEST_METHOD'] == 'POST' &&
    isset($_POST['username']) &&
    isset($_POST['password'])
) {

    // Variables envoirment
    $username = $_POST['username'];
    $password = $_POST['password'];
    $users = $_SESSION['users'];

    // Check if username matches regex

    if(!checkUsernameRegex($username)){
        header('Location: ../view/login_view.php?login_error=1');
        exit();
    }

    // Check if password matches regex

    if(!checkPasswordRegex($password)){
        header('Location: ../view/login_view.php?login_error=2');
        exit();
    }

    // Check if user exists

    if(checkIfUserExists($username, $password, $users) == 4){
        header('Location: ../view/login_view.php?login_error=4');
        exit();
    }

    // Check if password is correct

    if(checkIfUserExists($username, $password, $users) == 3){
        header('Location: ../view/login_view.php?login_error=3');
        exit();
    }

    // Login

    $_SESSION['user_logged'] = checkIfUserExists($username, $password, $users);

    // If we want redirect to inside the application you need to create the session variable $_SESSION['user']
    header('Location: ../view/app_view.php');
    exit();

}


?>