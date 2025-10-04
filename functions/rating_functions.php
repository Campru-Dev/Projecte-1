<?php 

// This function checks if the $rate is less than 10
// The film's rating can't exceed 10
function checkLower10($rate){
    if($rate > 10){
        return false;
    }
    return true;
}


?>