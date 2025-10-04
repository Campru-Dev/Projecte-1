<?php
session_start();

require_once './model/model_users.php';
require_once './model/model_films.php';

header ('Location: ./view/home.php');

