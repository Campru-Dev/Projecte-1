<?php

// Check if file already exists
function checkFileExist($target_file)
{
    if (file_exists($target_file)) {
        // Delete the existent file to replace 
        unlink($target_file);
        return true; // deleted and replaced
    }
    return false; // didn't exists before
}

// Check file size
function file_size()
{
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        return true;
    }

    return false;
}

function file_type($imageFileType)
{
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    ) {
        return false;
    }
    return true;
}

// Check if 2 films haven't the same title

function check_title($title){
    foreach($_SESSION['films'] as $film){
        if($film['title'] == $title){
            return false;
        }
    }

    return true;
}

function getNewFilmID() {

    foreach($_SESSION['films'] as $film){
        
        $lastFilm = end($_SESSION['films']);

        return $lastFilm['id'] +1;
    
    }


}

?>