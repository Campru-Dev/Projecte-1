<?php
$path = __DIR__."/../language/ca.php";
// echo $path;
include($path); //language text
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Cineverse Login</title>
</head>
<body>

    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php" >
          
            <img src="../img/logo.png" alt="" class="logoImageNavbar">
              <?= $text['title_index'] ?> 
   
        </a>
        
        <nav class="navbar bg-dark border-body" data-bs-theme="dark">

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="../view/login_view.php"><?= $text['login'] ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/register_view.php"><?= $text['register'] ?></a>
                </li>
                
            </ul>
       
    </div>
</nav>
    
</body>
</html>