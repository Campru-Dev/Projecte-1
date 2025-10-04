<?php 

$films = 
[
    [
        "id" => 100,
        "title" => "Interestellar",
        "director" => "Christopher Nolan",
        "year" => 2014,
        "genre" => "Science fiction",
        "rating" => 9,
        "image" => "../img/films/interstellar.jpg"
    ],
    [
        "id" => 101,
        "title" => "F1 - Movie",
        "director" => "Joseph Kosinski",
        "year" => 2025,
        "genre" => "MotorSport",
        "rating" => 8,
        "image" => "../img/films/f1-movie.jpg"
    ],
    [
        "id" => 102,
        "title" => "Hotel Transsilvània 2",
        "director" => "Genndy Tartakovsky",
        "year" => 2015,
        "genre" => "Infantil",
        "rating" => 6,
        "image" => "../img/films/hotel-transilvania2.png"
    ],
    [
        "id" => 103,
        "title" => "El Señor de los Anillos: La Comunidad del Anillo",
        "director" => "Peter Jackson",
        "year" => 2001,
        "genre" => "Fantasía / Aventura",
        "rating" => 9.5,
        "image" => "../img/films/señor_de_los_anillos_comunidad.jpg"

    ],
    [
        "id" => 104,
        "title" => "El Señor de los Anillos: Las Dos Torres",
        "director" => "Peter Jackson",
        "year" => 2002,
        "genre" => "Fantasía / Aventura",
        "rating" => 9,
        "image" => "../img/films/las_dos_torres.jpg"
    ],
    [
        "id" => 105,
        "title" => "El Señor de los Anillos: El Retorno del Rey",
        "director" => "Peter Jackson",
        "year" => 2003,
        "genre" => "Fantasía / Aventura",
        "rating" => 9,
        "image" => "../img/films/retorno_del_rey.jpg"
    ],


    [
        "id" => 106,
        "title" => "Star Wars: Episodio IV - Una Nueva Esperanza",
        "director" => "George Lucas",
        "year" => 1977,
        "genre" => "Ciencia Ficción / Space Opera",
        "rating" => 9,
        "image" => "../img/films/starwarsIV.jpg"
    ],
    [
        "id" => 107,
        "title" => "Star Wars: Episodio V - El Imperio Contraataca",
        "director" => "Irvin Kershner",
        "year" => 1980,
        "genre" => "Ciencia Ficción / Space Opera",
        "rating" => 9,
        "image" => "../img/films/starwarsV.jpg"
    ],
    [
        "id" => 108,
        "title" => "Star Wars: Episodio VI - El Retorno del Jedi",
        "director" => "Richard Marquand",
        "year" => 1983,
        "genre" => "Ciencia Ficción / Space Opera",
        "rating" => 9,
        "image" => "../img/films/starwarsVI.jpg"
    ],
    [
        "id" => 109,
        "title" => "Uncharted",
        "director" => "Ruben Fleischer",
        "year" => 2022,
        "genre" => "Acción / Aventura",
        "rating" => 7,
        "image" => "../img/films/uncharted.jpg"
    ],
    [
        "id" => 110,
        "title" => "The NeverEnding Story",
        "director" => "Wolfgang Petersen",
        "year" => 1984,
        "genre" => "Fantasía",
        "rating" => 7.5,
        "image" => "../img/films/never_ending_story.jpg"
    ],
    [
        "id" => 111,
        "title" => "El Padrino",
        "director" => "Francis Ford Coppola",
        "year" => 1972,
        "genre" => "Crimen / Drama",
        "rating" => 8.5,
        "image" => "../img/films/padrino.jpg"
    ],
    [
        "id" => 112,
        "title" => "Karate Kid",
        "director" => "John G. Avildsen",
        "year" => 1984,
        "genre" => "Drama / Deporte",
        "rating" => 8,
        "image" => "../img/films/karate_kid.jpg"
    ],
    [
        "id" => 113,
        "title" => "Grease",
        "director" => "Randal Kleiser",
        "year" => 1978,
        "genre" => "Musical / Romance",
        "rating" => 7.5,
        "image" => "../img/films/grease.jpg"
    ],
    [
        "id" => 114,
        "title" => "La La Land",
        "director" => "Damien Chazelle",
        "year" => 2016,
        "genre" => "Musical / Romance / Terror",
        "rating" => 8,
        "image" => "../img/films/La_La_Land.png"
    ],
    [
        "id" => 115,
        "title" => "Matrix",
        "director" => "Lana y Lilly Wachowski",
        "year" => 1999,
        "genre" => "Ciencia Ficción / Acción",
        "rating" => 8.5,
        "image" => "../img/films/matrix.jpg"
    ],
    [
        "id" => 116,
        "title" => "Forrest Gump",
        "director" => "Robert Zemeckis",
        "year" => 1994,
        "genre" => "Drama / Romance",
        "rating" => 8,
        "image" => "../img/films/forrest_gump.jpg"
    ]

];


$_SESSION['films'] = $films;


?>