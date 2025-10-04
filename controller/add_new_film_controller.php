<?php

session_start();
// Import all functions
foreach (glob(__DIR__ . '/../functions/*.php') as $fitxer) {
    include($fitxer);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        isset($_POST['title'])
        && isset($_POST['producer'])
        && isset($_POST['year'])
        && isset($_POST['genre'])
        && isset($_POST['rating'])
    ) {

        $title = $_POST['title'];
        $producer = $_POST['producer'];
        $year = $_POST['year'];
        $genre = $_POST['genre'];
        $rating = $_POST['rating'];

        // Check if 2 films haven't the same title

        if(!check_title($title)){
            header('Location: ../view/add_film_view.php?error=1');
        }

        // Check the $rate is less than 10
        if (!checkLower10($rating)) {
            header('Location: ../view/edit_rating_view.php?error=2');
            exit();
        }

        // Image envoirment variables
        $target_dir = "../img/films/";
        $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
        $uploadOK = 1;

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        // Image Comprovations

        // Check if the image is alredy existing, if exists do a replace
        checkFileExist($target_file);

        // Check the image don't have a lot of size
        if (file_size()) {
            header('Location: ../view/add_film_view.php?error_image=1');
            exit();
        }

        // Check the image, has a format of image
        if (!file_type($imageFileType)) {
            header('Location: ../view/add_film_view.php?error_image=2');
            exit();
        }

        // Finally image move to directory of films and add the new film to array of films
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            
            $newFilm = [
                "id" => getNewFilmID(),
                "title" => $title,
                "director" => $producer,
                "year" => $year,
                "genre" => $genre,
                "rating" => $rating,
                "image" => '../img/films/' . basename( $_FILES["fileToUpload"]["name"])
            ];

            array_push($_SESSION['films'] , $newFilm);

            header('Location: ../view/add_film_view.php');
            exit();

        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
        }



    }
}

?>