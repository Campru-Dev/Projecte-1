<?php

$users = [
    [
        "id" => 0,
        "name" => "Pepito",
        "username" => "pepito",
        "password" => "grillo",
        "mail" => "pepitogrillo@gmail.com",
        "rol" => "admin",
        "watchlist" => [
                100, 102
        ],
        "favorites" => [
            100, 110
        ]
    ],
    [
        "id" => 1,
        "name" => "Fernando",
        "username" => "fernando",
        "password" => "alonso",
        "mail" => "fernandoalonso33@gmail.com",
        "rol" => "user",
        "watchlist" => [

        ],
        "favorites" => [

        ]
    ],
    [
        "id" => 2,
        "name" => "María",
        "username" => "marialopez22",
        "password" => "2207",
        "mail" => "marialopez22@gmail.com",
        "rol" => "user",
        "watchlist" => [

        ],
        "favorites" => [
            
        ]
    ],
    [
        "id" => 3,
        "name" => "Javier",
        "username" => "javiramos89",
        "password" => "8981",
        "mail" => "javier.ramos89@example.com",
        "rol" => "user",
        "watchlist" => [

        ],
        "favorites" => [
            
        ]
    ]

];

$_SESSION['users'] = $users;

?>