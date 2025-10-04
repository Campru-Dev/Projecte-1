<?php
session_start();
unset($_SESSION['user_logged']);
// session_destroy();
header ('Location: ../view/home.php');
exit();