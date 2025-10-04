<?php
$path = __DIR__ . "/../language/ca.php";
// echo $path;
include($path); //language text
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./app_view.php">

                <img src="../img/logo.png" alt="" class="logoImageNavbar">
                <?= $text['title_index'] ?>

            </a>

            <nav class="navbar bg-dark border-body" data-bs-theme="dark">

                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="../view/favorites_list_view.php">
                            <?= $text['films_list'] ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2 2 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386" />
                            </svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="../view/films_list_view.php">
                            <?= $text['films_list'] ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                                <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                <path
                                    d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z" />
                            </svg></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link active text-white" href="../view/app_view.php"> <?= $text['my_watchlist'] ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-clipboard" viewBox="0 0 16 16">
                                <path
                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                                <path
                                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                            </svg> </a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="../view/edit_profile_view.php?id_user=<?= $_SESSION['user_logged']['id'] ?>"><?= $text['change_username'] ?></a></li>
                            <li><a class="dropdown-item" href="../controller/logout_controller.php"><?= $text['logout'] ?></a></li>
                        </ul>
                    </li>



                </ul>

        </div>
    </nav>