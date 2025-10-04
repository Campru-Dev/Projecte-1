<?php

session_start();
foreach (glob(__DIR__ . '/../functions/*.php') as $fitxer) {
    include($fitxer);
}

require_once '../model/model_users.php';

if (
    $_SERVER['REQUEST_METHOD'] == 'POST'
    && isset($_POST['name'])
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
        header('Location: ../view/register_view.php?register_error=1');
        exit();
    }

    // Check if password matches regex

    if (!checkPasswordRegex($password)) {
        header('Location: ../view/register_view.php?register_error=2');
        exit();
    }

    // Check if the password and repeted password are the same

    if (!samePasswordRegister($password, $repeted_password)) {
        header('Location: ../view/register_view.php?register_error=3');
        exit();
    }

    // Check the mail match requirements

    if (checkMailRegex($mail)) {
        header('Location: ../view/register_view.php?register_error=4');
        exit();
    }

    // Check if user alredy exists

    if (checkUserExists($username, $users)) {
        header('Location: ../view/register_view.php?register_error=5');
        exit();
    }

    // Register new user

    $newUser = [
        "id" => getNewUserID($users),
        "name" => $name,
        "username" => $username,
        "password" => $password,
        "mail" => $mail,
        "rol" => "user",
        "watchlist" => [

        ],
        "favorites" => [
            
        ]
    ];

    array_push($_SESSION['users'], $newUser);

    header('Location: ../view/register_view.php?register_code=0');
    exit();

}




?>