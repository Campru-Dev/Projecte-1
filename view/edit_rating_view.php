<?php
session_start();

include("../language/ca.php");

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

<div class="d-flex justify-content-center align-items-center vh-100 ">
    <form class="login_viewForm p-5 border rounded shadow" action="../controller/edit_rating_controller.php" method="POST">
        <h1><?= $text['new_rating'] ?></h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><?= $text['rating'] ?></label>
            <input type="number" class="form-control" name="rating" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <input type="hidden" value="<?= $_GET['id_film'] ?>" name="id_film">
        </div>
        <button type="submit" class="btn btn-dark w-100"><?= $text['submit_button'] ?> </button>

        <?php 
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_GET['error']) && isset($_GET['error']) == 1){
                echo $text['rating_error'];
            }
        }
        
        ?>

    </form>
</div>