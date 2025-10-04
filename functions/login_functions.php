<?php

    // Check if username match the regex

    function checkUsernameRegex($username)
    {
        $regex = '/^[a-z0-9]{1,10}$/';

        if(preg_match($regex, $username)){
            return true;
        }
        return false;

    }

    // Check if password match the regex

    function checkPasswordRegex($password)
    {
        $regex = '/^[a-z0-9]{1,10}$/';

        if(preg_match($regex, $password)){
            return true;
        }
        return false;
    }

    // Check if the user alredy exists

    function checkIfUserExists($username, $password, $users)
    {
        foreach($users as $user){

            if($user['username'] == $username){

                if($user['password'] == $password){
                    //if the password is correct return $user
                    return $user;
                } else {
                    // If password isn't correct return 3 - the fail code
                    return 3;
                }

            }
        }
        // If the user don't exists return 4 - the fail code
        return 4;
    }

?>