<?php


// Check if password is the same as repeated_password 

function samePasswordRegister($password1, $password2) {
    if($password1 == $password2){
        return true;
    }
    return false;
}

// Check the mail regex

function checkMailRegex($mail){
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}

// Check if the user is alredy exists

function checkUserExists($username, $users){
    foreach($users as $user){
        if($user['username'] == $username){
            return true;
        }
    }
    return false;
}

// Get a ID of a new user 

function getNewUserID($users){
    $lastUser = end($users);

    return $lastUser['id'] +1;
}

?>